<?php
session_start();

/*
 * Zac Almas
 * 10/18/20
 * This page logs out the user
 */

$_SESSION = array();

session_destroy();

?>

<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
	<title>Logout Page</title>
	 <!--Linking the css file to make the website look good  -->
	 <link href="makeup.css" rel="stylesheet" type="text/css">
	  
   </head>
   <body>
   	  <h1>Successfully Logged Out!</h1>
   	  <h2>We'll be right here if you need us again!</h2>
   	  
   	  <!-- Buttons that redirect you to the login page or the registration page. -->
   	  <a href="registration.html" class="button1">Register</a>
   	  <a href="loginPage.php" class="button2">Login</a>
   	  
   </body>
</html>