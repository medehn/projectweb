<?php
include '../database/dbNewConnection.php';

$fname = htmlentities($_POST['fname'], ENT_QUOTES, 'utf-8') ;
$lname = $_POST['lname'];
$username = $_POST['username'];
$userpassword = $_POST['userpassword'];
$birthdate = $_POST['birhtdate'];

//kontrolle ob im array was eingetragen ist
if(isset($fname)){
    echo "Vname geht";
}else{
    echo "Vname geht nix";
}

$query = mysqli_query($connection,
    "INSERT into `Benutzer` (userid,fname,lname,username,userpassword,birthdate) 
          VALUES(NULL,'".$fname."', '".$lname."','".$username."', '".$userpassword."','".$birthdate."');");


//überprüfung ob er was in die Datenbank einträgt
if(!mysqli_query($connection,$query))
{
    echo 'Nicht eingetragen';
}else{
    echo 'Eingetragen';
}

