

<?php

//var_dump($_SESSION);

require_once(__DIR__ . '/../database/dbNewConnection.php');

$username = $_SESSION['username'];

$result = mysqli_query($connection, "SELECT * FROM `Benutzer` WHERE username = '$username'");

$row = mysqli_fetch_assoc($result);


$editMode = false;
if(isset($_GET['editMode']) && $_GET['editMode'] == 'true') {
    $editMode = true;
}


/*Diese Funktion wird weggelassen, da es Fehlermeldungen gab & es nicht das bewirkt hat was wir wollten
    außerdem haben wir versucht eine andere Methode anzuwengen, die Daten zu updaten
 *
 * if(isset($_GET['editMode']) && $_GET['editMode'] == 'true' && !empty($_POST)) {


}*/