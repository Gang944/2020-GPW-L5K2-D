<?php

// 1. Open database connection
$dbhost = "localhost";
$dbuser = "52721f5c61c4";
$dbpass = "2456ee08541f2b9e";
$dbname = "l5k2d";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}

?>