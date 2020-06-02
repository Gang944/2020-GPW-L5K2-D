<?php

require('db.php');

if ($_POST['submit']) {
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    
    $Price = $_POST['Price'];
    $Number = $_POST['Number'];
    $Cost = $_POST['Cost'];


// 2. Do a query
$query  = "INSERT INTO food (Name, Price, Number, Cost ) "; 
$query .= "VALUES ('$Name', '$Price', '$Number', '$Cost',  )";

//header('location: food-order.php');
echo $query;

$result = mysqli_query($connection, $query);
if (!$result)


   {
    die ("query is wrong
");}
    echo "Insert successfully";
   

}


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
<input type="submit" name="submit" value="submit">
</form> 
<div class="put" align="center" >
   <div class="put" align="center">Please click submit</div>
    </div>
    </div>
    </div>
</body>
</html>


