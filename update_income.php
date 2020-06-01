<?php 

require_once('db.php');

if ($_POST['submit2']) {
    
    $id = $_POST['id'];
    $date = $_POST['date'];
    $income = $_POST['income'];
    $expend = $_POST['expend'];

    // 2. Do a query (Select all students)
    $query  = "UPDATE daily_income SET id = '$id', date = '$date', income = '$income', expend = '$expend' "; 
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    echo "<script language='javascript'>alert('Update Successful!!! Back to Cheak ');window.location.href='/income.php';</script>";
}else{
    $id = $_GET['id'];

    $query  = "SELECT * FROM daily_income ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
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
    <form id="test" action="update_income.php" method="post">
    <fieldset>
        <legend>Add New Data</legend>
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <div class="form-row">
            <div class="field-label"><label for="field1">Date </label>:</div>
            <div class="field-widget"><input tpye="text" name="date" id="field1" class="required" value="<?php echo $row["date"]; ?>"/></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field2">Income</label>:</div>
            <div class="field-widget"><input tpye="text" name="income" id="field2" class="required" value="<?php echo $row["income"]; ?>"/></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field3">Expend</label>:</div>
            <div class="field-widget"><input tpye="text" name="expend" id="field3" class="required" value="<?php echo $row["expend"]; ?>"/></div>
        </div>  
        </fieldset>
    <input type="submit" name="submit2" class="submit" value="Submit" />
    </form>
    </div>
</body>
</html>