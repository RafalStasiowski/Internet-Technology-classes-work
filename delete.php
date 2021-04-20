<?php
require("config.php");


$connection = mysqli_connect($dbSerwerName, $userName, $dbPassword, $dbName);

if(!$connection){
    die("Wystąpił błąd podaczas połączenia z bazą: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM `planety` WHERE `planety`.`id` = \"$id\"";


mysqli_close($connection);
header("Location:index.php");



?>

