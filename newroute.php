<?php 

require_once('db.php');

if ($_POST['submit']) {
    $id = $_POST['Route_no'];
    $start = $_POST['Starting_station'];
    $end = $_POST['Terminus'];
    $distance = $_POST['Distance'];

    // 2. Do a query
    $query  = "INSERT INTO Route (Starting_station, Terminus, Distance) "; 
    $query .= "VALUES ('$start', '$end', '$distance') ";

    $result = mysqli_query($connection, $query);
    
    echo "<script language='javascript'>alert('Insert Successful!!! Back to Cheak ');window.location.href='/routes.php';</script>";
}


// 5. close db connection
mysqli_close($connection);

?>
<!DOCTYPE html>
<html>
<head>
<link title="style1" rel="stylesheet" href="css/styleadd.css" type="text/css" />
</head>
<body>
	<div class="form_content">
    <form id="test" action="newroute.php" method="post">
    <fieldset>
        <legend>Add New Data</legend>
        <div class="form-row">
            <div class="field-label"><label for="field1">Starting Station</label>:</div>
            <div class="field-widget"><input tpye="text" name="Starting_station" id="field1" class="required"/></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field2">End of Station</label>:</div>
            <div class="field-widget"><input tpye="text" name="Terminus" id="field2" class="required" /></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field3">Distance</label>:</div>
            <div class="field-widget"><input tpye="text" name="Distance" id="field3" class="required" /></div>
        </div>  
        </fieldset>
    <input type="submit" name="submit" class="submit" value="Submit" />
    </form>
    </div>
</body>
</html>