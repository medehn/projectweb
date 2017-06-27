<?php

include "dbNewConnection.php";

$sql = 'SELECT eventname, tage,car,carseats,sonstiges
          FROM events';

$results = mysqli_query($connection, $sql) or die('Abfrage konnte nicht verarbeitet werden');

mysqli_close($connection);


?>


<!DOCTYPE html>
<html lang="de">
<head>
    <title></title>
</head>

<body>
<section>
    <div class="container-fluid text-center">

        <h3>Liste der anstehenden Events</h3>
        <ul>

            <?php
            if ($results->num_rows > 0) {
                echo "<table border =1><tr><th>Event   </th><th>Tage   </th><th>Auto(s)   </th><th>Sitzlätze   </th>  <th>Sonstiges   </th></tr>";
                // output data of each row
                while ($row = $results->fetch_assoc()) {
                    echo "<tr><td>" . $row["eventname"] . "</td><td>" . $row["tage"] . "</td><td>" . $row["car"]  . "</td><td>" . $row["carseats"] ."</td><td>" . $row["sonstiges"] ."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }


            ?>
        </ul>
    </div>

</section>
</body>
</html>