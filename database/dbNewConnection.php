<?php

include 'dbDetails.php';

$connection = mysqli_connect($server, $user, $pwd, $db) or die('Verbindung zu Server ' . $server . ' konnte nicht aufgebaut werden.');

//echo '<p>Successfuly connected to server ' . $server . '</p>';

?>