<?php
$teksti = $_GET["teksti"];
$luku = (int)$_GET["luku"];

if ($toisto > 0 && $toisto <= 10) {
    $i=0;
    while ($i < $luku) {
    echo $teksti . "<br>";
    $i++;
    }
}
else if ($toisto > 10) {
    echo "Huh-huh, onpas paljon toistoja! En nyt jaksa tulostaa niitä näytölle.";
}
else {
    echo "Toistojen lukumäärä on nolla, negatiivinen tai se ei ole kokonaisluku.";
}

?>