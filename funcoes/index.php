<?php

function gerarNumeros($inicio, $fim) {
    $lista = [];
    if($fim <= $inicio) {
        echo "Não dá para continuar!";
    } else {
        for($k = $inicio; $k <= $fim; $k++) {
            $lista[] = $k;
        }
    }
    return $lista;
}

$variavel = gerarNumeros(10, 20);
var_dump($variavel);

function formatarPreco($preco) {
    return "R$ " . number_format($preco, 2, ',', '.');
}

echo "O preço é: " . formatarPreco(5.99);

?>