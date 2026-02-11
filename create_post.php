<?php
include("config.php");
session_start();
if(!isset($_SESSION['login_user'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Create Post</title>
    </head>
    <body>
        <h2>Create a New Post</h2>
        <form action="submit_post.php" method="post">
            <label>Title:</label><br>
            <input type="text" name="title" required><br><br>
            <label>Content:</label><br>
            <textarea name="content" rows="5" cols="40" required></textarea><br><br>
            <input type="submit" value="Submit Post">
        </form>
    </body>
</html>