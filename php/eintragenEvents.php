<?php

var_dump($_POST);

include '../database/dbNewConnection.php';


$eventname = $_POST['eventname'];
$email = $_POST['email'];
$tage = $_POST['tage'];
$zelt = $_POST['zelt'];
$car = $_POST['car'];
$carseats = $_POST['carseats'];
$besuchername = $_POST['besuchername'];
$sonstiges = $_POST['sonstiges'];


//kontrolle ob im array was eingetragen ist
if(isset($eventname)){
    echo "Eventname geht   ";
}else{
    echo "Eventname geht nix   ";
}

$result = mysqli_query($connection,
    "INSERT into `Events` (eventid,eventname ,email ,tage ,zelt ,car ,carseats ,besuchername ,sonstiges) 
          VALUES(NULL, '".$eventname."','".$email."','".$tage."','".$zelt."','".$car."','".$carseats."',
          '".$besuchername."','".$sonstiges."');");


//überprüfung ob er was in die Datenbank einträgt
if(!$result)
{
    echo mysqli_error($connection);
    echo '   Nicht eingetragen';
}else{
    echo '   Eingetragen';
}