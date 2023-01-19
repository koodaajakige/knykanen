<?php
/* This will give an error. Note the output
 * above, which is before the header() call */

$nro = $_GET["nro"];

$osoitteet = array(
"NG5TG" => "https://www.w3schools.com/php/",
"R7E7L" =>	"https://www.php.net/manual/en/index.php",
"S44E8" =>	"https://thevalleyofcode.com/php/",
"UDCJ9" =>	"https://phpapprentice.com/",
"ZZU1M" =>	"https://phptherightway.com/");

$hash = $osoitteet[$nro];



header('Location: '. $hash); 


   
exit;

?>