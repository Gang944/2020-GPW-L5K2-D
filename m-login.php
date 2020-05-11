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
   			<img src="images/tr.png" width="860" height="400" style="opacity:0.3"/>
   		</div>
   		<div class="main">
    <div class="title">
        <span>Welcome to Login</span>
    </div>
 
    <div class="title-msg">
        <span>Please enter your account and password</span>
    </div>
 
    <form class="login-form" method="post" action="m-login.php" novalidate >
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
 
            <a class="right" href="m-sign.php"><span>No account? Go sign up</span></a>
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
