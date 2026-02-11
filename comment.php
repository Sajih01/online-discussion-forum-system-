<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        
        header("location: welcome.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h2>Login Page</h2>
        <form action="" method="post">
            <label>Username :</label>
            <input type="text" name="username" required><br><br>
            <label>Password :</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" value=" Login "><br><br>
        </form>
    </body>
    <div class="error"><?php echo $error; ?></div>
</html>
