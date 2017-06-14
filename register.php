<!DOCTYPE html>
<html lang="de">
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
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="profile.php">Mein Profil</a></p>
            <p><a href="events.php">Anmeldung Lager</a></p>
        </div>
        <div class="col-sm-6 text-left">
            <div class="container">
                <h1 class="well">Registrierung</h1>
                <form>
                    <div class="col-sm-12 well">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Vorname*</label>
                                <input type="text" placeholder="" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nachname*</label>
                                <input type="text" placeholder="" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Strasse, Hausnummer</label>
                                <input type="text" placeholder="" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>PLZ</label>
                                <input type="text" placeholder="" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Ort</label>
                                <input type="text" placeholder="" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Geburtsdatum</label>
                                <input type="date" placeholder="" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                            <label>Email Addresse*</label>
                            <input type="text" placeholder="" class="form-control" required>
                            </div>
                            <br>
                            <hr>
                            <div class="col-sm-6 form-group">
                                <label>Username</label>
                                <input type="text" placeholder="" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Passwort*</label>
                                <input type="text" placeholder="" class="form-control" required>
                            </div>
                        </div>

                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Funktion im Verein*</label>
                                <input type="text" placeholder="" class="form-control" required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Fähigkeiten</label>
                                <input type="text" placeholder="" class="form-control">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Interessen</label>
                                <input type="text" placeholder="" class="form-control">
                                <br>
                                <hr>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <h2>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-labeled btn-success">
                                                        <span class="btn-label"><i
                                                                    class="glyphicon glyphicon-ok"></i></span>Absenden
                                            </button>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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