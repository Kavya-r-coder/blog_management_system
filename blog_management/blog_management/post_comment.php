
<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'blog');
   $query = "INSERT INTO comments (blog_id, comment, created_at) VALUES ('$blog_id', '$comment', NOW())";

    

$conn->close();
?>

