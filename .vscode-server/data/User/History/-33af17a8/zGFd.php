<?php
$luku = (int)$_GET["luku"];


if ($luku == 0) {
    echo "Antamasi luku on nolla.";
}

elseif ($luku >= 6 and $luku <= 10) {
    echo "Antamasi luku on kuuden ja kymmenen väliltä.";
}

else {
    echo "Antamasi luku on negatiivinen tai yli kymmenen.";
}

?>

