<?php

require_once('m-logincheck.php');
require_once('db.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chengdu Bus Company</title>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
<!--head-->
   <div class="header">
   		<div class="inner">
   			<div class="logo">
   <a href="index.html" title="homepage"><img src="images/logo.png" width="350" height="60"/></a>
   			</div>
   			<div class="headlink">
   				<a href="m-login.php">Login</a>
   				&nbsp;|&nbsp;
   				<a href="m-repassword.php">Get Password</a>
                &nbsp;|&nbsp;
			    <a href="m-logout.php">Logout</a>
   				
   				
   			</div>
   		</div>
   </div>
<!--head end-->
   <!--middle-->
<div class="middle">
   <div class="cont">
   <!--menu-->
       <div class="class">
         <ul>
           <h3 style="color:#FFF;">Types</h3>
           <a href="manager.php" class="net"><li>Homepage</li></a>
           <a href="sold.php" class="_all2"><li>Tickets Sold</li></a>
           <a href="routes.php" class="_all3"><li>Routes</li></a>
           <a href="food.php" class="_all4"><li>Food Order</li></a>
           <a href="income.php" class="_all5"><li>Income</li></a>
         </ul>
       </div>
       <!--menu end-->
       <!--Guide-->
     <div class="class_a">
      <!--order start-->
           <div class="all1">
             <h4 style="color:#fff">Chengdu Bus Company</h4>
               <form runat="server" method="get" action="">
             <table width="800" height="300" style="margin:auto; margin-top:50px; border:1px solid #FFF;" border="1" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="120">Name:</td>
    <td width="277.6"><?php echo $_SESSION['login_user'];
                    ?></td>
    <td width="120">Postion:</td>
    <td width="277.6">Manager</td>
  </tr>
  <tr>
    <td width="120">Level:</td>
     <td width="277.6">3</td>
    <td width="120">Phone:</td>
    <td  width="277.6">325-487-156</td>
  </tr>
  <tr>
    <td width="120">Password:</td>
    <td width="277.6"><?php echo $_SESSION['login_password'];
                    ?></td>
    <td width="120">Date of assumption of duty:</td>
    <td width="277.6">28-05-2001</td>
  </tr>
  <tr>
    <td>Note:</td>
    <td colspan="3">
    <textarea placeholder="Work hard every day!! Happy days！" style="; color:#FFF; outline:none;resize:none;width:670px; height:70px; border:0; background:none;"   name="note" cols="0" rows="0"></textarea></td>
    </tr>
</table>
</form>   
           </div>
         </div>
      </div>
   </div>
   
   
   <!--middle end-->
<div class="foot">
      
    </div>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/home.js"></script>

</html>
