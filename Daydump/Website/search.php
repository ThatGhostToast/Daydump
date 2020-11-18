<?php

?>

<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
	<title>Search</title>
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
   	  <h1>Search for a blog post</h1>
   	  <form class="login-form" action="searchBlog.php" method="get">
   	  Blog Title: <input type="text" name="blogTitle"></input><br>
   	  Blog Content: <input type="text" name="blogContent"></input><br>
   	  <button type="submit" class="btn btn-primary btn ghost">Search</button>
   	  </form>
   	  
   	  <!-- Buttons that redirect you to the login page or the registration page. -->
   	  <a href="loginSuccess.php" class="button1">Return</a>
   	  
   </body>
</html>