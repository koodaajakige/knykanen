<?php
$luku1 = (int)$_GET["luku1"];
$toisto = (int)$_GET["toisto"];

if ($toisto <= 10) {
    for ($i=0; $i < $toisto+1; $i++) {
    echo $luku1++ . "<br>";
    }
}
elseif ($toisto > 10) {
    echo "Huh-huh, onpas paljon toistoja! En nyt jaksa tulostaa niitä näytölle.";
}
else {
    echo "Toistojen lukumäärä on nolla, negatiivinen tai se ei ole kokonaisluku.";
}

?>