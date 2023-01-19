<?php
$paperi = <img src='paperi.png' alt=''>;
$kivi = <img src='kivi.png' alt=''>;
$sakset = <img src='sakset.png' alt=''>;

$arvonta = array("$paperi", "$kivi", "$sakset");
$tulos = rand(1,3); 
echo $arvonta[$tulos-1];
?>