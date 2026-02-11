<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "magaka";

$db = mysqli_connect($host, $user, $pass, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
