<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location: login.php');

    }
    elseif($_SESSION['usertype'] == 'admin')
    {
        header('location: login.php');
    }




    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "schoolproject";

    $data = mysqli_connect($host, $user, $password, $db);

    $name = $_SESSION['username'];

    $sql = "SELECT * FROM user WHERE username = '$name' ";

    $result = mysqli_query($data,$sql);

    $info = mysqli_fetch_assoc($result);



    if(isset($_POST['update']))

    {
        
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];


        $sql2 = "UPDATE user SET  phone='$phone', email='$email', password='$password' WHERE username='$name' ";

        $result2 = mysqli_query($data,$sql2);

        if($result2)
        {
            echo "<script type='text/javascript'>
            
            alert('Student Data Updated');

            </script>";;
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
        include 'student_sidebar.php';
    
    ?>
     <div class="content">
        <center>
        <h1>Update Student Data</h1>
        <div class="div_style">
            <form action="#" method="POST">
                
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php echo "{$info['email']}" ?>">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password" value="<?php echo "{$info['password']}" ?>">
                </div>
                <div>
                    <input class="btn btn-success" type="submit" name="update" value="update">
                </div>
            </form>
        </div>
        </center>
    </div>
    


<!--javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>