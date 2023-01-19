<?php
// Haetaan urlissa määritetty avain.
$hash = $_GET["nro"];  
// Luodaan taulukko, jossa on osoitteen indeksi ja sen nimi.
$osoitteet = array(
    "NG5TG" => "https://www.w3schools.com/php/",
    "R7E7L" =>	"https://www.php.net/manual/en/index.php",
    "S44E8" =>	"https://thevalleyofcode.com/php/",
    "UDCJ9" =>	"https://phpapprentice.com/",
    "ZZU1M" =>	"https://phptherightway.com/");

$url = $osoitteet["$hash"];

header('Location: '. $url); 


//header("Location: $url");
exit;
?>