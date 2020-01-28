<?php

session_start();
//Ending the session for a user
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logging out...</title>
</head>
<body>
    <meta http-equiv="refresh" content="1;url=admin.php" />
</body>
</html>