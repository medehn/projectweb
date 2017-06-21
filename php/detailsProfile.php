<?php


require_once('../database/dbNewConnection.php');

$username = mysqli_query("SELECT * FROM Benutzer WHERE username = '$username' AND userid = 1");
$result = mysqli_fetch_assoc($username);

/*
$username = $_GET['username'];
$userid = $_GET['userid'];

$query = "SELECT * FROM Benutzer WHERE username='.$username.' userid='.$userid.'";
$result = mysqli_query($connection, $query);


if (!$result && mysqli_num_rows($result) != 1)
{
    die("Error: Data not found..");
}
echo mysqli_error($result);

$test = mysqli_fetch_array($result);
$username = $test['username'];
*/
?>