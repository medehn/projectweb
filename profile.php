<?php
session_start();
if (isset($_SESSION["username"])) {
    
include('php'.DIRECTORY_SEPARATOR.'detailsProfile.php');


include('php'.DIRECTORY_SEPARATOR.'nav_logout.php');



?>

<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Profil</a></li>

</ol>

<?php

include('php'.DIRECTORY_SEPARATOR.'header.php');
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


                    <h1>Profil von:  <?php echo $row['fname'], "&nbsp", $row['lname']; ?> </h1>
                        <br>
                    <p>Name: <?php echo $row['username']; ?> </p>
                   <br>
                    <p>Funktion: <?php echo $row['funktion']; ?> </p>
                    <br>
                    <p>Besondere Fähigkeiten: <?php echo $row['skills']; ?> </p>
                    <br>
                    <p>Interessen: <?php echo $row['interests']; ?> </p>
                    <br>
        </form>
                <button type="submit" name="edit" class="btn btn-labeled btn-success">
                    <span class="btn-label"><a href="profilbearbeiten.php"></span>Bearbeiten
                </button>
        <!-- Bearbeiten, wirft Fehler mit Array-->

            </div>


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
include('php'.DIRECTORY_SEPARATOR.'footer.php')
?>
    <?php
} else {
    //... und wird hier weitergeleitet auf eine neue Seite mit Message
    header('location: bitteeinloggen.php');
}

?>



