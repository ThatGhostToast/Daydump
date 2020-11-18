<?php
session_start();

/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This is the login page
 */

?>

<!DOCTYPE HTML>
<html>
  <head>
	<title>Login Page</title>
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
		}
	 </style>
	  
   </head>
   <body>
     <!-- Buttons to get back to registration and the main menu -->
   		<a href="registration.html" class="button1">Register</a>
   	    <a href="index.html" class="button2">Menu</a>
   	 <!-- Login form -->
   	  <form class="login-form" action="loginHandler.php" method = "post">
   	  	   <h1>Login</h1>
   	  	   <div class="form-input-material">
   	  	   	  <input type="text" name="username" id="username" placeholder=" " autocomplete="off"
   	  	   	   class="form-control-material" required />
   	  	   	   <label for="username">Username</label> 	  	   
   	  	   </div>
   	  	   <div class="form-input-material">
   	  	   		<input type="password" name="pword" id="pword" placeholder=" " autocomplete="off"
   	  	   		 class="form-control-material" required />
   	  	   		 <label for="pword">Password</label>
   	  	   </div>
   	  	   <button type="submit" class="btn btn-primary btn ghost">Login</button>  	       
   	  </form>
      
   </body>
</html> 