<?php

session_start();
include 'funcs.php';

/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This processes the edited post.
 */

$blogTitle = $_GET['blogTitle'];
$blogContent = $_GET['blogContent'];
$id = $_GET['id'];
$role = $_SESSION['role'];

if (dbConnect() && $role == "admin") {
    
$sql = "UPDATE `blog_posts` SET `title_table` = '$blogTitle', `blog_content` = '$blogContent' WHERE `id` = '$id'";

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