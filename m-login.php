<?php

require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['password'])) {
        $error = "Access denied";
    }
         else {
    // Save username and password in a variable   
    $username = $_POST['name'];
    $password = $_POST['password'];
    
    //preper query
    $query  = "SELECT name, password ";
    $query .= "FROM manager ";
    $query .= "WHERE name = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("query is wrong");
   }
    $row = mysqli_fetch_array($result);
             
    $numrows=mysqli_num_rows($result);
    if ($numrows == 1) {
    //start to use sessions
    session_start();
    //Create session variable
    $_SESSION['login_user'] = $username;
    $_SESSION['login_password'] = $password;
    
    if ($_SESSION['login_user'] = $username) {
                header('location: manager.php');
            }
    }else {
        $msg = "Access denied, username or password is wrong";
     }
     echo "<script language='javascript'>alert('Access denied, username or password is wrong.');</script>";        
    //4. free results
    mysqli_free_result($result);
 }
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--手机自适应<meta name="viewport" content="width=device,initial-scale=1.0">-->
<title>Chengdu Bus Company</title> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/comm.js"></script>
</head>
<body>
<!--head-->
   <div class="header">
   		<div class="inner">
   			<div class="logo">
   <a href="manager.php" title="tickets"><img src="images/logo.png" width="350" height="60"/></a>
   			</div>
   			<div class="headlink">
            <a href="manager.php">Home Page</a>
   				&nbsp;|&nbsp;
   				<a href="m-login.php" style="border-bottom:2px solid #09F">Login</a>
   				&nbsp;|&nbsp;
   				<a href="m-sign.php">Sign Up</a>
   				
   				
   			</div>
   		</div>
   </div>
   <!--head end-->
   <!--banner-->
   <div class="middle">
   <div class="cont">
   		<div class="banner">
   			<img src="images/tr.png" width="860" height="400" style=""/>
   		</div>
   		<div class="main">
    <div class="title">
        <span>Welcome to Login</span>
    </div>
 
    <div class="title-msg">
        <span>Please create new account and password</span>
    </div>
 
    <form class="login-form" method="post" action="m-login.php" novalidate >
        <!--输入框-->
        <div class="input-content">
            <!--autoFocus-->
            <div>
                <input type="text" autocomplete="off"
                       placeholder="Username" name="name" required/>
            </div>
 
            <div style="margin-top: 16px">
                <input type="password"
                       autocomplete="off" placeholder="password" name="password" required/>
            </div>
        </div>
 
        <!--登入按钮-->
        <div style="text-align: center">
            <button type="submit" name="submit" class="enter-btn" >Login</button>
        </div>
 
        <div class="foor">
            <a class="left" href="m-sign.php"><span>No account? Go to sign!</span></a>
 
            <a class="right" href="m-login.php"><span>Already have account? Go login</span></a>
        </div>
    </form>
            <br/>
    <div class="loginerror"> <?php echo $msg;?></div>
</div>
   		</div>
   </div> 
    <!--banner end-->
    <div class="foot">
      
    </div>
</body>
</html>