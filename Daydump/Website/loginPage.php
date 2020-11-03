<?php
session_start();

/*
 * Zac Almas
 * 10/18/20
 * This is the login page
 */

//TO DO:  Create a error that pops up when the username or password is incorrect.
?>

<!DOCTYPE HTML>
<html>
  <head>
	<title>Login Page</title>
	  <link href="makeup.css" rel="stylesheet" type="text/css">
	  
   </head>
   <body>
     <!-- Buttons to get back to registration and the main menu -->
   		<a href="registration.html" class="button1">Register</a>
   	    <a href="index.html" class="button2">Menu</a>
   	 <!-- Login form -->
   	  <form action="loginHandler.php" method = "post">
   	       Username: <input type="text" name="username"><br> 
	       Password: <input type="password" name="pword"><br>
   	    	<input type="submit" value ="Login">
   	  </form>
      
   </body>
</html> 