<?php

session_start();


include('../database/dbNewConnection.php');



if (isset($_POST) & !empty($_POST)) {
    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    $sql = "SELECT * FROM `Benutzer` WHERE username = '{$username}' AND userpassword = '{$userpassword}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    $_SESSION['username'] = $username;

    if ($count == 1) {
        $_SESSION['userpassword'] = $userpassword;

        header('location: ../profile.php');
    } else {
        $fsmg = "username/password wrong";
    }

    if (isset($_SESSION['username'])) {
        $smsg = "User already logged in";
    }
}

?>