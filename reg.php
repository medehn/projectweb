<?php

include 'database/dbNewConnection.php';


$vname = $_POST['vname'];
$nname = $_POST['nname'];
$email = $_POST['email'];
$job = $_POST['job'];

$query = mysqli_query($connection,
    "INSERT into `login` (lid, vname,nname, email, job) VALUES(NULL, '$vname', '$nname', '$email','$job');");

?>