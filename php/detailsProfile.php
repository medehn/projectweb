<?php

include ('../database/dbNewConnection.php');

$username = $_GET['username'];

$query = "SELECT username FROM Benutzer WHERE username='.$username.'";
$result = mysqli_query($connection, $query);

if (!$result && mysqli_num_rows($result) != 1)
{
    die("Error: Data not found..");
}
echo mysqli_error($result);

$test = mysqli_fetch_array($result);
$username = $test['username'];
?>