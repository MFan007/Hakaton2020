<?php

    session_start();

    require "db_config.php";
if(!empty($_SESSION['userId'])) {
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
        <link rel="stylesheet" type="text/css" href="about.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <title>About us</title>
    </head>
    <body>
    <!-- Top Navigation Bar -->
    <header>
        <div class="logo"><a href="index.php">CLICK</a></div>
        <nav class="active">
            <ul>
                <li class="sub-menu"><a>Market</a>
                    <ul>
                        <li><a href="10daily.php">Top 10 By Daily Interest</a></li>
                        <li><a href="10most_popular.php">Most Popular 2020</a></li>
                        <li><a href="10user_friendly.php">Most User Friendly</a></li>
                        <li><a href="10selfies.php">Top 10 Phones For Selfies</a></li>
                        <li><a href="10fans.php">Top 10 By Fans</a></li>
                        <li><a href="10price_perf.php">Low Price - High Performance</a></li>
                    </ul>
                </li>
                <!-- Sub-menu 2 -->
                <?php
                /*
                 * IF THE SESSION FOR ANY USER IS SET PRINT THE FOLLOWING
                 */
                if (!isset($_SESSION['userId'])) {
                    echo '<li class="sub-menu"><a href="#">Profile</a>
                        <ul>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </li>';
                }
                ?>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <!-- Responsive part with the treee stripes -->
    </header>
    <!-- Searh field -->
    <div class="searchBar">
        <form action="search.php" method="post">
            <input class="searchField" type="text" name="searchField" id="searchField" placeholder="Search for...">
            <button class="button" type="submit" name="searchButton" id="searchButton"><i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <!-- Content of the page -->
    <div id="main">
        <h1>About us</h1>
        <div class="aboutClick">
            <p>Click is a simple and common website where users can get information about the latest news about mobile
                phones and mobile phone technology. </p>
        </div>
        <h1>Developers</h1>
        <div class="about-us">
            <table class="table-about-as">
                <tr>
                    <td rowspan="2"><img src="images/darko.jpg" alt="Darko"></td>
                    <td><h1>Darko Antunović</h1>
                        <h2>Founder</h2></td>
                </tr>
                <tr>
                    <td><h3>PHP7 / MySQL</h3><br>Currently studying Technical informatics on Subotica Tech College of
                        Applied Sciences.<br>
                        Second year graduate, finished Technical high school as a Network Administrator.
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"><img src="images/milos.jpg" alt="Milos"></td>
                    <td><h1>Miloš Medan</h1>
                        <h2>Co-Founder</h2></td>
                </tr>
                <tr>
                    <td><h3>HTML5 / CSS3</h3><br>Currently studying Technical informatics on Subotica Tech College of
                        Applied Sciences.<br>
                        Second year graduate, finished Technical high school as a Network Administrator.
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- footer -->
    <footer class="site-footer">
        <p class="copyright-text">Copyright &copy 2020 All Rights Reserved</p>
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
