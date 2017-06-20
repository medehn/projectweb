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
        <!-- Die Encoding-Art enctype MUSS wie dargestellt angegeben werden -->
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <!-- MAX_FILE_SIZE muss vor dem Dateiupload Input Feld stehen -->
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <!-- Der Name des Input Felds bestimmt den Namen im $_FILES Array -->
            Diese Datei hochladen: <input name="userfile" type="file" />
            <input type="submit" value="Send File" />
        </form>
    </div>
<?php
include('php\footer.php')
?>
