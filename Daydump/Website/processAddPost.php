<?php

session_start();

/*
 * Zac Almas
 * 10/18/20
 * This processes the new blog post
 */

//This allows us to call the function that connects to the database
include 'funcs.php';

$blogTitle = $_GET['blogTitle'];
$blogContent = $_GET['blogContent'];
$user_id =  $_SESSION['id'];

$sql = "INSERT INTO `blog_posts` (`id`, `title_table`, `blog_content`, `siteusers_ID`) VALUES (NULL, '$blogTitle', '$blogContent', '$user_id');";

if (dbConnect()) {
    $result = mysqli_query(dbConnect(), $sql);
    if ($result)
    {
        include 'newBlogAdded.php';
    }
    else {
        echo "Error in the sql " . mysqli_error(dbConnect());
    }
}

else {
    echo "Error connecting " . mysqli_connect_error();
}