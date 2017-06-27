<!-- Index Seite für den Verein -
todo: Anpassung der Index-Seite für "eingeloggt" vs "nicht eingeloggt"
-->

<?php
include('php'.DIRECTORY_SEPARATOR.'nav_logout.php'); ?>
<ol class="breadcrumb">
    <li class="active">Home</li>
</ol>

<?php
include('php'.DIRECTORY_SEPARATOR.'header.php')
?>


<!--Seiten-Navigation-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-xs-2 sidenav">
            <p><a href="profile.php" id="navlink">Mein Profil</a></p>
            <p><a href="events.php" id="navlink">Anmeldung Events</a></p>
        </div>
        <div class="col-xs-6 text-left">
            <h1>Seid gegrüßt!</h1>
            <br>
            <br>
            <p>Willkommen auf der neuen Homepage des Rabenbundes zu Landeck!
                Die Seite befindet sich noch im Aufbau!</p>
            <hr>
        </div>
    </div>
</div>
<?php
include('php'.DIRECTORY_SEPARATOR.'footer.php')
?>

