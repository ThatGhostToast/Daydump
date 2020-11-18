<?php
session_start();

/*
 * DayDump
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
	 <style>
	 body {
		  		background: radial-gradient(circle, white, #ECECEC);
		  		font-family:Trebuchet MS;
		  }
	
	   h1 {
		  		 font: bold 50px "Century Schoolbook", Georgia, Times, serif;
				 color: #9370DB;
				 line-height: 90%;
				 margin: .2em 0 .4em 0;
				 letter-spacing: -2px;
				 text-align: center;	
		  }
		
	   h2 {
				 font: bold 25px "Century Schoolbook", Georgia, Times, serif;
				 color: #9370DB;
				 line-height: 90%;
				 margin: .2em 0 .4em 0;
				 letter-spacing: -2px;
				 text-align: center;
				 
		  }
		  
		   /*
		   CSS used for the buttons was taken from https://fdossena.com/?p=html5cool/buttons/i.frag
		   */
		   
	   a.button1 {
	     		display:inline-block;
				padding:0.3em 1.2em;
				margin:0 0.3em 0.3em 0;
				border-radius:2em;
				box-sizing: border-box;
				text-decoration:none;
				font-family:'Roboto',sans-serif;
				font-weight:300;
				background-color:#9370DB;
				text-align:center;
				transition: all 0.2s;
				position: absolute;
				top: 10px;
		        right: 10px;
	       		  }
	   a.button1:hover {
	      		background-color:#4095c6;
	    			   }
	     
	   a.button2 {
	            display:inline-block;
				padding:0.3em 1.2em;
				margin:0 0.3em 0.3em 0;
				border-radius:2em;
				box-sizing: border-box;
				text-decoration:none;
				font-family:'Roboto',sans-serif;
				font-weight:300;
				background-color:#9370DB;
				text-align:center;
				transition: all 0.2s;
				position: absolute;
				top: 10px;
		        right: 115px;
	             }
	     
	     a.button2:hover {
	     		background-color:#4095c6;
	     				  }
	 
	 </style>
	  
   </head>
   <body>
   	  <h1>Successfully Logged Out!</h1>
   	  <h2>We'll be right here if you need us again!</h2>
   	  
   	  <!-- Buttons that redirect you to the login page or the registration page. -->
   	  <a href="registration.html" class="button1">Register</a>
   	  <a href="loginPage.php" class="button2">Login</a>
   	  
   </body>
</html>