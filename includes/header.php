<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php title(); ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!--=======login system start=====-->
    <?php
    session_start();
    if(!isset($_SESSION['email'])){
    header("Location: http://localhost/php/login/admin/login.php");
    }
    ?>
    <!--=======login system end=======-->

    <nav>
        <ul>
            <li><a href="http://localhost/php/login/index.php">Ball animation</a></li>
            <li><a href="clock.php">animation clock</a></li>
            <li><a href="calculator.php">calculator</a></li>
            <li><a href="slide.php">javascript slide</a></li>
            <li><a href="comming-soon.php">canvas drowing</a></li>
            <li><a href="comming-soon.php">game score</a></li>
            <li><a href="comming-soon.php">image lightbox</a></li>
            <li><a href="comming-soon.php">Slideshow Gallery</a></li>
            <li><a href="comming-soon.php">Tab Image Gallery</a></li>
        </ul>
    </nav>




    <section id="sidebar">
        <img src="img/banner.png" alt="banner.png">
    </section>
