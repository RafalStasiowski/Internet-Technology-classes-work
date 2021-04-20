<?php
require 'config.php';

$id = $_GET['id'];


$connection = new mysqli($dbSerwerName, $userName, $dbPassword, $dbName);

if ($connection->connect_error) {
  die("Połączenie nieudane: " . $connection->connect_error);
}

$sql = "SELECT * FROM `planety` WHERE `id` = $id";
$query = $connection->query($sql);

if ($query->num_rows > 0){
    echo '<table border="solid">';
    echo '<tr><td>Id</td><td>Nazwa</td><td>Masa</td><td>Odleglosc</td><td>Promien</td></tr>';
    while($row = $query->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$id."</td>"."<td>".$row['nazwa'];
        echo "<td>".$row['masa']."</td>";
        echo "<td>".$row['odleglosc_od_gwiazdy']."</td>";
        echo "<td>".$row['promien']."</td>";
        echo "</tr>";
    }

}
echo '<br/><a href="index.php"><input type="submit" value="Wróć"></a>';
?>

