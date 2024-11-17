<?php
function crearMarco($texto) {
    $palabras = [];
    $palabra = '';
    $longitudMaxima = 0;
    
    for ($i = 0; $i < strlen($texto); $i++) {
        if ($texto[$i] == ' ') {
            if ($palabra != '') {
                $palabras[] = $palabra;
                if (strlen($palabra) > $longitudMaxima) {
                    $longitudMaxima = strlen($palabra);
                }
                $palabra = '';
            }
        } else {
            $palabra .= $texto[$i];
        }
    }

    if ($palabra != '') {
        $palabras[] = $palabra;
        if (strlen($palabra) > $longitudMaxima) {
            $longitudMaxima = strlen($palabra);
        }
    }
    
    $marco = '';
    
    for ($i = 0; $i < $longitudMaxima + 4; $i++) {
        $marco .= '*';
    }
    $marco .= "<br>";
    
    foreach ($palabras as $palabra) {
        $marco .= '* ' . $palabra;

        for ($i = 0; $i < $longitudMaxima - strlen($palabra); $i++) {
            $marco .= ' ';
        }
        $marco .= ' *' . "<br>";
    }
    
    for ($i = 0; $i < $longitudMaxima + 4; $i++) {
        $marco .= '*';
    }
    
    return $marco;
}



$texto = "¿Qué te parece el reto?";
echo crearMarco($texto);

?>