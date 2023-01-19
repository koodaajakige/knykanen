<?php
//hae data lomakkeelta
$uusi = $_POST['uusi'];

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
		//lisataan lomakkeella oleva message vieraskirjan loppuun
		$ins = "insert into vieras ";
		$ins .= "values ( default, ?, ?, now(), now() )";
		
		// valmistellaan SQL-lause suoritusta varten
		$lause = $yht->prepare($ins);
		
		$lause->bindValue(1, $uusi);
		
		// suorita lisays
		$lause->execute();
		
		//tyhjennetään muuttujat (jottei F5 lisaa samaa rivia yha uudelleen
		//fiksumpi tapa $_SESSION
		unset($uusi);
		unset($_POST);
		unset($_REQUEST);
		header('Location: index.php');	
	}
	
}catch (PDOException $e){
	echo $e->getMessage();
	die();
}

?>