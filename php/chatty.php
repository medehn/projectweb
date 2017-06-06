<?php
$server = "127.0.0.1:3306";
$db = "uniapp";
$user = "root";
$pwd = "";


//Create Connetion
$conn = new mysqli($server, $db, $user, $pwd);

//Check Connestion
if ($conn -> connect_error){
    die ("Es konnte keine Verbindung hergestellt werden." . $conn -> connect_error);
}

echo "Verbindung hergestellt.";


?>




