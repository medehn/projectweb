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
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="profile.php">Mein Profil</a></p>
                <p><a href="events.php">Anmeldung Lager</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-6 text-left">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Formular Name -->
                        <legend>Anmeldung Lager</legend>

                        <!-- Name-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Name</label>
                            <div class="col-md-4">
                                <input id="name" name="name" type="text" placeholder="Vorname Nachname" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Email Adresse-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="emailaddress">Email Addresse</label>
                            <div class="col-md-4">
                                <input id="emailaddress" name="emailaddress" type="text" placeholder="Email Adresse" class="form-control input-md" required="">
                            </div>

                        <!-- Event-->
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Event</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Event (Ehrenberg, Schluderns, ..." class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Wieviele Tage? -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tage</label>
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                        </div>

                        <!-- Eigenes Zelt?-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Eigenes Zelt</label>
                            <div class="col-md-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio"  value="1" checked="checked">
                                       Ja
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio"value="2">
                                        Nein
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Eigenes Auto?-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Eigenes Auto</label>
                            <div class="col-md-4">
                                <div class="radio">
                                    <label">
                                        <label>
                                            <input type="radio"  value="1" checked="checked">
                                        Ja
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio"value="2">
                                        Nein
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Eigenes Auto-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Platz im Auto für wieviele Personen?</label>
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option value="2">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                    <option value="2">mehr</option>
                                </select>
                            </div>
                        </div>

                        <!-- Auto-->
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Bei Auto: zB Anhängerkupplung, Platz für Equipment, Mitfahrer....</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>

                            <!-- Sonstiges-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="hotel">Infos, Wünsche, Anmerkungen?</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                    </fieldset>
                    <div class="container">
                        <div class="row">
                            <h2>  <div class="text-center">
                                    <button type="button" class="btn btn-labeled btn-success">
                                        <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Absenden</button>

                                    <br /></h2>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Footer mit Facebook, FAQ, Impressum-->
<?php
include('php\footer.php')
?>
<!-- Scripte für Bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>