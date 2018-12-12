<?php
session_start();
?>
<?php
if($_SESSION["admin"]!="parsec"){
header("Location:anonymous1.html");
exit();
}
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Profile</title>
		<link rel="stylesheet" href="profilestyle.css"> 
		<link rel="stylesheet" href="styleupddetails.css"> 
		<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
	height:50px;
    overflow: hidden;
    background-color:black;
	opacity:0.75;
	z-index:5;
	margin:5px;
}

li {
    float: right;
	letter-spacing:1.5px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
	padding: 14px 16px;
}

li a:hover {
    background-color: #111;
}
 span.info1{
 color:white;
 font-size:15px;
 }
 
 span.info1{
 color:white;
 font-size:15px;
 }
 
</style>
  </head>
  <body>
  <canvas id="canvas"></canvas>
  <div class="container-info">
  <br>
  <ul>
  <li style="float:left;font-size:22px;letter-spacing:3px;color:white;padding:10px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Parsec</li>
  <li><a href="logout1.php">LOG OUT  &nbsp &nbsp &nbsp &nbsp </a></li>
  <li><a href="new1.php">WHAT'S NEW </a> &nbsp &nbsp &nbsp &nbsp  </li>
  <li style="background-color:green;"><a href="#">CHECK PROFILE</a> &nbsp &nbsp &nbsp &nbsp  </li>
  <li><a href="login1.php">HOME </a> &nbsp &nbsp &nbsp &nbsp </li>
  </ul>
  
  <div class="header" style="z-index:3;">
	<div>View <span> Details </span></div>
  </div>
  <br>
  <div>
	<form class="login" style="z-index:3;" action="viewdetails.php" method='get'>
		<input type="text" placeholder="Enter username" name="username"> <sup>*</sup> <br><br>
		<input type="submit" value="GO"><br>
	</form>
  </div>
	<div style="background-color:black;border-radius:20px;height:400px;width:700px;z-index:2;opacity:0.4;postion:fixed;margin:60px 450px;top:50px ;left:250px;"></div>
  </div>
<script src="profilejs.js"></script>
 </body>
</html>



