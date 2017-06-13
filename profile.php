<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rabenbund zu Landeck</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
<?php
include('php\nav.php');
include('php\header.php')
?>


<!--Seiten-Navigation-->
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="profile.php">Mein Profil</a></p>
                <p><a href="events.php">Anmeldung Lager</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <br> <br>
            <div class="col-sm-4 img-rounded"><img class src="img\profile.jpg"> </div>
            <div class="col-sm-6 text-left">
                <h1>Profil von Max Mustermann</h1>
                <br>
                <p>Name: </p>
                <p>Funktion: </p>
                <p>Besondere Fähigkeiten:</p>
                <p>Ineresen:</p>

                </div>
        </div>
    </div>
</div>
<?php
include('php\footer.php')
?>
<!-- Scripte für Bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>