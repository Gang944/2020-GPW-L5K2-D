require ('db.php');

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
   <a href="index.html" title="tickets"><img src="images/logo.png" width="350" height="60"/></a>
   			</div>
   			<div class="headlink">
   				<a href="login.html">Login</a>
   				&nbsp;|&nbsp;
   				<a href="sign.html">Sign Up</a>
                &nbsp;|&nbsp;
			    <a href="logout.php">Logout</a>
   				
   				
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
           <a href="#" class="net"><li>Order Tickets</li></a>
           <a href="#" class="_all2"><li>Timetable</li></a>
           <a href="#" class="_all3"><li>My Tickets</li></a>
           <a href="#" class="_all4"><li>Food Order</li></a>
           <a href="#" class="_all5"><li>Payment</li></a>
         </ul>
       </div>
       <!--menu end-->
       <!--Guide-->
     <div class="class_a">
      <!--order start-->
           <div class="all1">
             <h4 style="color:#fff">Order Tickets</h4>
             <form runat="server" method="get" action="">
             <table width="800" height="300" style="margin:auto; margin-top:50px; border:1px solid #FFF;" border="1" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="120">First Name:</td>
    <td width="277.6"><input style="width:250px; background:none;" type="text" name="fname"/><span>*</span></td>
    <td width="120">Last Name:</td>
    <td width="277.6"name="lname"><input style="width:250px; background:none;" type="text" /><span>*</span></td>
  </tr>
  <tr>
    <td width="120">Phone:</td>
     <td width="277.6"><input style="width:250px; background:none;" type="text" name="phone"/><span>*</span></td>
    <td width="120">Phone2:</td>
    <td  width="277.6"><input style="width:250px; background:none;" type="text" name="phone2"/></td>
  </tr>
  <tr>
    <td width="120">Bus Type:</td>
    <td width="277.6"><select  style="width:250px; background:none; border:0; outline:none; color:#CCC">
      <option>C6402</option>
      <option>G8708</option>
      <option>G8715</option>
       
    </select><span>*</span></td>
    <td width="120">Start:</td>
    <td><input style="width:250px; background:none;" type="text" name="startstation"/><span>*</span></td>
  </tr>
  <tr>
    <td width="120">End:</td>
    <td><input style="width:250px; background:none;" type="text" name="endstation"/><span>*</span></td>
    <td width="120">Time:</td>
    <td><input  style="width:250px; background:none;" type="datetime-local" name="timetable"/><span>*</span></td>
  </tr>
  <tr>
    <td>Note:</td>
    <td colspan="3">
    <textarea placeholder="if you need something please write down！" style="; color:#FFF; outline:none;resize:none;width:670px; height:70px; border:0; background:none;"   name="note" cols="0" rows="0"></textarea></td>
    </tr>
</table>
<div class="tom" style="margin-top:20px;">
<input name="clear" style="width:80px; height:30px;" type="reset" value="Clear" />

<input name="play" style="width:80px; height:30px; " type="submit" name="submit" value="Order" />

</div>
<span style="float:right;">attention：mark * is required！</span>
</form>                     
   </div>
  <!--order end--> 
  <!--timetable-->
           <div class="all2">
           <h4 style="color:#fff">Time Tables</h4>
        <iframe style="border:0; background:rgba(255,255,255,0.5);" scrolling="auto" src="piao.html" width="1000" height="544"></iframe>
           </div>
   <!--timetable--> 
    <!--ticksts--> 
           <div class="all3">
           <h4 style="color:#fff">My Tickets</h4>
               
           </div>
         <!--tickets end-->
          <!--food start-->
         <div class="all4" id="all4">
          <h4 style="color:#fff">&nbsp;&nbsp;Order Food</h4>
          
          </div>
         <!--food end-->
             <!--payment start--> 
           <div class="all5">
          <h4 style="color:#fff">&nbsp;&nbsp;Payment</h4>
          
          </div>
             <!--payment end-->
         </div>
          <!--Guide end-->
   </div>
   </div>
   
   
   <!--middle end-->
<div class="foot">
      
    </div>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/home.js"></script>

</html>
