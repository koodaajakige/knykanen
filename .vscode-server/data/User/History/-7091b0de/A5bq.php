<?php
/* This will give an error. Note the output
 * above, which is before the header() call */

// Luodaan taulukko, jossa on osoitteen indeksi ja sen nimi.
$osoitteet = array(
    "NG5TG" => "https://www.w3schools.com/php/",
    "R7E7L" =>	"https://www.php.net/manual/en/index.php",
    "S44E8" =>	"https://thevalleyofcode.com/php/",
    "UDCJ9" =>	"https://phpapprentice.com/",
    "ZZU1M" =>	"https://phptherightway.com/");

//Tarkistetaan, onko hash-muuttujalle annettu arvo isset-funktion avulla.
//Jos on, ohjataan selain avaimen mukaiseen url-osoitteeseen:
if (isset($_GET["hash"]) == true) {
  if (array_key_exists($_GET["hash"], $osoitteet)){
    $hash = $_GET["hash"];
    $url = $osoitteet["$hash"];
    header('Location: '. $url); 
  }
//Mikäli tunnisteelle on arvo, muttei se löydy taulukosta:
  else {
    echo "Väärä tunniste :(";  
  }
} 
//Mikäli tunnistetta ei ole lainkaan määritelty:
else {
    echo "Tämä on osoitteiden lyhentäjä. Odota maltilla, 
    tänne tulee tulevaisuudessa lisää toiminnallisuutta.";
}
  
exit;
?>