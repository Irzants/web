<?php
	session_start();
?>

<!DOCTYPE HTML> 
<html lang="id"> 
	<head> 
		<title>LOGIN</title> 
		<link rel="stylesheet" type="text/css" href="mystyle.css" />
	</head> 
	<body>
		<div id="header">
			<div class="headcon">
				<h1> WELCOME,
					<?php echo($_SESSION['username'])?>
				</h1>
				<h3>
					<p>
						<a href="login.php" ><font align="left" color="white">logout</font></a>
					</p>
				</h3>
			</div>
			<div class="headcon">
				<p> menu</p>
			</div>
		</div>
		<div id="inner"></div>
		<div id="content">
			<h2>
				OUR FEATURE
			</h2>
		</div>
	</body> 
</html>