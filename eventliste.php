<?php
include('php'.DIRECTORY_SEPARATOR.'nav_logout.php'); ?>
<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Anstehende Events</a></li>
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

            $query = "SELECT eventname, tage, zelt, sonstiges
          FROM events;";



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

                    <h3>Liste der Anstehenden Events</h3>
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
                            echo "<td>". $zeile['eventname'] . "</td>";
                            echo "<td>". $zeile['tage'] . "</td>";
                            echo "<td>". $zeile['zelt'] . "</td>";
                            echo "<td>". $zeile['sonstiges'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";

                        mysqli_free_result( $db_erg );



                        //            if ($results->num_rows > 0) {
                        //                echo "<table border =1><tr><th>Eventname   </th><th>Tage   </th><th>Zelt   </th><th>Sonstiges   </th></tr>";
                        //                // output data of each row
                        //                while ($row = $results->fetch_assoc()) {
                        //                    echo "<tr><td>" . $row["eventname"] . "</td><td>" . $row["tage"] . "</td><td>" . $row["zelt"]  . "</td><td>" . $row["sonstiges"]  . "</td></tr>";
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
