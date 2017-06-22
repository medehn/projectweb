<?php
session_start();
include ('../database/dbNewConnection.php');



if (isset($_POST) & !empty($_POST)) {
    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    $sql = "SELECT * FROM `Benutzer` WHERE username = '{$username}' AND userpassword = '{$userpassword}'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
       $_SESSION['userpassword'] = $userpassword;
        header('location:../profile.php');
    }else {
        $fsmg = "username/password wrong";
    }

    if (isset($_SESSION['username'])){
        $smsg = "User already logged in";
    }
}







/*
$_logindaten = ARRAY("name"=>$username, "passwort"=>$userpassword);

if (isset($_POST["username"]) && isset($_POST["userpasswort"]))
{
    if ($_logindaten["name"] == $_POST["username"] &&
        $_logindaten["passwort"] == $_POST["userpasswort"])
    {
        # Userdaten korrekt - User ist eingeloggt
        # Login merken !
        $_SESSION["login"] = 1;
        include ("../profile.php");
    }
}

if ($_SESSION["login"] != 1)
{
    include("../register.php");
    exit;
}

echo mysqli_error($connection);
*/


# User ist eingeloggt
/*
if(isset($_GET['login'])) {
    $username = $_POST['username'];
    $userpasswort = $_POST['userpasswort'];

    $statement = $result->prepare("SELECT * FROM `Benutzer` WHERE (username) = ('".$username."')");
    $result = $statement->execute(array('username' => $username));
    $username = $statement->fetch();



    //Überprüfung des Passworts
    if ($username !== false && password_verify($userpasswort, $username['userpasswort'])) {
        $_SESSION['userid'] = $username['userid'];
        die('Login erfolgreich. Weiter zu <a href="/profile.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

}

*/
?>