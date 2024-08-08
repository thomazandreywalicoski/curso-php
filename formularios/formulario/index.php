<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário com PHP</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="formulario">
            <h1>Formulário com PHP</h1>

            <div class="c-input">
                <label for="nome" class="label">Nome</label>
                <input type="text" name="nome" class="input">
            
                <label for="nome" class="label">E-mail</label>
                <input type="text" name="email" class="input">
            
                <label for="nome" class="label">Website</label>
                <input type="text" name="website" class="input">
           
                <label for="nome" class="label">Comentário</label>
                <textarea name="comentario"></textarea>
                
                <label name="genero" for="nome" class="label">Gênero</label>
                <div>
                    <input name="genero" value="masculino" type="radio">Masculino
                    <input name="genero" value="feminino" type="radio">Feminino
                </div>
                <button name="enviar" type="submit" class="botao">Enviar</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="avisos">

            <?php

            if(isset($_POST['enviar'])) { // Verifica se a variável existe

                // NOME
                    
                if(empty($_POST['nome'])) { // Verifica se a variável nome é vazia
                    echo "<p class='obrigatorio'>Preencha o campo Nome</p>";
                    die();
                } else if(strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100) { // Verifica a quantidade de caractéres digitados
                    echo "<P class='obrigatorio'>Nome Inválido! Mín: 3 caractéres, Máx: 100 caractéres</p>";
                    die();        
                }

                // EMAIL

                if(empty($_POST['email'])) { // Verifica se a variável é vazia
                    echo "<P class='obrigatorio'>Preencha o campo E-mail</p>";
                    die();
                } else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Verifica se o E-mail é válido
                    echo "<P class='obrigatorio'>E-mail Inválido</p>";
                    die();
                }

                // URL

                if(!empty($_POST['website']) && !filter_var($_POST['website'], FILTER_VALIDATE_URL)) { // Verifica se a variável não está vazia e Verifica se a URL é válida
                    echo "<P class='obrigatorio'>URL Inválida</p>";
                    die();
                }

                // GÊNERO
                $genero = "Não selecionado";
                
                if(isset($_POST['genero'])) {
                    $genero = $_POST['genero'];
                    if($genero != "masculino" && $genero != "feminino") {
                        echo "<P class='obrigatorio'>Gênero Inválido</p>";
                        die(); 
                    }
                }
            }

            ?>
        </div>
        <div class="dados">
            <?php
                echo "<h1>Dados do Formulário</h1>";

                echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
                echo "<p><b>E-mail: </b>" . $_POST['email'] . "</p>";
                echo "<p><b>Website: </b>" . $_POST['website'] . "</p>";
                echo "<p><b>Comentário: </b>" . $_POST['comentario'] . "</p>";
                echo "<p><b>Gênero: </b>" . $genero. "</p>";
            ?>
        </div>
    </div>
</body>
</html>