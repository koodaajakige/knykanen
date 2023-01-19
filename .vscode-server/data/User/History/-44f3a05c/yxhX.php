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

$luku1 = (int)$_GET["luku1"];
$toisto = (int)$_GET["toisto"];

if ($toisto <= 10) {
    for ($i=0; $i < $toisto; $i++) {
    echo $luku1++ . "<br>";
    }
}
else {
    echo "Huh-huh, onpas paljon toistoja! En nyt jaksa tulostaa niitä näytölle.";
}

?>