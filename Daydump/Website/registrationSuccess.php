<?php
session_start();

/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This page appears after the user registers
 */
?>

<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
	<title>Registration Success</title>
	 <!--Linking the css file to make the website look good  -->
	 <link href="makeup.css" rel="stylesheet" type="text/css">
	 <style>
	 h1 {
		  		 font: bold 50px "Century Schoolbook", Georgia, Times, serif;
				 color: #9370DB;
				 line-height: 90%;
				 margin: .2em 0 .4em 0;
				 letter-spacing: -2px;
				 text-align: center;
				 position: fixed;
				 top: 0;	
		   }
	 </style>
	  
   </head>
   <body>
   	  <h1>You're All set!</h1>
   	  <h2>Now that you're registered</h2>
   	  <h2>You're ready to make your first post!</h2>
   	  <h2>Login and get started!</h2>
   	  
   	  <!-- Buttons that redirect you to the login page or the registration page. -->
   	  <a href="index.html" class="button1">Menu</a>
   	  <a href="loginPage.php" class="button2">Login</a>
   	  
   </body>
</html>