<?php

    function lyhytosoite ($pituus =5) {
      $tulos = $_POST['osoite'];
        $merkit = "2346789BCDFGHJKMPQRTVWXYabcdefghijklmnopqrstvxyz";
        $merkkeja = strlen($merkit);

        $tulos = "";
        for ($i = 1; $i <= $pituus; $i++) {
          $paikka = rand(1, $merkkeja - 1);
          $merkki = $merkit[$paikka];
          $tulos = $tulos . $merkki;
        }

        return $tulos;
    }

?>