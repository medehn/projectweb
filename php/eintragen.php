<?php

var_dump($_POST);

include '../database/dbNewConnection.php';


$fname = htmlentities($_POST['fname'], ENT_QUOTES, 'utf-8') ;
$lname = $_POST['lname'];
$username = $_POST['username'];
$userpassword = $_POST['userpassword'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$anumber = $_POST['anumber'];
$plz = $_POST['plz'];
$ort = $_POST['ort'];
$funktion = $_POST['funktion'];
$skills = $_POST['skills'];
$interests = $_POST['interests'];

//kontrolle ob im array was eingetragen ist
if(isset($fname)){
    echo "Vname geht";
}else{
    echo "Vname geht nix";
}

$result = mysqli_query($connection,
    "INSERT into `Benutzer` (userid,fname,lname,username,userpassword,birthdate,email,adress,anumber,plz,ort,funktion,skills,interests) 
          VALUES(NULL,'".$fname."', '".$lname."','".$username."', '".$userpassword."','".$birthdate."','".$email ."',
          '".$adress ."','".$anumber ."','".$plz ."','".$ort ."','".$funktion ."','".$skills ."','".$interests."');");


//überprüfung ob er was in die Datenbank einträgt
if(!$result)
{
    echo mysqli_error($connection);
    echo ' Nicht eingetragen';
}else{
    echo ' Eingetragen';
}

header('location: ../reg_erfolg.php');

