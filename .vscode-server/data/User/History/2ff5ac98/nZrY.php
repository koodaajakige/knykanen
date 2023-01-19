<?php

    function lyhytosoite () {

        $merkit = "2346789BCDFGHJKMPQRTVWXY";
        $merkkejä = strlen($merkit);

        $tulos = "";
        for ($i = 1; $i <= 5; $i++) {
          $paikka = rand(0, $merkkeja-1);
        }

        return "JEEEEEE";
    }

    echo lyhytosoite();

?>