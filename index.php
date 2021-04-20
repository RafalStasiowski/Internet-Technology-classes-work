<?php
require("config.php");

$connection = new mysqli($dbSerwerName, $userName, $dbPassword, $dbName);
if ($connection->connect_error){
	die("Brak połączenia z bazą danych: " . $connection->connect_error);
}

$sql = "SELECT * FROM planety";
$query = $connection->query($sql);

if ($query->num_rows > 0){
    echo '<table border="solid">';
    while($row = $query->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['id']."</td>"."<td>".$row['nazwa'];
        echo '<td>'."<form method='GET' action='read.php'><input type='hidden' name='id' value=".$row['id']." /><button>Pokaż</button></form>".'</td>';

        echo '<td>'."<form method='GET' action='delete.php'><input type='hidden' name='id' value=".$row['id']." /><button>Usuń</button></form>".'</td>';

        echo '<td>'."<form method='GET' action='update_form.php'><input type='hidden' name='id' value=".$row['id']." /><button>Edytuj</button></form>".'</td>';
        echo "</tr>";
    }

}
echo "</table>";
echo '<a href="add_form.php"><input type="submit" value="Dodaj nową planetę"></a>';
$connection->close();
?>
