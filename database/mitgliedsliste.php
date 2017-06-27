<?php


include "Rabenbund.sql";
include "dbNewConnection.php";

//define ('DB_HOST','localhost');
//define('DB_NAME', 'rabenbund');
//define('DB_USER','Project');
//define('DB_PASS','projectweb');

//$db = new Database();

//$db_link = mysqli_connect(
//        localhost,
//        Project,
//        projectweb,
//        rabenbund
//
//);

$sql = "SELECT */*fname,lname,birthdate,email,adress,anumber,plz,ort */
          FROM benutzer;";



//$results = mysqli_query($connection, $query) or die('Abfrage konnte nicht verarbeitet werden');
//
//mysqli_close($connection);


?>


<section>
    <div class="container-fluid text-center">

        <h3>Liste der Mitglieder des Vereins</h3>
        <ul>

            <?php

            $db_erg = mysqli_query( $db_link, $sql );
            if ( ! $db_erg )
            {
                die('Ungültige Abfrage: ' . mysqli_error());
            }

            echo '<table border="1">';
            while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
            {
                echo "<tr>";
                echo "<td>". $zeile['id'] . "</td>";
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