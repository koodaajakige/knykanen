<?php
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