<!-- Index Seite für den Verein -
todo: Anpassung der Index-Seite für "eingeloggt" vs "nicht eingeloggt"
-->

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">

    <!--mobile Ansicht-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rabenbund zu Landeck</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<?php
include('php'.DIRECTORY_SEPARATOR.'nav_login.php'); ?>


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

        </div>
        <div class="col-xs-6 text-left">
            <h1>Seid gegrüßt!</h1>
            <br>
            <br>
            <p>Willkommen auf der neuen Homepage des Rabenbundes zu Landeck!
                Die Seite befindet sich noch im Aufbau!</p>
            <p>Für mehr Funktionalitäten bitte einloggen!</p>
            <hr>
        </div>
    </div>
</div>
<?php
include('php'.DIRECTORY_SEPARATOR.'footer.php')
?>

