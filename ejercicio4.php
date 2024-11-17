<?php

function esNumeroArmstrong($numero) {
    $digitos = str_split($numero);
    $cantidadDigitos = count($digitos);
    $suma = 0;

    foreach ($digitos as $digito) {
        $suma += pow((int)$digito, $cantidadDigitos);
    }

    return $suma === $numero;
}

$numero = 153;
if (esNumeroArmstrong($numero)) {
    echo "$numero es armstrong.";
} else {
    echo "$numero no es armstrong.";
}

?>