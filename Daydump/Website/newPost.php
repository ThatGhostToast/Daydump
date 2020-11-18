<?php
session_start();

/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This page allows the user to make a new post
 */

if (!isset($_SESSION['username']))
{
    echo "Please login first <a href='loginPage.php'> here </a>";
    exit;
}

?>

<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
	<title>New Post</title>
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
<div class = "form-container">
	<h2>Add a new post</h2>
	<p>Please tell us your story!</p>
	<form class="login-form" action="processAddPost.php">
		Blog Title: <input type="text" name="blogTitle"></input><br>
		Blog Content: <textarea rows="5" cols="50" name="blogContent"></textarea><br>
		<button type="submit">Post</button>
	</form>

</div>

</html>