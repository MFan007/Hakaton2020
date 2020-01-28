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
    <title>Admin Controls</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

<?php

/*
 * CHECKS IF THE USER HAS LEGALLY ENTERED THIS SITE, IF NOT IT REDIRECTS HIM TO THE LOGIN FORM
 */
if (isset($_SESSION['adminUserId'])){
require "db_config.php";

?>

<div class="productdata">
    <h2>
        Product list:
    </h2>
    <?php

    /*
     * THIS QUERY PRINTS ALL THE PRODUCTS FROM THE DATABASE
     */
    $q = "SELECT * FROM products ORDER BY product_id ASC";
    $result = mysqli_query($connection, $q)
        or die(mysqli_error($connection));

    /*
     * IF THE NUMBER OF ROWS IS GREATER THAN 0 THEN THE RESULT WILL BE LIST OF PRODUCTS
     * MYSQLI_FETCH_ARRAY OR MYSQLI_FETCH_ASSOC FETCHES A RESULT OF ROWS AS AN ARRAY OR AN ASSOCIATIVE
     */
    if (mysqli_num_rows($result)>0) {
        while ($record = mysqli_fetch_array($result)) {
            echo "$record[product_id] = $record[phone] = $record[description] = $record[price]<br>";
        }
        /*
         * FREES THE MEMORY ASSOCIATED WITH THE RESULT
         * WE NEED THIS IN ORDER TO BE ABLE TO EXECUTE ONE FORM AT THE TIME
         */
        mysqli_free_result($result);
    }
    else {
        echo "There is no data in the database!";
    }
    ?>
</div>
<div class="userdata">
    <h2>
        List of all users:
    </h2>
    <?php

    /*
     * THIS QUERY PRINTS ALL THE USERS FROM THE DATABASE
     */
    $q = "SELECT * FROM users ORDER BY id ASC";
    $result = mysqli_query($connection, $q)
        or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0) {
        while ($record = mysqli_fetch_array($result)) {
            echo "$record[id] = $record[username] = $record[email]<br>";
        }
        mysqli_free_result($result);
    }
    else {
        echo "There is no data in the database!";
    }
    ?>
</div>
<div class="admin">
    <h1>
        Admin Controls
    </h1>
    <h1>
        Products:
    </h1>
    <h2>Insert:</h2>
    <!--
    THIS IS THE FORM FOR INSERTING PRODUCTS INTO THE DATABASE
    -->
    <form method="post" action="admindelete.php">
        <input type="hidden" name="form" value="1">
        <label for="phone">Insert product phone: </label><input type="text" id="phone" name="phone"><br>
        <label for="description">Insert product description: </label><input type="text" id="description" name="description"><br>
        <label for="price">Insert product price: </label><input type="text" id="price" name="price"><br>
        <input type="submit" value="Insert">
    </form>
    <h2>Delete:</h2>
    <!--
    THIS IS THE FORM FOR DELETING PRODUCTS FROM THE DATABASE
    -->
    <form method="post" action="admindelete.php">
        <input type="hidden" name="form" value="2">
        <!--
        DELETING PHONE
        -->
        <span>Delete phone:</span><select name="productID">
            <option value ='null' selected>Choose</option>
            <?php
            $q = "SELECT product_id, phone FROM products ORDER BY product_id ASC";
            $resultSet = mysqli_query($connection,$q);
            if (mysqli_num_rows($resultSet) > 0) {
                while ($rows = mysqli_fetch_array($resultSet)) { ?>
                    <option value="<?php echo $rows['product_id']; ?>"><?php echo $rows['phone']; ?></option>
                    <?php
                }
                mysqli_free_result($resultSet);
            }
            ?>
        </select><br>
        <input type="submit" value="Delete Product">
    </form>
        <br>
        <h2>
            Update:
        </h2>
        <!--
        THIS IS THE FORM FOR UPDATING INFORMATIONS FOR PHONES
        -->
        <!--
        WE NEED BOTH THE DROPDOWN LIST AND THE FORM BECAUSE IF WE ONLY HAD
        ONE OF THE TWO THE UPDATING WOULD NOT BE POSSIBLE
        DROPDOWN LIST DETERMINES WHICH PRODUCT BY ID WE WANT TO UPDATE
        AND THE FORM DETERMINES HOW DO WE WANT TO UPDATE IT
        -->
        <span>Select product:</span><select name="updateID">
            <option value ='null' selected>Choose</option>
            <?php
            $q = "SELECT product_id, phone FROM products ORDER BY product_id ASC";
            $resultSet = mysqli_query($connection,$q);
            if (mysqli_num_rows($resultSet) > 0) {
                while ($rows = mysqli_fetch_array($resultSet)) { ?>
                    <option value="<?php echo $rows['product_id']; ?>"><?php echo $rows['phone']; ?></option>
                    <?php
                }
                mysqli_free_result($resultSet);
            }
            ?>
        </select><br>
        <form method="post" action="admindelete.php">
            <input type="hidden" name="form" value="3">
            <label for="phone">Update product phone: </label><input type="text" id="phone" name="phoneUpdate"><br>
            <label for="description">Update product description: </label><input type="text" id="description" name="descriptionUpdate"><br>
            <label for="price">Update product price: </label><input type="text" id="price" name="priceUpdate"><br>
            <input type="submit" value="Update">
        </form>
    <br>
    <h1>
        Users:
    </h1>
    <h2>Delete:</h2>
    <!--
    THIS IS THE FORM FOR DELETING THE USERS FROM THE DATABASE
    -->
    <form method="post" action="admindelete.php">
        <input type="hidden" name="form" value="4">
        <!--
        DELETING USER BY USERNAME
        -->
        <span>Delete user:</span><select name="userID">
            <option value ='null' selected>Choose</option>
            <?php
            $q = "SELECT id, username, email FROM users ORDER BY id ASC";
            $resultSet = mysqli_query($connection,$q);
            if (mysqli_num_rows($resultSet) > 0) {
                while ($rows = mysqli_fetch_array($resultSet)) { ?>
                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['username']; ?></option>
                    <?php
                }
                mysqli_free_result($resultSet);
            }
            ?>
        </select><br>
        <input type="submit" value="Delete User">
    </form>
    <br>
        <?php
        /*
         * THIS IS THE PART FOR POP-UP MESSAGES WHEN THE QUERY IS EXECUTED
         */
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="errormessage">Fill in all the fields!</p>';
            }
            else if ($_GET['error'] == "invalidprice") {
                echo '<p class="errormessage">Enter the regular price!</p>';
            }
            else if ($_GET['error'] == "invalidname") {
                echo '<p class="errormessage">Name Error</p>';
            }
            else if ($_GET['error'] == "sqlerror") {
                echo '<p class="errormessage">Error 404</p>';
            }
            else if ($_GET['error'] == "norowsdeleted") {
                echo '<p class="errormessage">No rows deleted!</p>';
            }
            else if ($_GET['error'] == "norowsupdated") {
                echo '<p class="errormessage">No rows updated!</p>';
            }
            else if ($_GET['error'] == "nosuchuser") {
                echo '<p class="errormessage">No users found!</p>';
            }
            else if ($_GET['error'] == "noproductsselected") {
                echo '<p class="errormessage">Select the product!</p>';
            }
        }
        else if (isset($_GET['success'])) {
            if ($_GET['success'] == "deletephone") {
                echo '<p class="successmessage">Deleting phone successful!</p>';
            }
            else if ($_GET['success'] == "deleteuser") {
                echo '<p class="successmessage">Deleting user successful!</p>';
            }
            else if ($_GET['success'] == "update") {
                echo '<p class="successmessage">Database updated!</p>';
            }
            else if ($_GET['success'] == "success"){
                echo '<p class="successmessage">Product inserted successfully!</p>';
            }

        }
    }
else {
    header("Location: admin.php");
}
?>
    <!-- THE LOGOUT BUTTON FOR ADMINISTRATOR -->
    <button><a href="adminlogout.php">Logout!</a></button>
</div>
</body>
</html>