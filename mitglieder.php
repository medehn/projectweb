<?php
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


            //include "../database/Rabenbund.sql";
            include(__DIR__.'/database/dbNewConnection.php');

            define ('DB_HOST','localhost');
            define('DB_NAME', 'rabenbund');
            define('DB_USER','Project');
            define('DB_PASS','projectweb');



            $query = "SELECT fname,lname,birthdate,email,adress,anumber,plz,ort
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

//                        echo '<table class="data-table">
//        <tr class="data-heading">';  //initialize table tag
//                        while ($property = mysqli_fetch_field($result)) {
//                            echo '<td>' . $property->name . '</td>';  //get field name for header
//                            array_push($all_property, $property->name);  //save those to array
//                        }
//                        echo '</tr>'; //end tr tag
//
//                        //showing all data
//                        while ($row = mysqli_fetch_array($result)) {
//                            echo "<tr>";
//                            foreach ($property as $item) {
//                                echo '<td>' . $row[$item] . '</td>'; //get items using property value
//                            }
//                            echo '</tr>';
//                        }
//                        echo "</table>";

                        require_once ('database/dbNewConnection.php');
                        $db_link = mysqli_connect('localhost', 'Project','projectweb','Rabenbund');

                        $db_erg = mysqli_query( $db_link, $query );
                         if ( ! $db_erg )
                         {
                             die('Ungültige Abfrage: ' . mysqli_error(1));
                         }

                         echo '<table border="1">';
                         while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
                         {
                             echo "<tr>";
                             //echo "<td>". $zeile['userid'] . "</td>";
                             echo "<td>". $zeile['fname'] . "</td>";
                             echo "<td>". $zeile['lname'] . "</td>";
                             echo "<td>". $zeile['birthdate'] . "</td>";
                             echo "<td>". $zeile['email'] . "</td>";
                             echo "<td>". $zeile['adress'] . "</td>";
                             echo "<td>". $zeile['anumber'] . "</td>";
                             echo "<td>". $zeile['plz'] . "</td>";
                             echo "<td>". $zeile['ort'] . "</td>";
                             echo "</tr>";
                         }
                         echo "</table>";

                         mysqli_free_result( $db_erg );



                        //            if ($results->num_rows > 0) {
                        //                echo "<table border =1><tr><th>Vorname   </th><th>Nachname   </th><th>Job   </th><th>Ort   </th></tr>";
                        //                // output data of each row
                        //                while ($row = $results->fetch_assoc()) {
                        //                    echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["birthdate"]  . "</td><td>" . $row["email"]  . "</td><td>"  . $row["adress"]  ."</td><td>"  . $row["anumber"]  ."</td><td>"  . $row["plz"]  ."</td><td>"  . $row["ort"]  ."</td></tr>";
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

