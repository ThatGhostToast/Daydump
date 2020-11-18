<?php
include_once 'funcs.php';

$searchForTitle = $_GET['blogTitle'];
$searchForContent = $_GET['blogContent'];

$sql = "SELECT * FROM `blog_posts` WHERE `title_table` LIKE '%$searchForTitle%' OR `blog_content` LIKE '%$searchForContent%'";

if (dbConnect())
{
    $result = mysqli_query(dbConnect(), $sql);
    if ($result)
    {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Blog Title: " . $row['title_table'] . "<br>";
            echo "Blog Content: " . $row['blog_content'] . "<br>";
            echo "====================================<br>";
        }
    } else {
        echo "Error with the SQL " . mysqli_error(dbConnect());
    }
}else {
    echo "Error connecting " . mysqli_connect_error();
}