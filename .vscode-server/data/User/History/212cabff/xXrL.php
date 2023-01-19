<?php
$kolikko = array("kruuna", "klaava", "kruuna", "klaava","kruuna", "klaava");
$noppa = rand(1,6); 
echo "Heiton tulos on " . $kolikko[$noppa-1] .".";
?>