<?php 


?>

<html>
	<head>
	<link href="ugacreate.css" type="text/css" rel="stylesheet" />
	
	</head>
	<body>

		<div id="bannerarea">
			<img src="https://41.media.tumblr.com/671ba642b48ed5a3f92438cc796417ac/tumblr_nlx2p33nuR1tkwpyuo1_r1_400.png" alt="banner logo"> 
			<br>
		</div>
			
		<h1>Get started on your projects today!</h1>

		<div id="signUp">
			<form action = "sign-up.php" method ="get">
			<input type="submit" name="userSignUp" value="Sign Up">
			</form>
		</div>

		<br>

		<div id="login">
			<h2>Already have an account? Welcome back!</h2>
			<form action = "project-search.php" method ="get">
			<input type="text" name="userLogin" class="textfield" placeholder="Username">
			<br><br>
			<input type="text" name="userPassword" class="textfield" placeholder="Password">
			<br><br>
			<input type="submit" name="submit" class="submit" value="Sign In">
			</form>
		</div>

		<h3>Property of DogByte</h3>

	</body>
</html>

<?php

?>
