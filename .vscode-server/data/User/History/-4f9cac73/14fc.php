<?php
$dsn = "pgsql:host=localhost;dbname=knykanen";
$user = "db_knykanen";
$pass = getenv("DB_PASSWORD");
$options = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false, 
];

$id = $_GET['id'];

try {
	$yh = new PDO($dsn, $user, $pass, $options);
	if (!$yh) { die(); }

   if ($id) {
   $stmt = $yh->prepare("SELECT nimi, ohjaaja, genre, vuosi, miespaaosa, naispaaosa
   FROM elokuva WHERE vid = ?");

   $stmt->execute([$id]);
   $rivi = $stmt->fetch();

   if ($rivi) {
      echo "Nimi: $rivi[nimi]" . "<br>";
      echo "Ohjaaja: $rivi[ohjaaja]";
      echo "Genre: $rivi[genre]" . "<br>";
      echo "Vuosi: $rivi[vuosi]" . "<br>";
      echo "Miespääosa: $rivi[miespaaosa]" . "<br>";
      echo "Naispääosa: $rivi[naispaaosa]";
   } else {
   echo "Tunnistetta vastaavaa elokuvaa ei löytynyt!";
   }
   } else {
   echo "Haettavan elokuvan tunnistetta ei määritelty!";
   } 

}catch (PDOException $e){
	echo $e->getMessage();
	die();
}
 
?>


