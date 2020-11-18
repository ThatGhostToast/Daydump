<?php
session_start();
/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This page lets the user know the blog was uploaded successfully
 */
?>

<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
	<title>New Blog Added</title>
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
   	  <h1>New post added!</h1>
   	  <h2>Click here to return</h2>
   	  
   	  <!-- Buttons -->
   	  <a href="registration.html" class="button1">Register</a>
   	  <a href="logout.php" class="button2">Logout</a>
   	  <a href="loginSuccess.php" class="button6">Return</a>
   	  
   </body>
</html>