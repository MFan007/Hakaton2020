<?php

require "db_config.php";

    /*
     * ALL FORMS HAVE THEIR HIDDEN INPUTS AND EVERY ONE HAS ITS VALUE
     * THAT IS WHY WE ARE USING THE SWITCH LOOP
     */
    switch ($_POST['form']) {

        /*
         * FOR THIS CASE THE FORM WILL INSERT THE INFORMATION INTO THE DATABASE
         */
        case "1":
            $phoneIns = $_POST['phone'];
            $description = $_POST['description'];
            $price = (int)$_POST['price'];

            /*
             * THIS CHECKS IF SOME OF THE INPUTS ARE EMPTY
             */
            if (empty($phoneIns) || empty($description) || empty($price)) {
                header("Location: adminlogin.php?error=emptyfields");
                exit();
            } /*
             * IF THE FIELDS ARE SET, THE CODE CONTINUES
             */
            else {
                $sql = "SELECT phone, description, price FROM products WHERE phone = ? OR description = ? OR price = ? ORDER BY product_id ASC";
                /*
                 * INITIALIZES A STATEMENT AND RETURNS AN OBJECT FOR USE WITH MYSQLI_STMT_PREPARE
                 */
                $stmt = mysqli_stmt_init($connection);
                /*
                 * IF THE STATEMENT IS NOT PREPARED FOR THE EXECUTION RETURN AN ERROR
                 */
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: adminlogin.php?error=sqlerror");
                    exit();
                } /*
                 * IF THE STATEMENT IS READY, BIND THE VARIABLES TO A PREPARED STATEMENT AS PARAMETERS
                 * EXECUTE A PREPARED QUERY
                 * TRANSFER A RESULT SET FROM A PREPARED STATEMENT
                 */
                else {
                    mysqli_stmt_bind_param($stmt, "sss", $phoneIns, $description, $price);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $sql = "INSERT INTO products (phone, description, price) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($connection);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: adminlogin.php?error=sqlerror");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "sss", $phoneIns, $description, $price);
                        mysqli_stmt_execute($stmt);
                        header("Location: adminlogin.php?success=success");
                        exit();
                    }
                }
            }
            /*
             * CLOSES A PREVIOUSLY OPENED DATABASE CONNECTION
             * CLOSES A PREPARED STATEMENT
             */
            mysqli_stmt_close($stmt);
            mysqli_close($connection);
            break;
            /*
             * FOR THIS CASE THE FORM WILL DELETE THE PRODUCTS FROM THE DATABASE BASED ON OUR SELECTION
             */
        case "2":
            $product_id = $_POST['productID'];

            /*
             * PERFORMING A QUERY ON A DATABASE
             */
            if (isset($product_id)) {
                $delete = "DELETE FROM products WHERE product_id='$product_id'";
                $result = mysqli_query($connection, $delete)
                    or die(mysqli_error($connection));

                /*
                 * IF THE AFFECTED ROWS ARE GREATER THAN 0 THEN THE QUERY IS SUCCESSFULLY EXECUTED
                 */
                if (mysqli_affected_rows($connection) > 0) {
                    header("Location: adminlogin.php?success=deletephone");
                    exit();
                }
                else {
                    header("Location: adminlogin.php?error=norowsdeleted");
                    exit();
                }
            }
            break;
            /*
             * FOR THIS CASE THE FORM WILL UPDATE THE DATABASE BASED ON OUR SELECTIONS
             */
        case "3":
            if(!empty($_POST['updateID'])) {
                $updatedID = $_POST['updateID'];
                $phoneUpd = $_POST['phoneUpdate'];
                $descriptionUpd = $_POST['descriptionUpdate'];
                $priceUpd = (int)$_POST['priceUpdate'];

                if (!empty($phoneUpd)) {
                    $update = "UPDATE products SET phone = '$phoneUpd' WHERE product_id='$updatedID'";
                    $result = mysqli_query($connection, $update)
                        or die(mysqli_error($connection));

                    if (mysqli_affected_rows($connection) > 0) {
                        header("Location: adminlogin.php?success=update");
                        exit();
                    }
                    if (!empty($descriptionUpd)) {
                        $update = "UPDATE products SET description = '$descriptionUpd' WHERE product_id='$updatedID'";
                        $result = mysqli_query($connection, $update)
                            or die(mysqli_error($connection));

                        if (mysqli_affected_rows($connection) > 0) {
                            header("Location: adminlogin.php?success=update");
                            exit();
                        }
                        if (!empty($priceUpd)) {
                            $update = "UPDATE products SET price = '$priceUpd' WHERE product_id='$updatedID'";
                            $result = mysqli_query($connection, $update)
                                or die(mysqli_error($connection));

                            if (mysqli_affected_rows($connection) > 0) {
                                header("Location: adminlogin.php?success=update");
                                exit();
                            }
                            else {
                                header("Location: adminlogin.php?error=norowsupdated");
                                exit();
                            }
                        }
                    }
                }
            }
            else{
                header("Location: adminlogin.php?error=noproductsselected");
                exit();
            }
            break;
            /*
             * FOR THIS CASE THE FORM WILL DELETE THE USERS BASED ON OUR SELECTIONS
             */
        case "4":
            $id = $_POST['userID'];

            if (isset($id)) {
                $delete = "DELETE FROM users WHERE id='$id'";
                $result = mysqli_query($connection, $delete)
                    or die(mysqli_error($connection));

                if (mysqli_affected_rows($connection) > 0) {
                    header("Location: adminlogin.php?success=deleteuser");
                    exit();
                }
                else {
                    header("Location: adminlogin.php?error=norowsdeleted");
                    exit();
                }
            }
            break;
        }
?>