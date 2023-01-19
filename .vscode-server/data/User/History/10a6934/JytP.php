<?php
//hae data lomakkeelta
$elo = $_POST['elo'];
$vuo = $_POST['vuo'];
$ohj = $_POST['ohj'];
$gen = $_POST['gen'];
$mies = $_POST['mies'];
$nais = $_POST['nais'];

$dsn = "pgsql:host=localhost;dbname=knykanen";
$user = "db_knykanen";
$pass = getenv("DB_PASSWORD");
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

try {
	$yhteys = new PDO($dsn, $user, $pass, $options);
	if (!$yhteys) { die(); }
	
	//tyhjaa ei lisata
	if ( !empty($uusi) )
	{
        $elo = "Rear Window";
        $vuo = 112;
        $ohj = 112;
        $gen = 12;
        $mies = 1954;
        $nais = 1954;
        $stmt = $pdo->prepare("INSERT INTO leffa_elokuva
        (nimi, pituus, ikaraja, vuosi)
        VALUES (?,?,?,?)");
        $stmt->execute([$nimi, $pituus, $ikaraja, $vuosi]);
        $id = $pdo->lastInsertId();
       		
		//tyhjennetään muuttujat (jottei F5 lisaa samaa rivia yha uudelleen
		//fiksumpi tapa $_SESSION
		unset($uusi);
		unset($_POST);
		unset($_REQUEST);
		header("Location: elokuva.php?id=$id");	
	}
	
}catch (PDOException $e){
	echo $e->getMessage();
	die();
}

?>