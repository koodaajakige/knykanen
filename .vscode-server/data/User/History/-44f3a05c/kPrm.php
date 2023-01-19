<?php
$teksti = $_GET["teksti"];
$luku = $_GET["luku"];
$i=0;

if ($luku > 0 && $luku <= 10) {
    //$i=0;
    while ($i < $luku) {
    echo $teksti . "<br>";
    $i++;
    }
}

else if ($luku > 10) {
    echo "Huh-huh, onpas paljon toistoja! En nyt jaksa tulostaa niitä näytölle.";
}

else {
    echo "Toistojen lukumäärä on nolla tai negatiivinen luku.";
}

?>