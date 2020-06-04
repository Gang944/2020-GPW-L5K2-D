<?php

// make db conection
require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else { 
        // Save username & password in a variable
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pagelevel = $_POST['level'];

        // 2. Prepare query
        $query  = "SELECT username, password, level "; 
        $query .= "FROM user ";
        $query .= "WHERE username = '$username' AND password = '$password' ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

        
$row = mysqli_fetch_array($result);
$numrows=mysqli_num_rows($result);
if ($numrows == 1) {

    session_start();
    
    $_SESSION['login_user'] = $username;
    $_SESSION['login_level'] = $row['level'];
     if ($_SESSION['login_level'] == 1) {

                header('location: purchase-tickets.php');

            } else if ($_SESSION['login_level'] == 2) {

                header('location: index.php');

            } 

        } else {
           echo "login failed";
        }
        
mysqli_free_result($result);
    }

}

mysqli_close($connection);
?>

<?php


if (isset($error)) {

    echo"<span>" . $error ."</span>";

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

   <a href="index.html" title="tickets"><img src="images/logo.png" width="350" height="60"/></a>

   			</div>

   			<div class="headlink">

            <a href="index.html">Home Page</a>

   				&nbsp;|&nbsp;

   				<a href="login.html" style="border-bottom:2px solid #09F">Login</a>

   				&nbsp;|&nbsp;

   				<a href="sign.html">Sign Up</a>

   				

   				

   			</div>

   		</div>

   </div>

   <!--head end-->

   <!--banner-->

   <div class="middle">

   <div class="cont">

   		<div class="banner">

   			<img src="images/tr.png" width="860" height="400" style="opacity:0.3"/>

   		</div>

   		<div class="main">

    <div class="title">

        <span>Welcome to Login</span>

    </div>

 

    <div class="title-msg">

        <span>Please enter your account and password</span>

    </div>

 

    <form class="login-form" method="post" action="login.php" novalidate >

        <!--输入框-->

        <div class="input-content">

            <!--autoFocus-->

            <div>

                <input type="text" autocomplete="off"

                       placeholder="Username" name="username" required/>

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

            <a class="left" href="repassword.html"><span>Forget Password?</span></a>

 

            <a class="right" href="sign.html"><span>No account? Go sign up</span></a>

        </div>

    </form>

 

</div>

   		</div>

   </div> 

    <!--banner end-->

    <div class="foot">

      

    </div>

</body>

</html>
