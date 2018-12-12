<?php
session_start();
?>
<?php
$conn=new mysqli("localhost","root","","space");
if($_POST['uname']==NULL || $_POST['password']==NULL){
	header("Location:signup.html");
	exit();
}
$sql="insert into details values ('".$_POST['uname']."','".$_POST['password']."','".$_POST['id']."')";
$sql1="insert into answers values('".$_POST['uname']."',0,0,0,0,0,0,0,0,0,0)";
if($conn->query($sql)==FALSE)
{
	header("Location:signup.html");
	exit();
}
if($conn->query($sql1)==FALSE){
	header("Location:signup.html");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parsec cot</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
	<link href="styleregister.css" rel="stylesheet">
</head>

<body style="background-image:url('images/24.jpg');">
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                	Parsec
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cot.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a>
                    <li><a href="login.html">LOG IN</a></li>
					<li><a href="signup.html">SIGN UP</a></li>
					<li><a href="admin.html">ADMIN</a></li>
                </ul>
                
            </div>
        </div>
    </nav>

	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 style="font-size:50px;">Successfully Registered</h1><br><br>
                <form class="login" action="login.html" method='post' style="display:fixed;top:60px;left:calc(39%);">
				<input type="submit" value="SIGN IN" style="background:yellowgreen;font-size:22px;color:white;margin:5px;height:55px;width:120px;border:none;border-radius:15px;"><br>
				</form>
            </div>
        </div>
    </header>
</body>

</html>
