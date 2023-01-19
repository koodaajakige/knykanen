<?php
$dsn = "pgsql:host=localhost;dbname=knykanen";
$user = "db_knykanen";
$pass = getenv("DB_PASSWORD");
$options = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false, 
];

$idhaku = $_GET['id'];

try {
	$yh = new PDO($dsn, $user, $pass, $options);
	if (!$yh) { die(); }

   if ($idhaku) {
   $stmt = $yh->prepare("SELECT nimi, ohjaaja, genre, vuosi, miespaaosa, naispaaosa
   FROM elokuva WHERE vid = ?");

   $stmt->execute([$idhaku]);
   $rivi = $stmt->fetch();

   if ($rivi) {
      echo "<div class='leffa'>"; 
      echo "   <div>Nimi: $rivi[nimi]</div>";
      echo "   <div>Ohjaaja: $rivi[ohjaaja]</div>";
      echo "   <div>Genre: $rivi[genre]</div>";
      echo "   <div>Vuosi: $rivi[vuosi]</div>";
      echo "   <div>Miespääosa: $rivi[miespaaosa]</div>";
      echo "   <div>Naispääosa: $rivi[naispaaosa]</div>";
      
   } else {
   echo "Tunnistetta vastaavaa elokuvaa ei löytynyt!";
   }
   } else {
   echo "Haettavan elokuvan tunnistetta ei määritelty!";
   } 

   unset($idhaku);
   unset($_POST);
   unset($_REQUEST);
  

}catch (PDOException $e){
	echo $e->getMessage();
	die();
}
 
?>

<br><br>
<input type="submit" <a href="#" onclick="history.back();"> Palaa etusivulle</a>


