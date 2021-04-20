<?php
require("config.php");


  $connection = new PDO("mysql:host=$dbSerwerName;dbname=$dbName", $userName, $dbPassword);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $id = $_GET['id'];
  $sql = "SELECT * FROM planety WHERE id = \"$id\"";
  $query = $connection->prepare($sql);
  $query -> execute();

    while($row = $query->fetch()){
      echo
          '<form method="POST" action="update.php">
            <label for="nazwa">Nazwa: </label><br/>
            <input type="text" name="nazwa" value='.$row['nazwa'].' /><br/>
            <label for="masa">Masa: </label><br/>
            <input type="text" name="masa" value='.$row['masa'].' /><br/>
            <label for="odleglosc_od_gwiazdy">Odległość od gwiazdy: </label><br/>
            <input type="number" name="odleglosc_od_gwiazdy" value='.$row['odleglosc_od_gwiazdy'].' /><br/>
            <label for="promien">Promien: </label><br/>
            <input type="number" name="promien" value='.$row['promien'].' /><br/>


            <input type="submit" value="Aktualizuj"/>
        </form>';
    }

    $connection = null;

?>


