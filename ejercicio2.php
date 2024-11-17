<?php

$palabra="hola mundo";
$tamaño=strlen($palabra);
$rev='';

for ($i=$tamaño-1; $i>=0 ; $i--) { 
    $rev.=$palabra[$i];
}
 echo $rev;
?>