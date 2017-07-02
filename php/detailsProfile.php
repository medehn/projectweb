<?php

//var_dump($_SESSION);

require_once(__DIR__ . '/../database/dbNewConnection.php');

$username = $_SESSION['username'];

$result = mysqli_query($connection, "SELECT * FROM `Benutzer` WHERE username = '$username'");

$row = mysqli_fetch_assoc($result);


$editMode = false;
if(isset($_GET['editMode']) && $_GET['editMode'] == 'true') {
    $editMode = true;
}


if(isset($_GET['editMode']) && $_GET['editMode'] == 'true' && !empty($_POST)) {

    //do whatever needs to be done - check if all fields that you require are set
    //if everything is fine - save the values that have been sent to the database...
}