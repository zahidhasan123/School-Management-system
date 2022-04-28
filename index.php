<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $msg=$_SESSION['message'];

        echo "<script type='text/javascript'>
        alert('$msg');
        </script>";
    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management system</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--Navbar--->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contract</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Admission</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-success" href="login.php">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

<!--main section-->
    <div class="section1">

        <img class="main_img" src="Images/school_management.jpg" alt="">

    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <img class="img2" src="Images/school2.jpg" alt="">
            </div>
            <div class="col-md-8">
                <h1>Welcome To Our School</h1>
                <p>We look forward in building one to one relationship between teachers and parents as mentors and students as active recipients and constructors of their own future. We work towards giving a secured and trustworthy environment so that the overall experience for every student at school becomes a joyous and memorable one.</p>

            </div>
        </div>

    </div>

    <center class="pad">
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="Images/teacher1.jpg" alt="">
                <p>In most countries, formal teaching of students is usually carried out by paid professional teachers. This article focuses on those who are employed, as their main role</p>

            </div>
            <div class="col-md-4">
                <img class="teacher" src="Images/teacher2.jpg" alt="">
                <p>In most countries, formal teaching of students is usually carried out by paid professional teachers. This article focuses on those who are employed, as their main role</p>
                
            </div>
            <div class="col-md-4">
                <img class="teacher" src="Images/teacher3.jpg" alt="">    
                <p>In most countries, formal teaching of students is usually carried out by paid professional teachers. This article focuses on those who are employed, as their main role</p>

            </div>
        </div>
    </div>
    <center class="pad">
        <h1>Our Courses</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="Images/graphic.jpg" alt="" class="teacher">
                <h3>Graphics Design</h3>

            </div>
            <div class="col-md-4">
                <img src="Images/marketing.png" alt="" class="teacher">
                <h3>Marketing Course</h3>
                
            </div>
            <div class="col-md-4">
                <img src="Images/web.jpg" alt="" class="teacher">
                <h3>Web Designing</h3>
                
            </div>
        </div>
    </div>

    <!--Form Section-->
    <center class="pad">
        <h1>Admission Here</h1>
    </center>

    <div align="center" class="admission">
        <form action="data_check.php" method="POST">
            <div class="adm">
                <label class="label_text" for="">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm">
                <label class="label_text" for="">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm">
                <label class="label_text" for="">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm">
                <label class="label_text" for="">Message</label>
                <textarea class="input_text" name="message" id=""></textarea>
            </div>
            <div class="adm">
                <input class="btn btn-primary btn-lg" id="submit" type="submit" value="apply" name="apply">
            </div>
        </form>
        </div>
        <!--Footer-->

        <footer>
            <span>Created By <a href="https://www.facebook.com/profile.php?id=100050514144071">@zahid_hasan</a> | © 2021 All rights reserved | Mobile: +8801625836102</span>
        
        </footer>

    <!--JAvascript--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>