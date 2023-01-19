<?php
$teksti = $_GET["teksti"];
$luku = (int)$_GET["luku"];

if ($luku < 10) {
    $i=0;
    while ($i < $luku) {
    echo $teksti . "<br>";
    $i++;
    }

?>