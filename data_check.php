<?php
    session_start();

    $host = "localhost";

    $user = "root";

    $password = "";

    $db = "schoolproject";

    $data = mysqli_connect($host, $user, $password, $db);
    
    if(isset($_POST['apply']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO admission(name, email, phone, message) values ('$name', '$email', '$phone', '$message')";

        $result = mysqli_query($data, $sql);

        if($result)
        {
            $_SESSION['message']="Your Application sent successfully";
            header("location:index.php");
        }
        else
        {
            echo "Apply Failed";
        }
    }

?>