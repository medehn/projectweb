<?php
include('php\nav_logout.php'); ?>
<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Erfolg!</a></li>
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

            <p class="container-fluid text-center">
                <br>
            <p>Anmeldung erfolgreich!</p>
        </div>
    </div>
</div>
<?php
include('php\footer.php')
?>

