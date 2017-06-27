<?php

include "dbNewConnection.php";

$query = 'SELECT * FROM events';

$results = mysqli_query($connection, $query) or die('Abfrage konnte nicht verarbeitet werden');

mysqli_close($connection);


?>


<section>
    <div class="container-fluid text-center">

        <h3>Liste der Franzosen in Tirol</h3>
        <ul>

            <?php
            if ($results->num_rows > 0) {
                echo "<table border =1><tr><th>Vorname   </th><th>Nachname   </th><th>Job   </th><th>Ort   </th></tr>";
                // output data of each row
                while ($row = $results->fetch_assoc()) {
                    echo "<tr><td>" . $row["vname"] . "</td><td>" . $row["nname"] . "</td><td>" . $row["job"]  . "</td><td>" . $row["ort"] ."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }


            ?>
        </ul>
    </div>

</section>