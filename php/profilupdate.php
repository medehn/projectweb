<?php
//session_start();

//Hier werden einzelne Bereiche des Profils geupdated, was jedoch leider nicht klappt - da wahrscheinlich etwas an der Datenbankverbindung
//nicht glatt läuft
//var_dump($_SESSION);

include('../database/dbNewConnection.php');

$results1 = mysqli_query($connection, $queryupdate)or die('Abfrage konnte nicht verarbeitet werden');

$fname = htmlentities($_SESSION['fname'], ENT_QUOTES, 'utf-8');
$lname = $_SESSION['lname'];
$username = $_SESSION['username'];
$funktion = $_SESSION['funktion'];
$skills = $_SESSION['skills'];
$interests = $_SESSION['interests'];

/*$query2= "INSERT into `Benutzer` (funktion, skills, interests)
VALUES ('$funktion', '$skills', '$interests')";*/

$queryupdate =  "UPDATE `Benutzer` SET funktion='.$funktion.', skills='.$skills.', interests='.$interests.'
WHERE username='.$username.'";



$row = mysqli_fetch_assoc($queryupdate);

if (mysqli_query($conn, $queryupdate)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}





header('location: php/profile.php');
