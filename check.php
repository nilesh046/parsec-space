<?php 
session_start();
?>
<?php
$conn=new mysqli("localhost","root","","space");
if ($conn->connect_error) {
   header("Location:anonymous.html");
   exit();
} 
$sql="select * from details where username='".$_POST['username']."' and password='".$_POST['password']."'";
$result=$conn->query($sql);
if($row=$result->fetch_assoc()){
$_SESSION['username']=$_POST['username'];
header("Location:login.php");
exit();
}
else{
header("Location:anonymous.html");
exit();
}
$conn->close();
?>

