<?php
session_start();
?>
<html>
<head>
<title>
Parsec
</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
	height:50px;
    overflow: hidden;
    background-color:black;
	opacity:1;
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
 div.a{
 background-color:white;
 width:90%;
 margin:1%;
 float:left;
 padding:1.5%;
 height:auto;
 font-size:18px;
 }
 div.b{
 background-color:white;
 width:90%;
 margin:1%;
 float:left;
 padding:1.5%;
 height:auto;
 font-size:18px;
 }
 div.c{
 position:fixed;
 top:56%;
 width:69.2%;
 margin:1%;
 padding:2%;
 height:5%;
 font-size:18px;
 }
 div.m{
 background-color:rgb(144, 225, 154);
 width:70%;
 margin:1%;
 float:left;
 padding:2%;
 height:52%;
 font-size:18px;
 }
 div.d{
 background-color:rgb(144, 225, 154);
 position:fixed;
 width:22%;
 margin:1%;
 left:75%;
 right:5px;
 top:10%;
 padding:0.5%;
 height:83%;
 font-size:18px;
 }
 input[type=submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px;
    text-decoration: none;
	text-size:18px;
	letter-spacing:3px;
    margin: 2px;
    cursor: pointer;
}
button{
margin:2%;
padding:2%;
height:28px;
width:28px;
background-color:rgb(90, 247, 189);
color:white;
text-decoration: none;
text-size:18px;
cursor: pointer;
border:none;
border-radius:4px
}
button:hover{
margin:2%;
padding:2%;
height:34px;
width:34px;
background-color:rgb(90, 247, 189);
color:white;
text-decoration: none;
text-size:18px;
cursor: pointer;
border:none;
border-radius:4px
}
</style>
</head>
<body>
  <ul>
  <li style="float:left;font-size:22px;letter-spacing:3px;color:white;padding:10px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Parsec</li>
  <li>&nbsp &nbsp &nbsp &nbsp </li>
  <li>&nbsp &nbsp &nbsp &nbsp  </li>
  <li> &nbsp &nbsp &nbsp &nbsp </li>
  <li>&nbsp &nbsp &nbsp &nbsp </li>
  <li>&nbsp </li>
  <li style="background-color:#4CAF50;"><a href="#">MCQ CHALLENGE </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </li>
  </ul>
  
  <hr color="green">
  
  <form action="quiz1.php" method="get">
  
  

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
	if(isset($_GET['ans'])){
	$sql1="update answers set q".$_GET['pq']."=".$_GET['ans'];
	$conn->query($sql1);
	}
	$sql2="select * from answers where username='".$_SESSION['username']."'";
	$result1=$conn->query($sql2);
	if($result1){
	$row1=$result1->fetch_assoc();
	$v=(string)((int)($_GET['q']));
	$w="q".$v;
	$st=$row1[$w];
	}
	$sql3="select * from questions where sno='{$_GET['q']}'";
	$result2=$conn->query($sql3);
	if($result2){
		$row=$result2->fetch_assoc();
?>
  
  <div class="m">
 
  <div class="a">
	Q.<?php echo $row['sno']; ?> &nbsp <?php echo $row['question']; ?>
  </div>
  <br><br>  
  <div class="b">
  <br>
	<input type="radio" name="ans" value="1"> &nbsp
	<?php
	if($st=="1")
		echo "<h7 style='color:black;font-weight:bold;font-size:18px;'>".$row['o1']."</h7>";   
	else
		echo $row['o1'];									
	?><br><br>
	
	<input type="radio" name="ans" value="2"> &nbsp
	<?php
	if($st=="2")
		echo "<h7 style='color:black;font-weight:bold;font-size:18px;'>".$row['o2']."</h7>";
	else
		echo $row['o2'];									
	?><br><br>
	
	<input type="radio" name="ans" value="3"> &nbsp 
	<?php
	if($st=="3")
		echo "<h7 style='color:black;font-weight:bold;font-size:18px;'>".$row['o3']."</h7>";
	else
		echo $row['o3'];									
	?><br><br>
	
	<input type="radio" name="ans" value="4"> &nbsp 
	<?php
	if($st=="4")
		echo "<h7 style='color:black;font-weight:bold;font-size:18px;'>".$row['o4']."</h7>";
	else
		echo $row['o4'];			
	?><br><br>
	
	<?php
	echo "<input type='hidden' name='pq' value='{$row['sno']}'>";
	?>
  </div>

  <br><br>
  </div>  
  
  
  <div class="d">
	
	<br>
	
	<div style="background-color:white;margin:0.2%;padding:5%;font-size:25px;height:4%;">
	<center>HH:MM:SS</center>
	</div>	
	
	<br>
	
	<hr>
	
	<div style="background-color:#4CAF50;color:white;margin:0.2%;padding:1%;font-size:20px;height:4.7%;">
	<center>QUESTIONS</center>
	</div>
	
	<div style="background-color:white;margin:2% 0.2%;padding:5%;font-size:25px;height:40%;width:40%display:block;">
	
	<?php
	}
	$sql4="select * from answers where username='".$_SESSION['username']."'";
	$result4=$conn->query($sql4);
	if($result4){
	$row5=$result4->fetch_assoc();
	
	for($i=1;$i<=10;$i++){
	$r="q".$i;
	if((int)($_GET['q'])==$i)
		echo "<button formaction='quiz.php' value=$i name='q' style='color:white;background-color:yellow;padding:2%;border-radius:4px;font-size:14px;'>".$i;   
	else if($row5[$r]!="0")
		echo "<button formaction='quiz.php' value=$i name='q' style='color:white;background-color:#4CAF50;padding:2%;border-radius:4px;font-size:14px;'>".$i;   
	else
		echo "<button formaction='quiz.php' value=$i name='q'>".$i;   	
	}
	}
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
	</div>
	
	<hr>
	<br>
	
	<button formaction="login.php" style="width:50%;color:white;border-radius:4px;margin:5% 25%;padding:4.5%;background-color:#4CAF50;font-size:25px;height:8.5%;">SUBMIT
	
	</div>
    
  <div class="c">
	<input type="submit" value="Next" style="position:relative;border-radius:4px;left:88%;top:5%;background-color:#4CAF50;display:block;">
  </div>
  
  </form> 
	
  </body>