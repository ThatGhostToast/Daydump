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
	  <style>
	  
	   body {
	  		    display: flex;
	  			justify-content: center;
	  			align-items: center;
	  			min-height: 100vh;
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
	  
	     /*
	     Form CSS taken from: https://codepen.io/alphardex/pen/zYYZorR
	     */
	     
	     .btn {
	     		padding: 8px 20px;
	     		border-radius: 0;
	     		overflow: hidden;	     		
	     }
	     
	     .btn::before {
	     		position: absolute;
	     		content: "";
	     		top: 0;
	     		left: 0;
	     		background: linear-gradient(120deg, transparent, var(--primary-color), transparent);
	     		transform: translateX(-100%);
	     		transition:0.6s;
	     }
	     
	     .btn:hover {
	     		background: transparent;
	     		box-shadow: 0 0 20px 10px hsla(204, 70%, 53%, 0.5);
	     }
	     
	     .btn:hover::before {
	     		transform: translateX(100%);
	     }
	     
	     .form-input-material {
	     		--input-default-border-color: white;
	     		--input-border-bottom-color: white;
	     		
	     }
	     

	     
	     .login-form {
	     		display: flex;
	     		flex-direction: column;
	     		align-items: center;
	     		padding: 50px 40px;
	     		color: white;
	     		background: rgba(0, 0, 0, 0.8);
	     		border-radius: 10px;
	     		box-shadow:0 0.4px 0.4px rgba(128, 128, 128, 0.109), 0 1px 1px rgba(128, 128, 128, 0.155), 0 2.1px 2.1px rgba(
	     		128, 128, 128, 0.195), 0 4.4px 4.4px rgba (128, 128, 128, 0.241), 0 12px 12px rgba(128, 128, 128, 0.35);
	     }
	    
	     .login-form h1{
	     		margin: 0 0 24px 0;
	     }
	     
	     .login-form .form-input-material {
	     		margin: 12px 0;
	     }
	     
	     .login-form .btn {
	     		width: 100%;
	     		margin: 18px 0 9px 0;
	     }
	     
	      /* The alert message box */
			.alert {
			    position: fixed;
			    top: 25%;
  				padding: 20px;
  				background-color: #f44336; /* Red */
  				color: white;
  				margin-bottom: 15px;
  				opacity: .9;
  				width: 29%;
				   }

		  /* The close button */
			.closebtn {
  				margin-left: 15px;
  				color: white;
  				font-weight: bold;
  				float: right;
  				font-size: 22px;
  				line-height: 20px;
 			 	cursor: pointer;
  				transition: 0.3s;
					  }

		  /* When moving the mouse over the close button */
			.closebtn:hover {
  				color: black;
							}
	  
	  </style>
	  
   </head>
   <body>
   
   	<div class="alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  			Username or Password was incorrect.
	</div>
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