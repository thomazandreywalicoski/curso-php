<?php

function numeroPotencia($numero, $potencia) {

    $resultado = $numero;

    for($i = 1; $i < $potencia; $i++) {
        $resultado = $resultado * $numero;
    }    
    return $resultado;
}

echo numeroPotencia(10, 2);

?>