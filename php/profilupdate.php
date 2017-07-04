<?php
//session_start();

//Hier werden einzelne Bereiche des Profils geupdated, was jedoch leider nicht klappt - da wahrscheinlich etwas an der Datenbankverbindung
//nicht glatt läuft
//var_dump($_SESSION);

include('../database/dbNewConnection.php');



$fname = htmlentities($_POST['fname'], ENT_QUOTES, 'utf-8');
$lname = $_POST['lname'];
$username = $_POST['username'];
$funktion = $_POST['funktion'];
$skills = $_POST['skills'];
$interests = $_POST['interests'];


$result = mysqli_query($connection, "UPDATE `Benutzer` SET funktion='$funktion', skills='$skills', interests='$interests'
WHERE username='$username'");


$row = mysqli_fetch_assoc($result);

/*if (mysqli_query($connection, $result)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connection);
}*/



header('location: ../profile.php');
