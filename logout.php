<?php
session_start();
?>
<?php
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<head>
    <title>Parsec logout</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>

<body style="background-image: url('images/24.jpg');">
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
					<li><a href="signup.html">SIGNUP</a></li>
					<li><a href="admin.html">ADMIN</a></li>
                </ul>
                
            </div>
        </div>
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
			 <h2 style='font-size:60px;'>Log out successfully</h2>
			 <p>Thanks for using us.</p>
			 <a href='cot.html' class='btn btn-primary btn-lg'> HOME PAGE </a>
            </div>
        </div>
    </header>
</body>

</html>




