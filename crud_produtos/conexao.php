<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "loja";

$mysqli = new mysqli($host, $usuario, $senha, $db);

if($mysqli->connect_errno) {
    die("Falha na conexao com o banco de dados"); 
}

function formatar_data($data) {
    return implode('/', array_reverse(explode('-', $data)));
}