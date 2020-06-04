<?php 

require_once('db.php');

if ($_POST['submit1']) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $income = $_POST['income'];
    $expend = $_POST['expend'];

    // 2. Do a query
    $query  = "INSERT INTO daily_income (date, income, expend) "; 
    $query .= "VALUES ('$date', '$income', '$expend') ";

    $result = mysqli_query($connection, $query);
    
    echo "<script language='javascript'>alert('Insert Successful!!! Back to Cheak ');window.location.href='/income.php';</script>";
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
    <form id="test" action="newincome.php" method="post">
    <fieldset>
        <legend>Add New Data</legend>
        <div class="form-row">
        <div id="time"></div>
<script language="javascript" type="text/javascript">
　　window.onload=function (){
　　　　setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
　　}
            </script>
        </div>
        <div class="form-row">
            <div class="field-label"><label for="field1">Inpute Date</label>:</div>
            <div class="field-widget"><input tpye="date" name="date" id="field1" class="required"/></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field2">Income</label>:</div>
            <div class="field-widget"><input tpye="text" name="income" id="field2" class="required" /></div>
        </div>
        
        <div class="form-row">
            <div class="field-label"><label for="field3">Expend</label>:</div>
            <div class="field-widget"><input tpye="text" name="expend" id="field3" class="required" /></div>
            </div>
        </fieldset>
    <input type="submit" name="submit1" class="submit" value="Submit" />
    </form>
    </div>
</body>
</html>