<?php

//var_dump($_SESSION);

require_once(__DIR__ . '/../database/dbNewConnection.php');

$username = $_SESSION['username'];

$result = mysqli_query($connection, "SELECT * FROM `Benutzer` WHERE username = '$username'");

$row = mysqli_fetch_assoc($result);

