<?php
$kruuna = "<img src='kruuna.png' alt=''>";
€klaava = "<img src='klaava.png' alt=''>";
$kolikko = array($kruuna,$klaava);
$arvonta = rand(1,2); 
echo $kolikko[$arvonta-1];

?>