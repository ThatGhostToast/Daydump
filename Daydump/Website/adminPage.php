<?php
session_start();

/*
 * Zac Almas
 * 10/18/20
 * This page allows the admin to alter user posts.
 */

//Allows us to call the function that connects us to the database
require_once 'funcs.php';

//Makes sure the user is an admin
if ($_SESSION['role'] != 'admin')
{
    echo "Please log in as an admin.";
    exit;
}

//Grabs all of the blog posts
$sql = "SELECT * FROM `blog_posts`";

if (dbConnect()) {
    $result = mysqli_query(dbConnect(), $sql);
    if ($result)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "Blog ID: " . $row['id'] . "<br>";
            echo "Blog title: " . $row['title_table'] . "<br>";
            echo "Blog content: " . $row['blog_content'] . "<br>";
?>

<!-- Button to delete post via the admin page -->
<form action="processDeletePost.php">
	<input type="hidden" name="id" value="<?php echo $row['id'];?>"></input>
	<button type="submit">Delete</button>
</form>     

<!-- Button to edit blog posts via the admin page -->
<form action="editBlogPost.php">
	<input type="hidden" name="id" value="<?php echo $row['id'];?>"></input>
	<button type="submit">Edit</button>
</form>       
            
<?php 
            echo "-----------------------------------------<br>";
            
        }
    } else {
        echo "Error with the sql " . mysqli_error(dbConnect());
    }
}else {
    echo "Error connecting " . mysqli_connect_error();
}
            
?>
    