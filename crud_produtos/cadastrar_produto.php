<?php

$erro = false;

if(count($_POST) > 0) {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $validade = $_POST['validade'];
    $estoque = $_POST['estoque'];

    if(empty($nome)) {
        $erro = "Preencha o nome!";
    } else if(empty($quantidade)) {
        $erro = "Preecha a quantidade do produto!";
    }
    
    if(!empty($preco)) {
        $preco = str_replace(",",".",$preco);
        $preco = number_format($preco, 2, ',', '.');
    
    } else if(empty($preco)) {
        $erro = "Preecha o preço do produto!";
    }

    if(!empty($validade)) {
        $data_digitada = explode('/', $validade);
        if(count($data_digitada) == 3) {
            $validade = implode('-', array_reverse($data_digitada));
            // array_reverse = Inverte a data de 20/10/2010 para 2010/10/20
            // explode = Traforma a data em 2010, 10, 20
            // implode = para adiconar o '-' 2010-10-20
        } else {
            $erro = "A data deve seguir o padrão dia/mês/ano";
        }  
    }

    if($erro) {
        echo "ERRO: " . $erro;
    } else {
       
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Cadastrar Produto</title>
</head>
<body>
    <div class="container-formulario">
        <form method="POST" action="" class="formulario-cadastro">
            <div class="formulario-dados">
                <label>Nome:</label>
                <input name="nome" type="text">
            </div>
            <div class="formulario-dados">
                <label>Categoria:</label>
                <select name="categoria">
                    <option value="automotivo">Automotivo</option>
                    <option value="residencial">Residencial</option>
                    <option value="Roupas">Roupas</option>
                </select>
            </div>
            <div class="formulario-dados">
                <label>Quantidade:</label>
                <input placeholder="ex: 5 litros" name="quantidade" type="text">
            </div>
            <div class="formulario-dados">
                <label>Preço:</label>
                <input placeholder="00.00" name="preco" type="text">
            </div>
            <div class="formulario-dados">
                <label>Validade:</label>
                <input placeholder="00/00/0000" name="validade" type="text">
            </div>
            <div class="formulario-dados">
                <label>Estoque:</label>
                <input name="estoque" type="number">
            </div>
            <div class="btn-formulario-salvar">
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
    
</body>
</html>