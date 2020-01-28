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
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Title</title>
</head>
<body>
<!-- Top Navigation Bar -->
<header>
    <div class="logo" ><a href="index.php">CLICK</a></div>
    <nav class="active">
        <ul>
            <?php
            if(isset($_SESSION['userId'])) {
                echo '<li><a href="about.php">About</a></li>';
            }
            ?>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div> <!-- Responsive part with the treee stripes -->
</header>
<div class="column-layout">
    <!-- Login menu -->
    <div class="column-one">
        <form class="box" action="login.inc.php" method="post">
            <h1>Login</h1>
            <?php
            /*
             * POP-UP MESSAGES FOR LOGIN FORM
             */
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="errormessage">Fill in all the fields!</p>';
                }
                else if($_GET['error'] == "wrongpassword"){
                    echo '<p class="errormessage">Wrong password!</p>';
                }
                else if($_GET['error'] == "nouser"){
                    echo '<p class="errormessage">No user found!</p>';
                }
                else if($_GET['error'] == "sqlerror"){
                    echo '<p class="errormessage">Error 404</p>';
                }
            }
            ?>
            <input type="text" name="mailusername" placeholder="Username or Email" maxlength="30">
            <input type="password" name="password" placeholder="Password" maxlength="30">
            <input type="submit" name="login" id="login" value="Login">
            <input type="reset" name="reset" value="Cancel" id="reset">
            <p><a href="register.php" style="text-decoration: none">Don't have an account? <strong>Register</strong></a></p>
        </form>
    </div>
</div>
<!-- footer -->
<footer class="site-footer">
    <p>Copyright &copy 2020 All Rights Reserved</p>
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