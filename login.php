<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body background="Images/aa.jpg" class="body_des">
    <center>
        <div class="form_des">
            <center class="title_deg">Login Form</center>
            <h4>
                <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginmsg'];
                ?>
            </h4>
            <form class="login_form" action="login_check.php" method="POST">
                <div>
                    <label class="label_des" for="">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_des" for="">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Login">
                </div>
        </form>
        </div>
    </center>


    <!--javascript link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>