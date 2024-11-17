<?php
function obtenerParametros($url) {
    $parametros = [];
    $enParametros = false;
    $clave = '';
    $valor = '';
    $recolectandoClave = true;
    
    for ($i = 0; $i < strlen($url); $i++) {

        if ($url[$i] == '?') {
            $enParametros = true;
            continue;
        }
        
        if ($enParametros) {
            if ($url[$i] == '=') {
                $recolectandoClave = false;
                continue;
            }
            
            if ($url[$i] == '&') {

                $parametros[$clave] = $valor;
                $clave = '';
                $valor = '';
                $recolectandoClave = true;
                continue;
            }
            
            if ($recolectandoClave) {
                $clave .= $url[$i];
            } else {
                $valor .= $url[$i];
            }
        }
    }
    
    if ($clave != '') {
        $parametros[$clave] = $valor;
    }
    
    return $parametros;
}

$url = "https://retosdeprogramacion.com?year=2023&challenge=8";
print_r(obtenerParametros($url));


?>