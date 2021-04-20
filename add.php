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

$sql = "INSERT INTO `planety`(`nazwa`, `masa`, `odleglosc_od_gwiazdy`, `promien`)
VALUES ('".$nazwa."', '".$masa."', '".$odleglosc."', '".$promien."');";
$query = $connection->query($sql);
echo "Planeta została pomyślnie dodana.";

$connection->close();

?>
<br/><a href="index.php"><input type="submit" value="Wróć"></a>
