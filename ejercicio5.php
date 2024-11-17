<?php
function convertir($dias, $horas, $minutos, $segundos) {
    $milisegundos = ($dias * 24 * 60 * 60 * 1000) +
                    ($horas * 60 * 60 * 1000) +
                    ($minutos * 60 * 1000) +
                    ($segundos * 1000);

    return $milisegundos;
}

$dias = 1;
$horas = 2;
$minutos = 30;
$segundos = 45;

$resultado = convertir($dias, $horas, $minutos, $segundos);
echo "el tiempo total en milisegundos es: $resultado ";


?>