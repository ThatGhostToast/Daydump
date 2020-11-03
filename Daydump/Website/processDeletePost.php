<?php
session_start();

require_once 'funcs.php';

if ($_SESSION['role'] != 'admin')
{
    echo "Please log in as an admin.";
    exit;
}
$postToDelete = $_GET['id'];            
$sql = "DELETE FROM `blog_posts` WHERE `blog_posts` . `id` = '$postToDelete'";

if (dbConnect()) {
    $result = mysqli_query(dbConnect(), $sql);
    if ($result)
    {
        echo "Deleted post " . $postToDelete . "<br>";
    } else {
        echo "Error with the sql " . mysqli_error(dbConnect());
    }
}else {
    echo "Error connecting " . mysqli_connect_error();
}
            
?>