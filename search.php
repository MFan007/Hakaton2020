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
        <meta name="description"
              content="Click is a website that stores a database of mobile phones in order to show information about them">
        <meta name="keywords"
              content="click, mobile, phone, mobile phone, telecommunication, internet, camera, search, information, info, technology, HTML, CSS, JavaScript, PHP, MySQL, JQuery, Bootstrap">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="Darko Antunovic, Milos Medan, VTS">
        <meta name="viewport" content="with=device-width, initial scale=1.0">
        <link rel="stylesheet" type="text/css" href="search.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <title>Search results</title>
    </head>
    <body>
    <!-- Top Navigation Bar -->
    <header>
        <div class="logo"><a href="index.php">CLICK</a></div>
        <nav class="active">
            <ul>
                <li><a href="about.php">About</a></li>
                <?php
                /*
                 * IF THE SESSION FOR ANY USER IS SET PRINT THE FOLLOWING
                 */
                if (!isset($_SESSION['userId'])) {
                    echo '<li class="sub-menu"><a>Profile</a>
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
    <div class="searchBar">
        <form action="search.php" method="post">
            <input class="searchField" type="text" name="searchField" id="searchField" placeholder="Search for...">
            <button class="button" type="submit" name="searchButton" id="searchButton"><i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <?php

    $search = $_POST['searchField'];
    /*
     * IF THE SEARCH FIELD IS EQUAL TO 'Search for...' REDIRECT USER TO INDEX.PHP
     */
    if ($_POST['searchField'] == 'Search for...') {
        header("Location: index.php");
    }
    /*
     * IF THE SEARCH FIELD IS ALL BUT EMPTY EXECUTE THE CODE
     */
    if ($_POST['searchField'] !== ''){
    require "db_config.php";

    /*
     * IF THE SEARCH FIELD IS NOT SET, PRINT NOTHING
     */
    if (!isset($search)){
        echo '';
    } /*
     * EXECUTE A QUERY WHERE PRODUCTS THAT ARE SEARCHED FOR ARE EQUAL TO THE GIVEN CONDITIONS
     */
    else {
    $result = mysqli_query($connection, "SELECT * FROM products WHERE phone LIKE '%$search%' ORDER BY product_id ASC");
    $num_rows = mysqli_num_rows($result);
    ?>
    <div class="content">
        <!-- Prints the number of results that are found -->
        <p style="margin-top: 20px; color: #fff;"><strong><?php echo $num_rows; ?></strong> result(s) for
            '<?php echo $search; ?>'</p>
        <?php
        /*
         * MYSQLI_FETCH_ARRAY OR MYSQLI_FETCH_ASSOC FETCHES A RESULT OF ROWS AS AN ARRAY OR AN ASSOCIATIVE
         */
        while ($rows = mysqli_fetch_array($result)) {
            /*
             * GIVE THE VARIABLES VALUES OF THE ROWS FROM THE DATABASE
             */
            $id = $rows['product_id'];
            $phone = $rows['phone'];
            $description = $rows['description'];

            /*
             * PRINT THE IMAGE AND THE TEXT ABOUT THE PHONE
             * IMAGE AND TEXT ARE LINKS TO THE SPECIFIED MODEL
             */
            echo '<a href="' . $id . '.php"><img src="images\content' . $id . '.jpg">';
            echo '<br><p><a href="' . $id . '.php">' . $phone . '</a></p><br><span>' . $description . '</span><br><br>';
        }
        /*
         * THIS IS NECESSARY IF WE WANT TO SEARCH AGAIN
         */
        mysqli_free_result($result);
        }
        }
        else {
            header("Location: index.php");
            mysqli_close($connection);
        }
        ?>
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