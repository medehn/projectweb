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
            <div class="col-sm-6 text-left">
                <form action="contact.php">
                    <h2>Anmeldung Mittelalterlager</h2>
                    Name
                    <br>
                    <input type = "text"
                           placeholder="Name">
                    <br><br>
                    Lager (Ehrenberg, Schluderns, ...)
                    <br>
                    <input type = "text"
                           placeholder="Lager">
                    <br><br>
                    Wieviele Tage?
                    <br>
                    <input type = "radio" value="2" id="2">
                    <label for="2">2</label>
                    <br>
                    <input type = "radio" value="3" id="3">
                    <label for="3">3</label>
                    <br>
                    <input type = "radio" value="4" id="4">
                    <label for="4">4</label>
                    <br><br>
                    Eigenes Zelt?
                    <br>
                    <input type = "radio" value="ja" id="zeltja">
                    <label for="zeltja">ja</label>
                    <br>
                    <input type = "radio" value="nein" id="zeltnein">
                    <label for="zeltnein">nein</label>
                    <br><br>

                    Eigenes Auto?
                    <br>
                    <input type = "radio" value="ja" id="autoja">
                    <label for="autoja">ja</label>
                    <br>
                    Falls ja, bitte angeben: Welches Auto (Anhängerkupplung, klein oder groß), Freie Sitzplätze, schon ausgemachte Mitfahrer
                    <br>
                    <input type = "text">
                    <br>
                    <input type = "radio" value="nein" id="autonein">
                    <label for="autonein">nein</label>
                    <br><br>

                    Infos, Anmerkungen, Wünsche
                    <br>
                    <input type = "text">
                    <br><br>
                    <input type="Submit" name="absenden" value="absenden">
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