<?php
$teksti = $_GET["teksti"];
$luku = (int)$_GET["luku"];

if ($luku <= 10) {
    $i=0;
    while ($i < $luku) {
    echo $teksti . "<br>";
    $i++;
    }
}
else {
    echo "Huh-huh, onpas paljon toistoja! En nyt jaksa tulostaa niitä näytölle.";
}

$teksti = (int)$_GET["luku1"];
$luku = (int)$_GET["toisto"];

?>