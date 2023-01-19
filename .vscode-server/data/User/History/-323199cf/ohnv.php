<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$numero3 = $_GET["numero3"];
$summa = $numero1 + $numero2 + $numero3;

echo 'Luvut: ' . $numero1 . ", " . $numero2 . " ja " . $numero3;
echo 'Summa: ' . $summa;
echo 'Keskiarvo: ' . $summa/3;
?>