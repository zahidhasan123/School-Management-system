<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location: login.php');

    }
    elseif($_SESSION['usertype'] == 'student')
    {
        header('location: login.php');
    }



    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "schoolproject";

    $data = mysqli_connect($host, $user, $password, $db);

    if(isset($_POST['add_student']))
    {
        $username = $_POST['name'];

        $email = $_POST['email'];

        $phone = $_POST['phone'];

        $password = $_POST['password'];

        $usertype = "student";

        $check="SELECT * FROM user WHERE username='$username' ";
        $check_user=mysqli_query($data,$check);
        $row_count=mysqli_num_rows($check_user);

        if($row_count==1)
        {
            echo "<script type='text/javascript'>
            
            alert('Username Already Exist. Try Another One');

            </script>";
        }
        else
        {

        

        $sql = "INSERT INTO user(username, phone, email, usertype, password) VALUES ('$username', '$phone', '$email', '$usertype', '$password')";

        $result = mysqli_query($data,$sql);
        if($result)
        {
            echo "<script type='text/javascript'>
            
            alert('Data Uploaded Successfully');

            </script>";
        }
        else
        {
            echo "Upload Failed";
        }

    }


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    
    <title>Admin Pannel</title>
    <style type="text/css"> 
        label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px; 
            padding-bottom: 10px;
        }
        .div_style
        {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;

        }
    </style>
</head>
<body>
    <?php
        include 'admin_sidebar.php';
    
    ?>
    <div class="content">
        <center>
        <h1>Add Student</h1>
        <div class="div_style">
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input class="btn btn-success" type="submit" name="add_student" value="Add Student">
                </div>
            </form>
        </div>
        </center>
    </div>

    


<!--javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>