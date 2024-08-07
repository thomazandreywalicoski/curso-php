<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1, label {
            font-family: Arial, Helvetica, sans-serif;
        }

        .formulario {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ccc;
            padding: 20px;
            border-radius: 20px;
            max-width: 350px;
        }

        .c-input {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input {
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            padding: 5px;
        }

        textarea {
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
        }

        .label {
            width: 100%;
        }

        .botao {
            margin-top: 25px;
            width: 100px;
            padding: 5px;
            border: none;
            border-radius: 20px;
            background-color: blue;
            color: white;
            font-weight: 600;
        }

        .dados {
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-top: 50px;
            background-color: #ccc;
            padding: 20px;
            border-radius: 20px;
            max-width: 350px;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="formulario">
            <h1>Formulário com PHP</h1>
            <div class="c-input">
                <label for="nome" class="label">Nome</label>
                <input required type="text" name="nome" class="input">
            
                <label for="nome" class="label">E-mail</label>
                <input required type="email" name="email" class="input">
            
                <label for="nome" class="label">Website</label>
                <input type="url" name="website" class="input">
           
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
        <div class="dados">
            <h1>Dados do Formulário</h1>

            <?php

            if(isset($_POST['enviar'])) {

                $genero = "Não selecionado";

                if(isset($_POST['genero'])) {
                    $genero = $_POST['genero'];
                }

                echo "<p>Nome: " . $_POST['nome'] . "</p>";
                echo "<p>E-mail: " . $_POST['email'] . "</p>";
                echo "<p>Website: " . $_POST['website'] . "</p>";
                echo "<p>Comentário: " . $_POST['comentario'] . "</p>";
                echo "<p>Gênero: " . $genero. "</p>";
            }
            
            ?>

        </div>
    </div>
</body>
</html>