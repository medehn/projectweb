<?php
session_start();
if (isset($_SESSION["username"])) {
    ?>

    //code für seite

    <?php
} else {
    ?>


    <?php
    //header( "Location: index.php");
    echo "Logge dich bitte ein";
}

?>