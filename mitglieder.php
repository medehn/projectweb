<?php
session_start();
if (isset($_SESSION["username"])) {

include('php'.DIRECTORY_SEPARATOR.'detailsProfile.php');


include('php'.DIRECTORY_SEPARATOR.'nav_logout.php'); ?>
<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Mitglieder</a></li>
</ol>

<?php
include('php'.DIRECTORY_SEPARATOR.'header.php')
?>


<!--Seiten-Navigation-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-xs-2 sidenav">
            <p><a href="profile.php" id="navlink">Mein Profil</a></p>
            <p><a href="events.php" id="navlink">Anmeldung Events</a></p>
        </div>
        <div class="col-xs-6 text-left">
            <br>
            <br>
            <br>
            <?php


            include(__DIR__.'/database/dbNewConnection.php');

            $query = "SELECT fname,lname,birthdate,plz,ort
          FROM benutzer;";



            $results = mysqli_query($connection, $query) or die('Abfrage konnte nicht verarbeitet werden');



            ?>

            <!DOCTYPE html>
            <html lang="de">
            <head>
                <title></title>
            </head>

            <body>
            <section>
                <div class="container-fluid text-center">

                    <h3>Liste der Mitglieder des Vereins</h3>
                    <ul>





                        <?php

                        require_once ('database/dbNewConnection.php');
                        $db_link = mysqli_connect('127.0.0.1', 'root','','rabenbund');

                        $db_erg = mysqli_query( $db_link, $query );
                         if ( ! $db_erg )
                         {
                             die('Ungültige Abfrage: ' . mysqli_error(mysqli_connect('127.0.0.1','root','','rabenbund')));
                         }

                         echo '<table border="1">';
                         while ($zeile = mysqli_fetch_array( $db_erg, 1))
                         {
                             echo "<tr>";
                             //echo "<td>". $zeile['userid'] . "</td>";
                             echo "<td>". $zeile['fname'] . "</td>";
                             echo "<td>". $zeile['lname'] . "</td>";
                             echo "<td>". $zeile['birthdate'] . "</td>";
                             //echo "<td>". $zeile['email'] . "</td>";
                             //echo "<td>". $zeile['adress'] . "</td>";
                             //echo "<td>". $zeile['anumber'] . "</td>";
                             echo "<td>". $zeile['plz'] . "</td>";
                             echo "<td>". $zeile['ort'] . "</td>";
                             echo "</tr>";
                         }
                         echo "</table>";

                         mysqli_free_result( $db_erg );



                        //            if ($results->num_rows > 0) {
                        //                echo "<table border =1><tr><th>Vorname   </th><th>Nachname   </th><th>Geburtstag   </th><th>PLZ   </th><th>Ort   </th></tr>";
                        //                // output data of each row
                        //                while ($row = $results->fetch_assoc()) {
                        //                    echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["birthdate"]  . "</td><td>"  . $row["plz"]  ."</td><td>"  . $row["ort"]  ."</td></tr>";
                        //                }
                        //                echo "</table>";
                        //            } else {
                        //                echo "0 results";
                        //            }


                        ?>
                    </ul>
                </div>

            </section>
            </body>
            </html>
<!--            <h3 class="text-center">UNDER CONSTRUCTION</h3>-->
<!---->
<!--            <img class="text-center" src="img\knight.png">-->
        </div>
    </div>
</div>
<?php
include('php'.DIRECTORY_SEPARATOR.'footer.php')
?>

    <?php
} else {
    ?>


    <?php
    //header( "Location: index.php");
    echo "Loge dich ein";
}

?>