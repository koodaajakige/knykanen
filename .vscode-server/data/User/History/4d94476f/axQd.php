<?php
$luku1 = $_GET["luku1"];
$luku2 = $_GET["luku2"];

echo '<p>Painoindeksi BMI on ' .  $luku1 / ($luku2*$luku2) . ".";
?>