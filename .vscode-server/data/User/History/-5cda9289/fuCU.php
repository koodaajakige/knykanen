<?php
include 'ylaosa.php';
include 'alaosa.php';

$dsn = "pgsql:host=localhost;dbname=knykanen";
$user = "db_knykanen";
$pass = getenv("DB_PASSWORD");
$options = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION];

try {
	$yhteys = new PDO($dsn, $user, $pass, $options);
	if (!$yhteys) { die(); }

    $stmt = $yhteys->query("SELECT * FROM elokuva");

    //tulostus while-lauseessa
    while ($rivi = $stmt->fetch())
    {
    echo  "<b>" .$rivi['nimi']. "<\b>" ."\n" ."*". "\n" .
          $rivi['vuosi'] . "\n" ."*". "\n" .
          $rivi['ohjaaja'] . "\n" ."*". "\n" .
          $rivi['genre'] . "\n" ."*". "\n" . "<br>".
          $rivi['miespaaosa']. "\n" ."*". "\n" .
          $rivi['naispaaosa'] 
          ."<br>" ."<br>";
    };

    echo "<table>";
    while ($rivi = $stmt->fetch()) {
      echo "<tr>";
      echo "<td>" .htmlspecialchars($rivi['nimi']). "</td>";
      echo "<td>" .htmlspecialchars($rivi['ohjaaja']). "</td>";
      echo "</tr>";
      }
    echo "</table>";
    

} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

?>