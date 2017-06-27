<?php
session_start();

?>

<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Profil</a></li>

</ol>

<?php
?>

<!--Seiten-Navigation-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-xs-2 sidenav">
            <p><a href="profile.php">Mein Profil</a></p>
            <p><a href="events.php">Anmeldung Events</a></p>
        </div>
        <br> <br>
        <div class="col-xs-4 img-rounded"><img class src="img\profile.jpg"></div>

        <form method="get" action="php/detailsProfile.php">
            <div class="col-xs-6 text-left">
                <br>
                <p>Besondere Fähigkeiten: <?php echo $row['skills']; ?> </p>
                <p>Interesen: <?php echo $row['interests']; ?> </p>
                <form> Interessen hinzufügen <input type="text"></form>
                <button type="submit" name="submit" class="btn btn-labeled btn-success">
                    <span class="btn-label"><i ></i></span>Absenden
                </button>


        </form>
    </div>
    <!-- Die Encoding-Art enctype MUSS wie dargestellt angegeben werden -->
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <!-- MAX_FILE_SIZE muss vor dem Dateiupload Input Feld stehen -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
        <!-- Der Name des Input Felds bestimmt den Namen im $_FILES Array -->
        Diese Datei hochladen: <input name="userfile" type="file"/>
        <input type="submit" value="Send File"/>
    </form>
</div>
<?php
?>
