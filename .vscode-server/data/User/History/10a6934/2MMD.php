<?php
//hae data lomakkeelta


$dsn = "pgsql:host=localhost;dbname=knykanen";
$user = "db_knykanen";
$pass = getenv("DB_PASSWORD");
$options = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false, 
];

$elo = $_POST['elo'];
$ohj = $_POST['ohj'];
$gen = $_POST['gen'];
$vuo = $_POST['vuo'];
$mies = $_POST['mies'];
$nais = $_POST['nais'];

try {
	$yhteys = new PDO($dsn, $user, $pass, $options);
	if (!$yhteys) { die(); }
	
	//tyhjaa ei lisata
	if ( !empty($elo) )
	{
        $stmt = $yhteys->prepare("INSERT INTO elokuva
        (nimi, ohjaaja, genre, vuosi, miespaaosa, naispaaosa)
        VALUES (?,?,?,?,?,?)");
        $stmt->execute([$elo, $ohj, $gen, $vuo, $mies, $nais]);
        $id = $yhteys->lastInsertId();
       		
		//tyhjennetään muuttujat (jottei F5 lisaa samaa rivia yha uudelleen
		//fiksumpi tapa $_SESSION
		unset($elo);
		unset($ohj);
        unset($gen);
		unset($vuo);
        unset($mies);
        unset($nais);
		unset($_POST);
		unset($_REQUEST);
		header("Location: elokuva.php?id=$id");	
	}
	
}catch (PDOException $e){
	echo $e->getMessage();
	die();
}

?>