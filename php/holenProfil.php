<?php
var_dump($_GET);

include '../database/dbNewConnection.php';

$lname = $_GET['lname'];


$result= mysqli_connect($connection, "SELECT (".$lname.") FROM `Benutzer`");