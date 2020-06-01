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

$deleteid = $_GET['id'];

// 2. Do a query
$query  = "DELETE FROM food "; 
$query .= "WHERE id = $deleteid";

//header('location: food-order.php');

echo $query;

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

Echo "cases deleted";

// 5. close db connection
mysqli_close($connection);

?>
