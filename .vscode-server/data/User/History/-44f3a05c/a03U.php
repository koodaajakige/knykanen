<?php
$teksti = $_GET["teksti"];
$luku = $_GET["luku"];

if ($luku =< 10) {
    $i=0;
    while ($i < $luku) {
    echo $teksti . "<br>";
    $i++;
    }

?>