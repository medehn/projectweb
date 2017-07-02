<?php
session_start();
if (isset($_SESSION["username"])) {

    include('php' . DIRECTORY_SEPARATOR . 'detailsProfile.php');


    include('php' . DIRECTORY_SEPARATOR . 'nav_logout.php');

    var_dump($_POST);

    include(__DIR__ . '/database/dbNewConnection.php');

    $query = "SELECT fname,lname,username, funktion, skills, interests
          FROM benutzer;";

    $results = mysqli_query($connection, $query) or die('Abfrage konnte nicht verarbeitet werden');


    $fname = htmlentities($_POST['fname'], ENT_QUOTES, 'utf-8');
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $funktion = $_POST['funktion'];
    $skills = $_POST['skills'];
    $interests = $_POST['interests'];

    if (isset($fname)) {
        echo "FName geht";
    } else {
        echo "FName geht nix";
    }


    //Update bitte ergänzen


    ?>

    <ol class="breadcrumb">
        <li class="active">Home</li>
        <li><a href="#">Profil</a></li>

    </ol>

    <?php

    include('php' . DIRECTORY_SEPARATOR . 'header.php');
    ?>

    <!--Seiten-Navigation-->
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-xs-2 sidenav">
                <p><a href="profile.php">Mein Profil</a></p>
                <p><a href="events.php">Anmeldung Events</a></p>
            </div>

            <div class="col-xs-10">

                <div class="form-group">
                    <label>Profil von: <?php echo $row['fname'], "&nbsp", $row['lname']; ?> </label>
                </div>


                <div class="form-group">

                    <label>Name: <?php echo $row['username']; ?> </label>
                </div>


                <p>
                    <label>Funktion: <?php echo $row['funktion']; ?> </label>
                    <br>
                    <input type="text" placeholder="Änderungen eingeben" name="funktion" class="form-control">
                </p>

                <div class="form-group">
                    <label>Besondere Fähigkeiten: <?php echo $row['skills']; ?> </label>
                    <input type="text" placeholder="Änderungen eingeben" name="besonderefähigkeiten"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label>Interessen: <?php echo $row['interests']; ?> </label>
                    <input type="text" placeholder="Änderungen eingeben" name="interessen" class="form-control">
                </div>
                <br>
                <button type="submit" name="modify" class="btn btn-labeled btn-success">
                    <span class="btn-label"></span>Ändern
                </button>

                <!-- Die Encoding-Art enctype MUSS wie dargestellt angegeben werden -->
                <form enctype="multipart/form-data" action="upload.php" method="POST">
                    <!-- MAX_FILE_SIZE muss vor dem Dateiupload Input Feld stehen -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
                    <!-- Der Name des Input Felds bestimmt den Namen im $_FILES Array -->
                    Diese Datei hochladen: <input name="userfile" type="file"/>
                    <input type="submit" value="Send File"/>

                </form>

            </div>
        </div>
    </div>


    <?php
    include('php' . DIRECTORY_SEPARATOR . 'footer.php')
    ?>
    <?php
} else {
    //... und wird hier weitergeleitet auf eine neue Seite mit Message
    header('location: bitteeinloggen.php');
}

?>