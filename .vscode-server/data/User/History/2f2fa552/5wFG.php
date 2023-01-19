<?php
include 'yla.php';
include 'ala.php';

$dsn = "pgsql:host=localhost;dbname=knykanen";
$user = "db_knykanen";
$pass = getenv("DB_PASSWORD");
$options = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION];

try {
	$yht = new PDO($dsn, $user, $pass, $options);
	if (!$yht) { die(); }

	$kys = "select * from elokuva order by vid desc";
	$lause = $yht->prepare($kys);
	$lause->execute();

	//tulostus while-lauseessa
	echo "<hr>";
	$stmt = $pdo->query("SELECT nimi FROM elokuva");
	while ($rivi = $stmt->fetch())
	{
	echo $rivi['nimi'] . "\n";
	} 
   
	}

} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

?>