<!DOCTYPE html> 
<?php
	session_start();
	$_SESSION['username'] = $_POST['name']; 
	$users_name = $_SESSION['username'];
	setcookie($users_name,' ',time()+86400); 
	
?>
<html>
	<head>
	    <meta charset="utf-8">
	    <title>Session Page 1</title>
	    <link rel="stylesheet" href="http://138.68.48.65/style.css" type="text/css">

	     <link rel="icon" type="image/png" href="http://138.68.48.65/favicon.png"> 

	     <link rel="icon" href="http://138.68.48.65/icons/favicon.ico" type="image/x-icon">
	     <link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-32x32.png" sizes="32x32" />
	    <link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-16x16.png" sizes="16x16" /> 
	</head>
	<body>
		<h1>Please enter your name in the box</h1>
		<form action="" method="POST">
		 	Your name: <input type=text name="name"><br>
		 	<input type="submit" value="Submit">
		</form>
		<a href="sessionpage2_PHP.php">Link to second page</a>
	</body>
</html>