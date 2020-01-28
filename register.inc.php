<?php

/*
 * CHECKS IF THE USER HAS LEGALLY ACCESSED THIS SITE
 */
if(isset($_POST['register'])) {

    require "db_config.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Strips HTML and PHP tags from a string. For example <p></p>, /, "" etc.
    $username = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $confirm_password = strip_tags($_POST['confirm_password']);

    //Un-quoting a quoted string example: " \' " will return " ' "
    $username = stripslashes($username);
    $email = stripslashes($email);
    $password = stripslashes($password);
    $confirm_password = stripslashes($confirm_password);

    //Escapes special characters in a string for use in an SQL statement,
    //taking into account the current charset of the connection
    $username = mysqli_real_escape_string($connection, $username);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $confirm_password = mysqli_real_escape_string($connection, $confirm_password);

    /*
     * CHECKS IF THE FIELDS ARE EMPTY
     * CHECKS IF THE EMAIL IS VALID
     * CHECKS IF THE USERNAME IS VALID
     * CHECKS IF THE PASSWORD AND CONFIRM PASSWORD FIELDS MATCH
     */
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        header("Location: register.php?error=emptyfields&uid=" . $username . "&mail" . $email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/", $username)) {
        header("Location: register.php?error=invalidmailuid");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=invalidmail&uid=" . $username);
        exit();
    }
    else if (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
        header("Location: register.php?error=invaliuid&mail=" . $email);
        exit();
    }
    else if ($password !== $confirm_password) {
        header("Location: register.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    }
    /*
     * IF ALL OF THE ABOVE ARE CORRECT THE LOOP CONTINUES
     * INITIALIZES THE STATEMENT AND RETURNS AN OBJECT FOR USE WITH MYSQLI_STMT_PREPARE
     */
    else {
        $sql = "SELECT username, email FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_stmt_init($connection);
        /*
         * IF THE STATEMENT IS NOT PREPARED FOR THE EXECUTION RETURN AN ERROR
         */
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: register.php?error=sqlerror");
            exit();
        }
        /*
         * IF THE STATEMENT IS READY, BIND THE VARIABLES TO A PREPARED STATEMENT AS PARAMETERS
         * EXECUTE A PREPARED QUERY
         * TRANSFER A RESULT SET FROM A PREPARED STATEMENT
         */
        else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            /*
             * IF THE RESULT IS GREATER THAN 0 THAT MEANS THAT THE DATA ALREADY EXISTS IN THE DATABASE
             * MEANING THAT THE EMAIL OR USERNAME ARE ALREADY TAKEN
             */
            if ($resultCheck > 0) {
                header("Location: register.php?error=useroremailtaken");
                exit();
            }
            /*
             * IF EVERYTHING IS CORRECT INSERT THE DATA INTO THE DATABASE
             */
            else {
                $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: register.php?error=sqlerror");
                    exit();
                }
                else {
                    /*
                     * HASHING THE PASSWORD WITH BCRYPT ALGORITHM
                     */
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: register.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_close($connection);
    mysqli_stmt_close($stmt);
}
else {
    header("Location: index.php");
    exit();
}
?>