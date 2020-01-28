<?php

/*
 * CHECKS IF THE USER HAS LEGALLY ACCESED THIS PAGE
 */
if(isset($_POST['login'])) {
    require "db_config.php";
    $admin = $_POST['admin'];
    $password = $_POST['password'];

    $admin = strip_tags($_POST['admin']);
    $password = strip_tags($_POST['password']);

    //Un-quoting a quoted string example: " \' " will return " ' "
    $admin = stripslashes($admin);
    $password = stripslashes($password);

    //Escapes special characters in a string for use in an SQL statement,
    //taking into account the current charset of the connection
    $admin = mysqli_real_escape_string($connection, $admin);
    $password = mysqli_real_escape_string($connection, $password);

    $hashedPassword = md5($password);

    /*
     * CHECKS IF THE FIELDS ARE EMPTY
     */
    if(empty($admin) || empty($hashedPassword)){
        header("Location: admin.php?error=emptyfields");
        exit();
    }
    /*
     * INITIALIZES THE STATEMENT AND RETURNS AN OBJECT FOR USE WITH MYSQLI_STMT_PREPARE
     */
    else{
        $sql = "SELECT * FROM admin WHERE admin=?";
        $stmt = mysqli_stmt_init($connection);
        /*
         * IF THE STATEMENT IS NOT READY FOR EXECUTION RETURN AN ERROR
         */
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: admin.php?error=sqlerror");
            exit();
        }
        /*
         * IF THE STATEMENT IS READY, BIND THE VARIABLES TO A PREPARED STATEMENT AS PARAMETERS
         * EXECUTE A PREPARED QUERY
         * TRANSFER A RESULT SET FROM A PREPARED STATEMENT
         */
        else{
            mysqli_stmt_bind_param($stmt, "s", $admin);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            /*
             * MYSQLI_FETCH_ARRAY OR MYSQLI_FETCH_ASSOC FETCHES A RESULT OF ROWS AS AN ARRAY OR AN ASSOCIATIVE
             */
            if($row = mysqli_fetch_assoc($result)){
                /*
                 * VERIFIES THAT A PASSWORD MATCHES A HASH IN A DATABASE
                 */
                $passwordCheck = md5($hashedPassword, $row['password']);
                if($passwordCheck == false){
                    header("Location: admin.php?error=wrongpassword");
                    exit();
                }
                /*
                 * IF ALL THE INFO ARE CORRECT, START A SEESSION FOR A USER AND REDIRECT HIM TO THE INDEX PAGE
                 */
                else if($passwordCheck == true){
                    session_start();
                    $_SESSION['adminUserId'] = $row['admin_id'];
                    $_SESSION['adminUserUid'] = $row['admin'];
                    $row['admin']=$admin;

                    header("Location: adminlogin.php?login=success");
                }
                else{
                    header("Location: admin.php?error=sqlerror");
                    exit();
                }
            }
            else{
                header("Location: admin.php?error=nouser");
                exit();
            }
        }
    }
}
else{
    header("Location: adminlogin.php");
    exit();
}
?>