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
<p class="title">Top 10 By Daily interest</p>
<div id="bigdiv">
    <div class="fixed-size-container">
        <a href="4.php"><img src="images/content4.jpg" alt="Samsung Galaxy A50"></a>
        <a href="4.php"><div class="text-block">
                <h2>Samsung Galaxy A50</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="1.php"><img src="images/content1.jpg" alt="Samsung Galaxy S10"></a>
        <a href="1.php"><div class="text-block">
                <h2>Samsung Galaxy S10</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="32.php"><img src="images/content32.jpg" alt="Xiaomi Mi Note 10 Pro"></a>
        <a href="32.php"><div class="text-block">
                <h2>Xiaomi Mi Note 10 Pro</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="10.php"><img src="images/content10.jpg" alt="Samsung Galaxy A71"></a>
        <a href="10.php"><div class="text-block">
                <h2>Samsung Galaxy A71</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="17.php"><img src="images/content17.jpg" alt="Apple iPhone X"></a>
        <a href="17.php"><div class="text-block">
                <h2>Apple iPhone X</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="45.php"><img src="images/content45.jpg" alt="Honor V30 Pro"></a>
        <a href="45.php"><div class="text-block">
                <h2>Honor V30 Pro</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="38.php"><img src="images/content38.jpg" alt="Xiaomi Redmi Note 8T></a>
        <a href="38.php"><div class="text-block">
                <h2>Xiaomi Redmi Note 8T</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="47.php"><img src="images/content47.jpg" alt="Honor 20 Pro"></a>
        <a href="47.php"><div class="text-block">
                <h2>Honor 20 Pro</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="16.php"><img src="images/content16.jpg" alt="Apple iPhone 11 Pro Max"></a>
        <a href="16.php"><div class="text-block">
                <h2>Apple iPhone 11 Pro Max</h2>
            </div></a>
    </div>
    <div class="fixed-size-container">
        <a href="27.php"><img src="images/content27.jpg" alt="Huawei P30 Pro"></a>
        <a href="27.php"><div class="text-block">
                <h2>Huawei P30 Pro</h2>
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