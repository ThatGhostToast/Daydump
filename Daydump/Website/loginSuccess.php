<?php
session_start();
/*
 * Zac Almas
 * 10/18/20
 * Once you have successfully logged in it will send you to this page here
 */

//Allows us to call the function that connects to the database
include 'funcs.php';

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
	<title>MainMenu</title>
	 <!--Linking the css file to make the website look good  -->
	 <link href="makeup.css" rel="stylesheet" type="text/css">
	  
   </head>
   <body>
   	  <h1>Welcome <?php echo $_SESSION['username']?>!</h1>
   	  
   	  <!-- Buttons that redirect you to the login page or the registration page. -->
   	  <a href="logout.php" class="button1">Logout</a>
   	  <a href="newPost.php" class="button3">New Post</a>
   	  
   	  <?php if($_SESSION['role'] == 'admin'):?>
   	  <a href="adminPage.php" class="button5">Admin Page</a>
   	  <?php endif;?>
   	  
   </body>
</html>

<?php

$sql = "SELECT * FROM `blog_posts`";

if (dbConnect()->connect_error) {
    die("Connection failed: " . dbConnect()->connect_error);
}

if ($result = mysqli_query(dbConnect(), $sql)) {
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            
            echo "|".$row['title_table'] . "|" . "<br>";
            echo $row['blog_content'] . "<br>";
            echo "--------------------------<br>";
        }
    }
}


?>
