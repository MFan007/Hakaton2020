<?php
session_start();
require "db_config.php";

if(isset($_SESSION['userId'])) {
    ?>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Click is a website that stores a database of mobile phones in order to show information about them">
    <meta name="keywords" content="click, mobile, phone, mobile phone, telecommunication, internet, camera, search, information, info, technology, HTML, CSS, JavaScript, PHP, MySQL, JQuery, Bootstrap">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Darko Antunovic, Milos Medan, VTS">
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <link rel="stylesheet" type="text/css" href="main6.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Click</title>
</head>
<body>
<!-- Top Navigation Bar -->
<header>
    <div class="logo"><a href="index.php">CLICK</a></div>
    <nav class="active">
        <ul>
            <li><a href="about.php">About</a></li>
            <!-- Sub-menu 2 -->
            <?php
            if(!isset($_SESSION['userId'])) {
                echo '<li class="sub-menu"><a>Profile</a>
                        <ul>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </li>';
            }
            ?>
        </ul>
    </nav> <!-- falling menu for register/login and search bar -->
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    <!-- Responsive part with the treee stripes -->
</header>
<div class="searchBar">
    <form action="search.php" method="post">
        <input class="searchField" type="text" name="searchField" id="searchField" placeholder="Search for...">
        <button class="button" type="submit" name="searchButton" id="searchButton"><i class="fas fa-search"></i></button>
    </form>
</div>
<p class="title">LOW PRICE - HIGH PERFORMANCE</p>
<div id="bigdiv">
    <div class="fixed-size-container">
        <a href="4.php"><img src="images/content4.jpg" alt="Samsung Galaxy A50"></a>
        <a href="4.php"><div class="text-block">
                <h2>Samsung Galaxy A50</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="11.php"><img src="images/content11.jpg" alt="Samsung Galaxy S10 lite"></a>
        <a href="11.php"><div class="text-block">
                <h2>Samsung Galaxy S10 lite</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="28.php"><img src="images/content28.jpg" alt="Huawei P30 lite"></a>
        <a href="28.php"><div class="text-block">
                <h2>Huawei P30 lite</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="10.php"><img src="images/content10.jpg" alt="Samsung Galaxy A71"></a>
        <a href="10.php"><div class="text-block">
                <h2>Samsung Galaxy A71</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="34.php"><img src="images/content34.jpg" alt="Xiaomi Redmi 8A"></a>
        <a href="34.php"><div class="text-block">
                <h2>Xiaomi Redmi 8A</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="41.php"><img src="images/content41.jpg" alt="Xiaomi Mi 9 lite"></a>
        <a href="41.php"><div class="text-block">
                <h2>Xiaomi Mi 9 lite</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="38.php"><img src="images/content38.jpg" alt="Xiaomi Redmi Note 8T></a>
        <a href="38.php"><div class="text-block">
                <h2>Xiaomi Redmi Note 8T</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="48.php"><img src="images/content48.jpg" alt="Honor 20 lite"></a>
        <a href="48.php"><div class="text-block">
                <h2>Honor 20 lite</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="23.php"><img src="images/content23.jpg" alt="Huawei nova 5z"></a>
        <a href="23.php"><div class="text-block">
                <h2>Huawei nova 5z</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="42.php"><img src="images/content42.jpg" alt="Xiaomi Redmi K20"></a>
        <a href="42.php"><div class="text-block">
                <h2>Xiaomi Redmi K20</h2>
            </div></a>
    </div>
</div>

<!-- footer -->
<footer class="site-footer">
    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved</p>
</footer>

<!-- Script necessary to execute the toggle menu function -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.menu-toggle').click(function () {
            $('nav').toggleClass('active')
        })
        $('ul li').click(function () {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
        })
    })
</script>
</body>
</html>
    <?php
}
else{
    header("Location: index.php");
}
?>
