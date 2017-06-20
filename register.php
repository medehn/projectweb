<?php
include('php/nav.php'); ?>
<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Registrierung</a></li>

</ol>
<?php
include('php/header.php')
?>
<!--Seiten-Navigation-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="profile.php">Mein Profil</a></p>
            <p><a href="events.php">Anmeldung Events</a></p>
        </div>
        <div class="col-sm-6 text-left">
            <div class="container">
                <h1 class="well">Registrierung</h1>
                <form action="php/eintragen.php" method="post">
                    <div class="col-sm-12 well">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Vorname*</label>
                                <input type="text" placeholder="" name="fname" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nachname*</label>
                                <input type="text" placeholder="" name="lname" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Strasse</label>
                                <input type="text" placeholder="" name="adress" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Hausnummer</label>
                                <input type="text" placeholder="" name="anumber" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>PLZ</label>
                                <input type="text" placeholder="" name="plz" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Ort</label>
                                <input type="text" placeholder="" name="ort" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Geburtsdatum</label>
                                <input type="date" placeholder="" name="birthdate" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Email Addresse*</label>
                                <input type="text" placeholder="" name="email" class="form-control" required>
                            </div>
                            <br>
                            <hr>
                            <div class="col-sm-6 form-group">
                                <label>Username</label>
                                <input type="text" placeholder="" name="username" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Passwort*</label>
                                <input type="text" placeholder="" name="userpassword" class="form-control" required>
                            </div>
                        </div>

                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Funktion im Verein*</label>
                                <input type="text" placeholder="" name="funktion" class="form-control" required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Fähigkeiten</label>
                                <input type="text" placeholder="" name="skills" class="form-control">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Interessen</label>
                                <input type="text" placeholder="" name="interests" class="form-control">
                                <br>
                                <hr>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <h2>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-labeled btn-success">
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
include('php/footer.php')
?>
