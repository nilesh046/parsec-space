<?php
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Profile</title>
		<link rel="stylesheet" href="profilestyle.css"> 
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
 div.a{
	top:125px;
	left:35%;
	height:500px;
	width:800px;
	 
	background-image:url("images/30.jpg");
	background-size:auto 100%;
	background-repeat:no-repeat;
	opacity:0.4;
	border-radius:30px;
 }
 
div.c{
top:170px;
left:43%;
color:white;
float:left;
}

div.c p{
font-size:25px;
font-family: "Times New Roman", Times, serif;
font-weight:bold;
top:150px;
left:40%;
float:left;
}
 
 
 
 
 
 div.b{
	height:500px;
	width:800px;
	top:200px;
	left:25%;
 }
div.b p{
	margin: 10%;
	font-size:20px;
    color:black;
 }
 
</style>
  </head>
  <body>
<canvas id="canvas"></canvas>
  <div class="container-info">
  <br>
  <ul>
  <li style="float:left;font-size:22px;letter-spacing:3px;color:white;padding:10px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Parsec</li>
  <li><a href="logout.php">LOG OUT  &nbsp &nbsp &nbsp &nbsp </a></li>
  <li><a href="new.php">WHAT'S NEW PARSEC </a> &nbsp &nbsp &nbsp &nbsp  </li>
  <li><a href="quiz.php?pq=1&q=1&q1=1&ans=">QUIZ </a> &nbsp &nbsp &nbsp &nbsp </li>
  <li style="background-color:green;"><a href="#">PROFILE </a> &nbsp &nbsp &nbsp &nbsp </li>
  <li><a href="login.php">HOME </a> &nbsp &nbsp &nbsp &nbsp </li>
  </ul>
  </div>   
<div class="a container-info"></div>
<div class="c container-info">
<p>
STUDENT PROFILE
</p>
</div>
<div class="b container-info">

<p>
<?php
if(isset($_SESSION['username'])){
	$conn=new mysqli("localhost","root","","space");
	if($conn->connect_error){
	header("Location:anonymous.html");
	exit();
	}
	$sql="select * from details where username='".$_SESSION['username']."'";
	$result=$conn->query($sql);
	if($result){
	$row=$result->fetch_assoc();
		echo "<b>     NAME : </b>";
		echo $row['username']."<br><br><br>";
		echo "<b> EMAIL-ID : </b>";
		echo $row['email']."<br><br><br>";
		echo "<b> PASSWORD : </b>";
		echo $row['password']."<br><br>";
	}
	else{
		header("Location:anonymous.html");
		exit();
	}
}
else{
		header("Location:anonymous.html");
		exit();
	}
?>
</p>
</div>
</div>
  
  
  

<script src="profilejs.js"></script>
 </body>
</html>



