<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rabenbund zu Landeck</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<?php
include('php\nav.php');
include('php\header.php')
?>
<!--Seiten-Navigation-->
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="profile.php">Mein Profil</a></p>
            <p><a href="events.php">Anmeldung Lager</a></p>
        </div>
        <div class="col-sm-6 text-left text-center">
            <div class="container">
                <h1 class="well">Passwort vergessen?</h1>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="container">
                    <label>Deine Email Adresse</label>
                    <input type="text" placeholder="Email Adresse" class="form-control" required>
            </div>
            <br>
        </div>
            <div class="col-sm-8">
                <div class="container" </div>
                <button type="button" class="btn btn-labeled btn-success"
                        data-toggle="modal" data-target="#myModal">Absenden
                </button>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-body">
                        <p>Eine Email wurde an dich versendet! Bitte checke deine
                            Mails!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Close
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <br/>
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