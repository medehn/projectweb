<?php
session_start();
if (isset($_SESSION["username"])) {
include('php'.DIRECTORY_SEPARATOR.'nav_logout.php');

var_dump($_POST);

include './database/dbNewConnection.php';


$fname = htmlentities($_POST['fname'], ENT_QUOTES, 'utf-8') ;
$lname = $_POST['lname'];
$username = $_POST['username'];
$funktion = $_POST['funktion'];
$skills = $_POST['skills'];
$interests = $_POST['interests'];

    if(isset($fname)){
        echo "FName geht";
    }else{
        echo "FName geht nix";
    }

    $result = mysqli_query($connection,
        "SELECT (userid,fname,lname,username,funktion,skills,interests)  FROM 'Benutzer'
          VALUES(NULL,'".$fname."', '".$lname."','".$username."','".$funktion ."','".$skills ."','".$interests."');");

    //Update bitte ergänzen
    

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


    <div class="row col-xs-12 well">

        <div class="col-xs-4"></div>
        <div class="col-xs-4">



        <div class="form-group">
            <label>Profil von:  <?php echo $row['fname'], "&nbsp", $row['lname']; ?> </label>


        <div class="form-group">
            <label>Name: <?php echo $row['username']; ?> </label>


        <div class="form-group">
            <label>Funktion:  <?php echo $row['funktion']; ?> </label>
            <input type="text" placeholder="Änderungen eingeben" name="funktion" class="form-control">
        </div>

        <div class="form-group">
            <label>Besondere Fähigkeiten: <?php echo $row['skills']; ?> </label>
            <input type="text" placeholder="Änderungen eingeben" name="besonderefähigkeiten" class="form-control">
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
        <div class="col-xs-4"></div>
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