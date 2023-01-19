<?php
$arvonta = array("paperi","kivi","sakset");
$tulos = rand(1,3); 
echo "Tietokone valitsi: " . $arvonta[$tulos-1] .".";
?>