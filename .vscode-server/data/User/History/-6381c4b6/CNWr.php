<?php
/* This will give an error. Note the output
 * above, which is before the header() call */

// Haetaan urlissa määritetty koodiavain.
$hash = $_GET["hash"]; 

// Luodaan taulukko, jossa on osoitteen indeksi ja sen nimi.
$osoitteet = array(
    "NG5TG" => "https://www.w3schools.com/php/",
    "R7E7L" =>	"https://www.php.net/manual/en/index.php",
    "S44E8" =>	"https://thevalleyofcode.com/php/",
    "UDCJ9" =>	"https://phpapprentice.com/",
    "ZZU1M" =>	"https://phptherightway.com/",
    "ara" =>	"https://www.iltalehti.fi/");


if (isset($_GET["hash"]) == true) {
    $url = $osoitteet["$hash"];
    header('Location: '. $url); 
  } 
else if (isset($hash) == false) {
    echo "Väärä tunniste :(";
}

else {
    echo "Tämä on osoitteiden lyhentäjä. Odota maltilla, 
    tänne tulee tulevaisuudessa lisää toiminnallisuutta.";  
  }
  
exit;

?>