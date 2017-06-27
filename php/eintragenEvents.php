<?php

var_dump($_POST);

include '../database/dbNewConnection.php';


$eventname = $_POST['eventname'];
$email = $_POST['email'];
$tage = $_POST['tage'];
$zelt = $_POST['zelt'];
$car = $_POST['car'];
$carseats = $_POST['carseats'];
$besuchername = $_POST['besuchername'];
$sonstiges = $_POST['sonstiges'];


//kontrolle ob im array was eingetragen ist
if(isset($eventname)){
    echo "Eventname geht   ";
}else{
    echo "Eventname geht nix   ";
}

$result = mysqli_query($connection,
    "INSERT into `Events` (eventid,eventname ,email ,tage ,zelt ,car ,carseats ,besuchername ,sonstiges) 
          VALUES(NULL, '".$eventname."','".$email."','".$tage."','".$zelt."','".$car."','".$carseats."',
          '".$besuchername."','".$sonstiges."');");


//überprüfung ob er was in die Datenbank einträgt
if(!$result)
{
    echo mysqli_error($connection);
    echo '   Nicht eingetragen';
}else{
    echo '   Eingetragen';
}

$emailID = "melanie_dehne@gmx.de";
$subject = "Neue Event-Anmeldung!";
$body = <<<EOD
        
        <table cellspacing="0" cellpadding="1" border="1">
            <tbody>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Name: </td>
                    <td style="padding: 5px 10px;">$besuchername</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Email: </td>
                    <td style="padding: 5px 10px;">$eventname</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Tage: </td>
                    <td style="padding: 5px 10px;">$tage</td>
                </tr>
                                <tr>
                    <td style="padding: 5px 10px;" width="150">Zelt: </td>
                    <td style="padding: 5px 10px;">$zelt</td>
                </tr>
                                <tr>
                    <td style="padding: 5px 10px;" width="150">Auto: </td>
                    <td style="padding: 5px 10px;">$car</td>
                </tr>
                                <tr>
                    <td style="padding: 5px 10px;" width="150">Sitzplätze: </td>
                    <td style="padding: 5px 10px;">$carseats</td>
                </tr>
                                <tr>
                    <td style="padding: 5px 10px;" width="150">Sonstiges: </td>
                    <td style="padding: 5px 10px;">$sonstiges</td>
                </tr>
            </tbody>
        </table>
        
EOD;

$headers = "From: info@rabenbund.at\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";

mail($emailID, $subject, $body, $headers );

header('location: ../anmeldung_erfolg.php');

?>