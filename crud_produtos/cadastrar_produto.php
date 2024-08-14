<?php

if(count($_POST) > 0) {

    include('conexao.php');

    $erro = false;

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
        $sql_code = "INSERT INTO produtos (nome, categoria, quantidade, preco, validade, estoque) VALUES ('$nome', '$categoria', '$quantidade', '$preco', '$validade', '$estoque')";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo "Produto cadastrado com sucesso!";
            unset($_POST); // Limpa o formulário se o produto foi cadastrado
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/style.css">
    <title>Cadastrar Produto</title>
</head>
<body>
    <div class="container-formulario">
        <form method="POST" action="" class="formulario-cadastro">
            <div class="formulario-dados">
                <label>Nome:</label>
                <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome'] ?>" name="nome" type="text">
            </div>
            <div class="formulario-dados">
                <label>Categoria:</label>
                <select name="categoria">
                    <option value="automotivo">Automotivo</option>
                    <option value="residencial">Residencial</option>
                    <option value="roupas">Roupas</option>
                </select>
            </div>
            <div class="formulario-dados">
                <label>Quantidade:</label>
                <input value="<?php if(isset($_POST['quantidade'])) echo $_POST['quantidade'] ?>" placeholder="ex: 5 litros" name="quantidade" type="text">
            </div>
            <div class="formulario-dados">
                <label>Preço:</label>
                <input value="<?php if(isset($_POST['preco'])) echo $_POST['preco'] ?>" placeholder="ex: 1000,00" name="preco" type="text">
            </div>
            <div class="formulario-dados">
                <label>Validade:</label>
                <input value="<?php if(isset($_POST['validade'])) echo $_POST['validade'] ?>" placeholder="00/00/0000" name="validade" type="text">
            </div>
            <div class="formulario-dados">
                <label>Estoque:</label>
                <input value="<?php if(isset($_POST['estoque'])) echo $_POST['estoque'] ?>" name="estoque" type="number">
            </div>
            <div class="btn-formulario-salvar">
                <button type="submit">Salvar</button>
            </div>
            <a href="produtos.php">Ver Produtos Cadastrados</a>
        </form>
    </div>
    
</body>
</html>