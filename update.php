<?php
require 'config.php';

$nazwa = $_POST['nazwa'];
$masa = $_POST['masa'];
$odleglosc = $_POST['odleglosc_od_gwiazdy'];
$promien = $_POST['promien'];


$connection = new mysqli($dbSerwerName, $userName, $dbPassword, $dbName);

if ($connection->connect_error) {
  die("Połączenie nieudane: " . $connection->connect_error);
}

$sql = "UPDATE `planety` SET `nazwa` = $nazwa, `masa` = $masa, `odleglosc_od_gwiazdy` = $odleglosc, `promien` = $promien;"

$query = $connection->query($sql);
echo "Planeta została pomyślnie zaktualizowana.";

$connection->close();

?>
<br/><a href="index.php"><input type="submit" value="Wróć"></a>
