<?php

function numeroPotencia($numero, $potencia) {

    for($i = 1; $i < $potencia; $i++) {
        $resultado = $numero  * $numero;
    }    
    return $resultado;
}

echo numeroPotencia(10, 2);

?>