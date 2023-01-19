<?php

    function lyhytosoite () {

        $merkit = "2346789BCDFGHJKMPQRTVWXY";
        $merkkejä = strlen($merkit);

        $tulos = "";
        for ($i = 1; $i <= 5; $i++) {
          $paikka = rand(1, $merkkeja-1);
          $merkki = $merkit[$paikka];
          $tulos = $tulos . $merkki;
        }

        return $tulos;
    }

    echo lyhytosoite();

?>