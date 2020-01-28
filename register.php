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
    <link rel="stylesheet" type="text/css" href="register.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Log in to Click</title>
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
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    <!-- Responsive part with the treee stripes -->
</header>
<!-- Register menu -->
<div class="column-layout">
    <div class="column-two">
        <form class="box" action="register.inc.php" method="post">
            <h1>Register</h1>
            <?php
            /*
             * POP-UP MESSAGES FOR REGISTER FORM
             */
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="errormessage">Fill in all the fields!</p>';
                }
                else if($_GET['error'] == "invalidmailuid"){
                    echo '<p class="errormessage">Enter the correct email or username!</p>';
                }
                else if($_GET['error'] == "invalidmail"){
                    echo '<p class="errormessage">Enter the correct email!</p>';
                }
                else if($_GET['error'] == "invaliduid"){
                    echo '<p class="errormessage">Enter the correct username!</p>';
                }
                else if($_GET['error'] == "passwordcheck"){
                    echo '<p class="errormessage">Passwords do not match!</p>';
                }
                else if($_GET['error'] == "useroremailtaken"){
                    echo '<p class="errormessage">Username or email already in use!</p>';
                }
                else if($_GET['error'] == "sqlerror"){
                    echo '<p class="errormessage">Error 404</p>';
                }
            }
            /*
             * BECAUSE THE USER IS SUCCESSFULLY REGISTERED AFTER HE FILLS ALL THE NECESSARY DATA
             * WE HAVE TO PUT THE @ SIGN BEFORE THE $_GET METHOD OTHERWISE IT WOULD PRINT THE ERROR
             * BECAUSE THE SIGNUP INDEX IS NOT RECOGNISED
             */
            else if(isset($_GET['signup'])){
                if($_GET['signup'] == 'success') {
                    echo '<p class="successmessage">Registration successful!</p>';
                }
            }
            ?>
            <input type="text" name="username" placeholder="Username" id="username" maxlength="30">
            <input type="password" name="password" placeholder="Password" id="password" maxlength="30">
            <input type="password" name="confirm_password" placeholder="Repeat Password" id="confirm_password" maxlength="30">
            <input type="email" name="email" placeholder="E-Mail" id="email" maxlength="30">
            <input type="submit" name="register" value="Register" id="register">
            <input type="reset" name="reset" value="Cancel" id="reset">
            <p><a href="login.php" style="text-decoration: none">Already have an account? <strong>Log in</strong></a></p>
        </form>
    </div>
</div>
<!-- footer -->
<footer class="site-footer">
    <p>Copyright &copy; 2020 All Rights Reserved</p>
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