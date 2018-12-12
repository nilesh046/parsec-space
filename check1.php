
<?php
session_start();
?>

<?php
if($_POST['username']=="parsec" && $_POST['password']=="pass"){
$_SESSION["admin"]="parsec";
header("Location:login1.php");
exit();
}
else{
header("Location:anonymous1.html");
exit();
}
?>

