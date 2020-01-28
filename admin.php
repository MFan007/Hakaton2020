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
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Admin control</title>
</head>
<body>
    <!-- LOGIN FORM -->
    <div class="admin">
        <form class="box" action="adminlogin.inc.php" method="post">
            <h1>Login</h1>
            <?php
            /*
             * POP-UP MESSAGES FOR THE LOGIN FORM
             */
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="errormessage">Fill in all the fields!</p>';
                }
                else if($_GET['error'] == "wrongpassword"){
                    echo '<p class="errormessage">Wrong password!</p>';
                }
                else if($_GET['error'] == "nouser"){
                    echo '<p class="errormessage">Access Denied!</p>';
                }
                else if($_GET['error'] == "sqlerror"){
                    echo '<p class="errormessage">Error 404</p>';
                }
            }
            ?>
            <input type="text" name="admin" placeholder="Username" maxlength="30">
            <input type="password" name="password" placeholder="Password" maxlength="30">
            <input type="submit" name="login" id="adminlogin" value="Login">
            <input type="reset" name="reset" value="Cancel" id="reset">
        </form>
    </div>
</body>
</html>
</body>
</html>