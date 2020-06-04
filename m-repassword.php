<?php
require('db.php');


    $query  = "SELECT * FROM manager ";
    $query .= "WHERE id = 1";
    
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    

// 5. close db connection
mysqli_close($connection);

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
            <a href="employee.php">Home Page</a>
   				&nbsp;|&nbsp;
   				<a href="m-login.php">Login</a>
   				&nbsp;|&nbsp;
   				<a href="m-repassword.php" style="border-bottom:2px solid #09F">Get Password</a>
   				
   				
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
        <span>Forget the Password</span>
    </div>
 
    <div class="title-msg">
        <span>Please create new account and password</span>
    </div>
 
    <form class="login-form" method="post" action="m-repassword.php" novalidate >
        <!--输入框-->
        <div class="input-content">
            <!--autoFocus-->
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div>
                <input type="text" autocomplete="off"
                       placeholder="Username" name="name" value="<?php echo $row["name"]; ?>"required/>
            </div>
 
            <div style="margin-top: 16px">
                <input type="test"
                       autocomplete="off" placeholder="password" name="password" value="<?php echo $row["password"]; ?>"required/>
            </div>
        </div>
 
        <!--登入按钮-->
        <div style="text-align: center">
            <button type="submit" name="submit" class="enter-btn" >Change Now</button>
        </div>
 
        <div class="foor">
            <a class="left" href="m-repassword.php"><span>Forget the Password？</span></a>
 
            <a class="right" href="m-login.php"><span>Get Your Password? Go login</span></a>
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
