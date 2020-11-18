<?php
session_start();
/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This page allows the admin to edit a blog post
 */

//get the post id
$id = $_GET['id'];
    echo "Currently editing post " . $id . "<br>";

//Get the title and content
require_once 'funcs.php';
    if (dbConnect())
    {
        $sql = "SELECT * FROM `blog_posts` WHERE `id` = '$id' LIMIT 1";
        $result = mysqli_query(dbConnect(), $sql);
        if ($result)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                $blog_title = $row['title_table'];
                $blog_content = $row['blog_content'];
            }
        }
        
    }else {
        echo "Error connecting. " . mysqli_connect_error();
    }
    
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Post</title>
<!--Linking the css file to make the website look good  -->
<link href="makeup.css" rel="stylesheet" type="text/css">

</head>
<div class = "form-container">
<h2>Edit a post</h2>
<p>Please tell us your story!</p>
<form action="processEditPost.php">
<input type = "hidden" name = "id" value = "<?php echo $id;?>"></input>
Blog Title: <input type="text" name="blogTitle" value = "<?php echo $blog_title;?>"></input><br>
Blog Content: <textarea rows="5" cols="50" name="blogContent"><?php echo $blog_content;?></textarea><br>
<button type="submit">Submit Changes</button>
</form>

</div>

</html>