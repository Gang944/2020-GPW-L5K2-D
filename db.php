<?php

// 1. Open database connection
$dbhost = "localhost";
$dbuser = "he-zhilin";
$dbpass = "8p2f5800";
$dbname = "2201713130210";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}

?>