<?php
function lisaa($luku) {
    $uusiluku = $luku + 5;
    return $uusiluku;
}

function vahenna($luku2, $luku) {
    $uusiluku = $luku2 - $luku;
    return $uusiluku;
}

function vaara() {
    $tuloste = "Väärä komento tai komentoa ei löydy";
    return $tuloste;
}

$komento = 8;
$luku = 8;
$luku2 = 6;

if ($komento == 1 or $komento == "lisää") {
    $uusi = lisaa($luku);
    echo "Nykyinen komento = lisää<br>";
    echo "Luku 1 = " . $luku."<br>";
    echo "Annettuun lukuun " . $luku . " lisättiin viisi ja se on nyt ". $uusi;
}

else if ($komento == 2 or $komento == "vähennä") {
    $uusi = vahenna($luku2, $luku);
    echo "Nykyinen komento = vähennä<br>";
    echo "Luku 1 = " . $luku."<br>";
    echo "Luku 2 = " . $luku2."<br>";
    echo "Ensimmäinen luku " . $luku . " vähennettiin toisesta luvusta " . $luku2 . " ja niiden erotus on ". $uusi;
}

else if ($komento == 3 or $komento == "satunnainen") {
    echo "Nykyinen komento = satunnainen<br>";
    echo "Satunnainen luku: " . rand();
}

else {
    echo vaara();
}

?>