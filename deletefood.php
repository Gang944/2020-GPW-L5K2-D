<?php 

require_once('db.php');

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

Echo "food deleted";

// 5. close db connection
mysqli_close($connection);

?>
