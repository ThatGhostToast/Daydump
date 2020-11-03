<?php
session_start();

/*
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
	  
   </head>
<div class = "form-container">
	<h2>Add a new post</h2>
	<p>Please tell us your story!</p>
	<form action="processAddPost.php">
		Blog Title: <input type="text" name="blogTitle"></input><br>
		Blog Content: <textarea rows="5" cols="50" name="blogContent"></textarea><br>
		<button type="submit">Post</button>
	</form>

</div>

</html>