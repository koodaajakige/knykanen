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
    echo $rivi['nimi'] ."*". "\n" .$rivi['ohjaaja'] ."<br>" ."<br>";
    }
    

} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

?>