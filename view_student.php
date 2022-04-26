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

    $sql = "SELECT * from user WHERE usertype = 'student'";
    
    $result = mysqli_query($data,$sql);

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
</head>
<body>
    <?php
        include 'admin_sidebar.php';
    
    ?>


    <div class="content">
        <center>
        <h1>Student Data</h1> <br><br>

        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px;">UserNaim</th>
                <th style="padding: 20px; font-size: 15px;">Email</th>
                <th style="padding: 20px; font-size: 15px;">Phone</th>
                <th style="padding: 20px; font-size: 15px;">Password</th>
                <th style="padding: 20px; font-size: 15px;">Delete</th>
                <th style="padding: 20px; font-size: 15px;">Update</th>
            </tr>

            <?php
            while($info=$result->fetch_assoc())
            {
            
            ?>

            <tr>
                <td style="padding: 20px;">
                    <?php echo "{$info['username']}"; ?>
                </td>
                <td style="padding: 20px;">
                     <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['phone']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['password']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "<a class='btn btn-danger' onClick=\" javascript:return confirm('Are You Sure To Delete This Student')\" href='delete.php?student_id={$info['id']}'>DELETE</a>";?>
                </td>

                <td style="padding: 20px;">
                    <?php echo "<a class='btn btn-info' href='update_student.php?student_id={$info['id']}'> UPDATE </a>"; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        </center>
    </div>
    


<!--javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>