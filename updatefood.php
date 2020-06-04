<?php


require('db.php');

if ($_POST['submit']) {
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    
    $Price = $_POST['Price'];
    $Number = $_POST['Number'];
    $Cost = $_POST['Cost'];
    
    
    // 2. Do a query
    $query  = "UPDATE food SET "; 
    $query .= "Name = '$Name', ";
    
    $query .= "gender = '$gender' ";
    $query .= "Price = '$Price' ";
    $query .= "Number = '$Number' ";
    $query .= "Cost = '$Cost' ";
    
    $query .= "WHERE id = $updateid"; 
    


    //header('location: food-order.php');
    
    echo $query;
    
    $result = mysqli_query($connection, $query);
    
    die("query is wrong");
}



// 2. Do a query
$updateid = $_GET['id'];
$query  = "SELECT * "; 
$query .= "FROM food ";
$query .= "WHERE id = $updateid";

echo $query;

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}



// 3. process data
$row = mysqli_fetch_array($result);

?>
<html>
<body>
<link type="text/css" rel="stylesheet" href="1.css">
<div class="container-body">
<div class="context-body">

<form action="updatefood.php" method="post" align="center">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
    <label>Name:<br></label>
    <input class="text1" type="text" name="Name" value="<?php echo $row["Name"]; ?>"/> <br/><br>
    <label>Price:<br></label>  
    <input class="text1" type="text" name="Price"  value="<?php echo $row["Price"]; ?>"/> <br/><br>
    <label>Number:<br></label>  
    <input class="text1"type="text" name="Number"  value="<?php echo $row["Number"]; ?>"/> <br/><br>
    <label>Cost:<br></label>  
    <input class="text1"type="text" name="Cost"  value="<?php echo $row["Cost"]; ?>"/> <br/><br>
    
    <input type="submit" name="submit" value="submit"/>
</form>
<div class="put" align="center" >
            </div></div> 
<p align="center" >Please click submit</p>
<?php


// 5. close db connection
mysqli_close($connection);

?>
