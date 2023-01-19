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
        $stmt = $pdo->prepare("INSERT INTO elokuva
        (nimi, vuosi, ohjaaja, genre, miespaaosa, naispaaosa)
        VALUES (?,?,?,?,?,?,?)");
        $stmt->execute([$elo, $vuo, $ohj, $gen, $mies, $nais]);
        $id = $pdo->lastInsertId();
       		
		//tyhjennetään muuttujat (jottei F5 lisaa samaa rivia yha uudelleen
		//fiksumpi tapa $_SESSION
		unset($elo);
        unset($vuo);
        unset($ohj);
        unset($gen);
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