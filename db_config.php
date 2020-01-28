<?php

    define("HOST", "localhost:3306");
    define("USER", "clickvts_daremiki");
    define("PASSWORD", "daremikihakaton");
    define("DATABASE", "clickvts_it");

    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    if(!isset($connection)){
        die("Connection failure!");
    }

    mysqli_query($connection, "SET NAMES utf8") or die (mysqli_error($connection));
    mysqli_query($connection, "SET CHARACTER SET utf8") or die (mysqli_error($connection));
    mysqli_query($connection, "SET COLLATION_CONNECTION='utf8_general_ci'") or die (mysqli_error($connection));

?>