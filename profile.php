<?php
session_start();
if (isset($_SESSION["username"])) {
    
include('php'.DIRECTORY_SEPARATOR.'detailsProfile.php');


include('php'.DIRECTORY_SEPARATOR.'nav_logout.php');

//hier wird geprüft ob der user schon eingelogt ist wenn nicht kommt er ans ende der Seite...


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


                <?php if($editMode): ?>
                    <h1><p> Profil von: <input type="text" name="username" value="<?php echo $row['fname'], "&nbsp", $row['lname']; ?>">
                <?php else:  ?>
                    <h1>Profil von:  <?php echo $row['fname'], "&nbsp", $row['lname']; ?> </h1>
                        <?php endif; ?>
                        <br>
                    <?php if ($editMode): ?>
                    <p>Name: <input type="text" name="username" value="<?php echo $row['username']; ?>"> </p> <!-- Funktion aus Datenbank geholt-->
                    <?php else:  ?>
                    <p>Name: <?php echo $row['username']; ?> </p>
                    <?php endif; ?>
                    <br>
                    <?php if ($editMode): ?>
                    <p>Funktion: <input type="text" name="funktion" value="<?php echo $row['funktion']; ?>"> </p> <!-- Funktion aus Datenbank geholt-->
                    <?php else:  ?>
                    <p>Funktion: <?php echo $row['funktion']; ?> </p>
                    <?php endif; ?>
                    <br>
                    <?php if ($editMode): ?>
                    <p>Besondere Fähigkeiten: <input type="text" name="skills" value="<?php echo $row['skills']; ?>"> </p>
                    <?php else: ?>
                    <p>Besondere Fähigkeiten: <?php echo $row['skills']; ?> </p>
                    <?php endif; ?>
                    <br>
                    <?php if ($editMode): ?>
                    <p>Interessen: <input type="text" name="interests" value="<?php echo $row['interests']; ?>"> </p>
                    <?php else: ?>
                    <p>Interessen: <?php echo $row['interests']; ?> </p>
                    <?php endif; ?>
                    <br>
        </form>
                <button type="submit" name="edit" class="btn btn-labeled btn-success">
                    <span class="btn-label"><a href="profilbearbeiten.php"></span>Bearbeiten
                </button>

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



