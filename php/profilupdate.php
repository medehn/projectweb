<?php
session_start();

var_dump($_SESSION);

include(__DIR__ . '../database/dbNewConnection.php');

$results1 = mysqli_query($connection, $queryupdate);

$fname = htmlentities($_SESSION['fname'], ENT_QUOTES, 'utf-8');
$lname = $_SESSION['lname'];
$username = $_SESSION['username'];
$funktion = $_SESSION['funktion'];
$skills = $_SESSION['skills'];
$interests = $_SESSION['interests'];

$queryupdate =  "UPDATE `Benutzer` SET `funktion`=$funktion, `skills`=$skills, `interests`=$interests, 
WHERE username=$username";




header('location: ../profile.php');
