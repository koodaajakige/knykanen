<?php
$teksti = $_GET["teksti"];
$luku = (float)$_GET["luku"];

if ($luku > 0 && $luku <= 10) {
    $i=0;
    while ($i < $luku) {
    echo $teksti . "<br>";
    $i++;
    }
}
else if ($luku > 10) {
    echo "Huh-huh, onpas paljon toistoja! En nyt jaksa tulostaa niitä näytölle.";
}
else {
    echo "Toistojen lukumäärä on nolla, negatiivinen tai se ei ole kokonaisluku.";
}

?>