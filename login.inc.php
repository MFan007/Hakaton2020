<?php

/*
 * CHECKS IF THE USER HAS LEGALLY ACCESSED THIS SITE
 */
if(isset($_POST['login'])) {
    require "db_config.php";

    $mailusername = $_POST['mailusername'];
    $password = $_POST['password'];

    //Strips HTML and PHP tags from a string. For example <p></p>, /, "" etc.
    $mailusername = strip_tags($_POST['mailusername']);
    $password = strip_tags($_POST['password']);

    //Un-quoting a quoted string example: " \' " will return " ' "
    $mailusername = stripslashes($mailusername);
    $password = stripslashes($password);

    //Escapes special characters in a string for use in an SQL statement,
    //taking into account the current charset of the connection
    $mailusername = mysqli_real_escape_string($connection, $mailusername);
    $password = mysqli_real_escape_string($connection, $password);

    /*
     * CHECKS IF THE FIELDS ARE EMPTY
     */
    if(empty($mailusername) || empty($password)){
        header("Location: login.php?error=emptyfields");
        exit();
    }
    /*
     * INITIALIZES THE STATEMENT AND RETURNS AN OBJECT FOR USE WITH MYSQLI_STMT_PREPARE
     */
    else{
        $sql = "SELECT * FROM users WHERE username=? OR email=?";
        $stmt = mysqli_stmt_init($connection);
        /*
         * IF THE STATEMENT IS NOT READY FOR EXECUTION RETURN AN ERROR
         */
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: login.php?error=sqlerror");
            exit();
        }
        /*
         * IF THE STATEMENT IS READY, BIND THE VARIABLES TO A PREPARED STATEMENT AS PARAMETERS
         * EXECUTE A PREPARED QUERY
         * TRANSFER A RESULT SET FROM A PREPARED STATEMENT
         */
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailusername, $mailusername);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            /*
             * MYSQLI_FETCH_ARRAY OR MYSQLI_FETCH_ASSOC FETCHES A RESULT OF ROWS AS AN ARRAY OR AN ASSOCIATIVE
             */
            if($row = mysqli_fetch_assoc($result)){
                /*
                 * VERIFIES THAT A PASSWORD MATCHES A HASH IN A DATABASE
                 */
                $passwordCheck = password_verify($password, $row['password']);
                if($passwordCheck == false){
                    header("Location: login.php?error=wrongpassword");
                    exit();
                }
                /*
                 * IF ALL THE INFO ARE CORRECT, START A SEESSION FOR A USER AND REDIRECT HIM TO THE INDEX PAGE
                 */
                else if($passwordCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userUid'] = $row['username'];
                    $row['username']=$mailusername;

                    header("Location: index.php?login=success");
                }
                else{
                    header("Location: login.php?error=sqlerror");
                    exit();
                }
            }
            else{
                header("Location: login.php?error=nouser");
                exit();
            }
        }
    }
}
else{
    header("Location: login.php");
    exit();
}
?>