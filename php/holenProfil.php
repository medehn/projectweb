<?php
var_dump($_GET);

include '../database/dbNewConnection.php';




$email = $_POST['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$row = mysqli_fetch_array($query);
$username = $row['fname'];

echo $username;