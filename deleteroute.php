<?php 

require_once('db.php');

$id = $_GET['id'];
// 2. Do a query (Select all students)
$query  = "DELETE FROM Route "; 
$query .= "WHERE Route_no = $id";

mysqli_query($connection, $query);

// 5. close db connection
mysqli_close($connection);

echo "<script language='javascript'>alert('Delete Successful!!! Back to Cheak ');window.location.href='/routes.php';</script>";

?>