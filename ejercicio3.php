<?php

function eliminar($srt1, $str2) {
    $salida1 = '';
    $salida2 = '';

    
    for ($i = 0; $i < strlen($srt1); $i++) {
        $encontrado = false;
        for ($j = 0; $j < strlen($str2); $j++) {
            if ($srt1[$i] === $str2[$j]) {
                $encontrado = true;
                break;
            }
        }
        if (!$encontrado) {
            $salida1 .= $srt1[$i];
        }
    }

   
    for ($j = 0; $j < strlen($str2); $j++) {
        $encontrado = false;
        for ($i = 0; $i < strlen($srt1); $i++) {
            if ($str2[$j] === $srt1[$i]) {
                $encontrado = true;
                break;
            }
        }
        if (!$encontrado) {
            $salida2 .= $str2[$j];
        }
    }

    
    echo "primera: " . $salida1 . "<br>";
    echo "segunda: " . $salida2 . "<br>";
}


eliminar("potaxie", "tilin");

?>