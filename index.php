<?php
session_start();
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
    <link rel="stylesheet" type="text/css" href="index.css">
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
            <!-- Sub-menu 2 -->
            <?php
            /*
             * IF THE SESSION FOR ANY USER IS SET PRINT THE FOLLOWING
             */
            if(!isset($_SESSION['userId'])) {
                echo "<li class='sub-menu'><a>Profile</a>
                        <ul>
                            <li><a href='register.php'>Register</a></li>
                            <li><a href='login.php'>Login</a></li>
                        </ul>
                      </li>";
            }
            ?>
        <ul>
            <?php
            if(isset($_SESSION['userId'])) {
                echo "<li><a href=\"about.php\">About</a></li>";
                echo "<li class='sub-menu'><a class='logged'>Logged in as: ".$_SESSION['userUid'],"!</a>
                        <ul>
                            <li><a href='logout.php'>Logout!</a></li>
                        </ul>
                      </li>";
            }
            ?>
        </ul>
        </ul>
    </nav> <!-- falling menu for register/login and search bar -->
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    <!-- Responsive part with the treee stripes -->
</header>
<?php
if(!empty($_SESSION['userId'])) {
    ?>
    <!-- Search field -->
    <div class="searchBar">
        <form action="search.php" method="post">
            <input class="searchField" type="text" name="searchField" id="searchField" placeholder="Search for...">
            <button class="button" type="submit" name="searchButton" id="searchButton"><i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <!-- Main menu, content -->
    <div id="bigdiv">
        <div class="fixed-size-container">
            <a href="10daily.php"><img src="images/ourpicks7.jpg" alt="Top 10 by daily interest"></a>
            <a href="10daily.php">
                <div class="text-block">
                    <h2>Top 10 by daily interest</h2>
                </div>
            </a>
        </div>
        <div class="fixed-size-container">
            <a href="10most_popular.php"><img src="images/sfusers.jpg" alt="Most popular 2020"></a>
            <a href="10most_popular.php">
                <div class="text-block">
                    <h2>Most popular 2020</h2>
                </div>
            </a>
        </div>
        <div class="fixed-size-container">
            <a href="10user_friendly.php"><img src="images/mate30pro.png" alt="Most user friendly"></a>
            <a href="10user_friendly.php">
                <div class="text-block">
                    <h2>Most user friendly</h2>
                </div>
            </a>
        </div>
        <div class="fixed-size-container">
            <a href="10selfies.php"><img src="images/selfie.jpg" alt="Top 10 phones for selfies"></a>
            <a href="10selfies.php">
                <div class="text-block">
                    <h2>Top 10 phones for selfies</h2>
                </div>
            </a>
        </div>
        <div class="fixed-size-container">
            <a href="10fans.php"><img src="images/ourpicks5.jpg" alt="Top 10 by fans"></a>
            <a href="10fans.php">
                <div class="text-block">
                    <h2>Top 10 by fans</h2>
                </div>
            </a>
        </div>
        <div class="fixed-size-container">
            <a href="10price_perf.php"><img src="images/ourpicks6.jpg" alt="Low price - high performance"></a>
            <a href="10price_perf.php">
                <div class="text-block">
                    <h2>Low price - high performance</h2>
                </div>
            </a>
        </div>
    </div>
    <?php
}
else{
    ?>
<div class="nosession">
    <h1>Welcome to Click!</h1>
    <h2>In order to view the content of the page</h2>
    <h2>be sure to signup!</h2>
    <h2>If you have not already registered</h2>
    <h2>Make sure you do by clicking the link on the top!</h2>
    <h2>After successfully registering</h2>
    <h2>Be sure to login with your credentials</h2>
    <h2>And enjoy the content that this website has to offer!</h2>
</div>
<?php
}
?>
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


