<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/pagina_administracao/pagina_administracao.css">
    <link rel="stylesheet" href="./estilo/modal_cadastrar_editat_deletar_produto/estilo_modal.css">
    <title>Painel de Administração</title>  
</head>
<body>
    
<!-------------------------------------------------------------------------------------------------->
<!--                                   MODAL CADASTRAR PRODUTO                                    -->
<!-------------------------------------------------------------------------------------------------->


    <div class="fundo-modal">  
        <div class="modal-cadastrar-produto">
            <div onclick="fecharCadastrarProdutos()" class="btn-fechar-modal-cadastrar-produto">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </div> <!-- .btn-fechar-modal-cadastrar-produto -->
                   
            <form enctype="multipart/form-data" method="POST" action="" class="formulario-cadastro">
                <input type="hidden" name="tipo_formulario" value="cadastrar">

                <div class="header-formulario-cadastrar-produto">
                    <div class="titulo-formulario-cadastrar-produto">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#008702">
                            <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/>
                        </svg>
                        <h1>Cadastrar produto</h1>
                    </div>
                    <p>Preencha todos os dados do formulário abaixo</p>
                </div> <!-- .header-formulario-cadastrar-produto -->

                <div class="formulario-dados">
                    <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome'] ?>" name="nome" type="text" id="nome-input" class="input-formulario">
                    <label for="nome-input">Nome</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <div class="formulario-dados-categoria">
                        <p>Categoria</p>
                        <select name="categoria" id="categoria-produtos">
                            <option value="automotivo">Automotivo</option>
                            <option value="residencial">Residencial</option>
                            <option value="roupas">Roupas</option>
                        </select>
                    </div>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <input value="<?php if(isset($_POST['quantidade'])) echo $_POST['quantidade'] ?>" name="quantidade" type="text" id="quantidade-input" class="input-formulario">
                    <label for="quantidade-input">Quantidade</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <input value="<?php if(isset($_POST['preco'])) echo $_POST['preco'] ?>" name="preco" type="text" id="preco-input" class="input-formulario">
                    <label for="preco-input">Preço</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados-img">
                    <p>Imagem</p>
                    <input type="file" id="imagem-input">
                </div> <!-- .formulario-dados-img -->

                <div class="formulario-dados">
                    <input value="<?php if(isset($_POST['validade'])) echo $_POST['validade'] ?>" name="validade" type="text" id="validade-input" class="input-formulario">
                    <label for="validade-input">Validade</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <input value="<?php if(isset($_POST['estoque'])) echo $_POST['estoque'] ?>" name="estoque" type="number" id="estoque-input" class="input-formulario">
                    <label for="estoque-input">Estoque</label>
                </div> <!-- .formulario-dados -->

                <div class="btn-formulario-salvar-c">
                    <button class="btn-formulario-salvar" type="submit" name="cadastrar" id="cadastrar">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#008702">
                            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/>
                        </svg>
                        <p>Cadastrar</p>
                    </button>
                </div> <!-- .btn-formulario-salvar-c -->


                <!-------------------------------------------------------------------------------------------------->
                <!--              VERIFICAÇÃO MODAL CADASTRAR PRODUTO E INSERÇÃO NO BANCO DE DADOS                -->
                <!-------------------------------------------------------------------------------------------------->


                <?php

                    $aviso_erro = false;
                    $aviso_sucesso = false;


                    if(count($_POST) > 0) {

                        include_once('conexao.php');

                        $nome = $_POST['nome'];
                        $categoria = $_POST['categoria'];
                        $quantidade = $_POST['quantidade'];
                        $preco = $_POST['preco'];
                        $validade = $_POST['validade'];
                        $estoque = $_POST['estoque'];
                        $tipo_formulario = $_POST['tipo_formulario'];

                        if(empty($nome)) {
                            $aviso_erro = 'Preencha o nome!';                    
                        } else if(empty($quantidade)) {
                            $aviso_erro = 'Preecha a quantidade do produto!';     
                        } else if(empty($preco)) {
                            $aviso_erro = 'Preecha o preço do produto!';   
                        }

                        if(!empty($preco)) {
                            $preco = str_replace(",",".",$preco);
                        } 

                        if(!empty($validade)) {
                            $data_digitada = explode('/', $validade);
                            if(count($data_digitada) == 3) {
                                $validade = implode('-', array_reverse($data_digitada));
                                // array_reverse = Inverte a data de 20/10/2010 para 2010/10/20
                                // explode = Traforma a data em 2010, 10, 20
                                // implode = para adiconar o '-' 2010-10-20
                            } else {
                                $aviso_erro = 'A data deve seguir o padrão dia/mês/ano';
                            }
                        }

                        if($tipo_formulario == 'cadastrar' && $aviso_erro == false){
                            $sql_code = "INSERT INTO produtos (nome, categoria, quantidade, preco, validade, estoque) VALUES ('$nome', '$categoria', '$quantidade', '$preco', '$validade', '$estoque')";
                            $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);

                            if($deu_certo) {
                                $aviso_sucesso = 'Produto cadastrado com sucesso!';    
                            }
                        }
                    }
                ?>
                

            </form> <!-- .formulario-cadastro -->
        </div> <!-- .modal-cadastrar-produto -->
    </div> <!-- .fundo-modal -->


    <!-------------------------------------------------------------------------------------------------->
    <!--               MENSAGEM DE ERRO OU SUCESSO FORMULÁRIO DE CADASTRO DE PRODUTOS                 -->
    <!-------------------------------------------------------------------------------------------------->
    
    
    <?php

   
        if(isset($_POST['cadastrar']) && $aviso_erro) {
            
            include_once('conexao.php'); ?>

            <div id="modal-aviso" class="fundo-modal-aviso">
                <div class="modal-aviso">
                    <div onclick="fecharAviso()" class="btn-fechar-modal-aviso">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                    </div>

                    <p class="aviso-erro"> <?php echo $aviso_erro ?> </p>

                </div> <!-- modal-aviso -->
            </div> <!-- .fundo-modal-aviso -->

            <?php
        }

        if(isset($_POST['cadastrar']) && $aviso_sucesso) {
            

            include_once('conexao.php'); ?>


            <div id="modal-aviso" class="fundo-modal-aviso">
                <div class="modal-aviso">
                    <div onclick="fecharAviso()" class="btn-fechar-modal-aviso">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                    </div>

                    <p class="aviso-sucesso"> <?php echo $aviso_sucesso ?> </p>

                </div> <!-- modal-aviso -->
            </div> <!-- .fundo-modal-aviso -->

            <?php
        }
    
    ?>
     

<!-------------------------------------------------------------------------------------------------->
<!--                  PAINEL DE ADMINISTRAÇÃO E TABELA DE PRODUTOS CADASTRADOS                    -->
<!-------------------------------------------------------------------------------------------------->  
    

    <div class="container-produtos-cadastrados">

        <div class="titulo-painel-administracao">
            <h1>Painel de Administração</h1>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                <path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
        </div> <!-- .titulo-painel-administracao -->

        <div class="painel-administracao">
            <div class="painel-administracao-cadastro">
                <div onclick="abrirCadastrarProdutos()" class="btn-cadastrar">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/>
                    </svg>
                    <p>Cadastrar Produto</p>
                </div> <!-- .btn-cadastrar -->

                <div class="pesquisar-produto-cadastrado">
                    <input type="search" placeholder="Procurar produto cadastrado">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                        <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
                    </svg>
                </div> <!-- .pesquisar-produto-cadastrado -->

            </div> <!-- .painel-administracao-cadastro -->

            <div>
                <a id="atualizar" href="produtos.php" class="atualizar-tabela">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M204-318q-22-38-33-78t-11-82q0-134 93-228t227-94h7l-64-64 56-56 160 160-160 160-56-56 64-64h-7q-100 0-170 70.5T240-478q0 26 6 51t18 49l-60 60ZM481-40 321-200l160-160 56 56-64 64h7q100 0 170-70.5T720-482q0-26-6-51t-18-49l60-60q22 38 33 78t11 82q0 134-93 228t-227 94h-7l64 64-56 56Z"/>
                    </svg>
                    <p>Atualizar</p>
                </a>

            </div> 
        </div> <!-- .painel-administracao -->

        <div class="titulo-tabela">
            <h1>Produtos cadastrados</h1>
        </div> <!-- .titulo-tabela -->
        
        
        <div class="tabela-produtos-cadastrados">
            <table>
                <thead>
                    <tr class="cabecalho-tabela">
                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg class="icone-coluna" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/>
                                </svg>
                                <p>ID</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Zm140-360q25 0 42.5-17.5T400-620q0-25-17.5-42.5T340-680q-25 0-42.5 17.5T280-620q0 25 17.5 42.5T340-560Z"/>
                                </svg>
                                <p>Img</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z"/>
                                </svg>
                                <p>Nome</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M400-240v-80h160v80H400ZM240-440v-80h480v80H240ZM120-640v-80h720v80H120Z"/>
                                </svg>
                                <p>Categoria</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M480-400 40-640l440-240 440 240-440 240Zm0 160L63-467l84-46 333 182 333-182 84 46-417 227Zm0 160L63-307l84-46 333 182 333-182 84 46L480-80Zm0-411 273-149-273-149-273 149 273 149Zm0-149Z"/>
                                </svg>
                                <p>Quantidade</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                                </svg>
                                <p>Preço</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
                                </svg>
                                <p>Validade</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M320-280q17 0 28.5-11.5T360-320q0-17-11.5-28.5T320-360q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160q17 0 28.5-11.5T360-480q0-17-11.5-28.5T320-520q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160q17 0 28.5-11.5T360-640q0-17-11.5-28.5T320-680q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Zm120 320h240v-80H440v80Zm0-160h240v-80H440v80Zm0-160h240v-80H440v80ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
                                </svg>
                                <p>Estoque</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->
                        
                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/>
                                </svg>
                                <p>Ações</p>
                            </div> <!-- .informacao-tabela -->
                        </th> <!-- .coluna-tabela -->

                    </tr> <!-- .cabecalho-tabela -->
                </thead>


                <!-------------------------------------------------------------------------------------------------->
                <!--                 FORMATAÇÃO DO VALORES E EXIBIÇÃO DOS PRODUTOS CADASTRADOS                    -->
                <!-------------------------------------------------------------------------------------------------->  

                <tbody>

                    <?php

                        include_once('conexao.php');

                        $sql_produtos = "SELECT * FROM produtos";
                        $query_produtos = $mysqli->query($sql_produtos) or die($mysqli->error);

                        $num_produtos = $query_produtos->num_rows; // Verifica quantos produtos tem cadastrados

                        ?>

                        <?php

                        if($num_produtos == 0) { ?>
                            <tr>
                                <td colspan="8" class="aviso-nenhum-produto-cadastrado">Nenhum produto cadastrado até o momento</td>
                            </tr>

                        <?php

                        } else { 
                            while($produto = $query_produtos->fetch_assoc()) {

                                $preco = "";
                                if(!empty($produto['preco'])) {
                                    $preco = number_format($produto['preco'], 2, ',', '.');
                                }

                                $validade = "Não Informado";
                                if(!empty($produto['validade'])) {
                                    $validade = implode('/', array_reverse(explode('-',$produto['validade'])));  
                                } ?>

                                <tr class="corpo-tabela">
                                
                                    <div class="dados-produto">

                                        <td class="dado-produto dado-produto-centralizado">
                                            <?php echo $produto['id'] ?>
                                        </td>

                                        <td class="dado-produto dado-produto-centralizado">
                                            <!--<?php echo $produto['imagem'] ?>-->
                                        </td>

                                        <td class="dado-produto">
                                            <?php echo $produto['nome'] ?>
                                        </td>

                                        <td class="dado-produto">
                                            <?php echo $produto['categoria'] ?>
                                        </td>

                                        <td class="dado-produto">
                                            <?php echo $produto['quantidade'] ?>
                                        </td>

                                        <td class="dado-produto">
                                            <?php echo "R$" . $preco ?>
                                        </td>

                                        <td class="dado-produto dado-produto-centralizado">
                                            <?php echo $validade ?>
                                        </td>

                                        <td class="dado-produto dado-produto-centralizado">
                                            <?php echo $produto['estoque'] ?>
                                        </td>

                                        <td class="dado-produto dado-produto-centralizado">
                                            
                                            <div class="acoes-tabela">
                                                <a href="produtos.php?id=<?php echo $produto['id'] ?>#modal">
                                                    <div id="abrirModalDiv" onclick="abrirEditarProdutos()" class="editar-produto" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                                                        </svg>
                                                    </div> <!-- .editar-produto -->
                                                </a>                                             
                                                    
                                                <a href="produtos.php?id=<?php echo $produto['id'] ?>#modal"> 
                                                    <div class="deletar-produto" onclick="abrirDeletarProdutos()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                                        </svg>
                                                    </div> <!-- .deletar-produto -->
                                                </a>

                                            </div> <!-- .acoes-tabela -->

                                        </td>

                                    </div> <!-- .dados-produto -->

                                </tr> <!-- .corpo-tabela -->

                                <?php 
                            }

                        } ?>  

                </tbody>
            </table>

        </div> <!-- .tabela-produtos-cadastrados -->
    </div> <!-- .container-produtos-cadastrados -->


            
<!-------------------------------------------------------------------------------------------------->
<!--                                   MODAL EDITAR PRODUTO                                       -->
<!-------------------------------------------------------------------------------------------------->


    <div class="fundo-modal-editar" id="modal-editar">
        <div class="modal-cadastrar-produto">

            <div onclick="fecharEditarProdutos()" class="btn-fechar-modal-editar-produto">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </div> <!-- .btn-fechar-modal-editar-produto -->

            <!-------------------------------------------------------------------------------------------------->
            <!--              VERIFICAÇÃO MODAL EDITAR PRODUTO E ATUALIZAÇÃO NO BANCO DE DADOS                -->
            <!-------------------------------------------------------------------------------------------------->

            <?php

                $aviso_erro = false;
                $aviso_sucesso = false;

                include_once('conexao.php');
                $id = intval($_GET['id']);

                if(count($_POST) > 0) {

                    $nome = $_POST['nome'];
                    $categoria = $_POST['categoria'];
                    $quantidade = $_POST['quantidade'];
                    $preco = $_POST['preco'];
                    $validade = $_POST['validade'];
                    $estoque = $_POST['estoque'];
                    $tipo_formulario = $_POST['tipo_formulario'];

                    if(empty($nome)) {
                        $aviso_erro = 'O nome não pode ser vazio!';                    
                    } else if(empty($quantidade)) {
                        $aviso_erro = 'Preecha a quantidade do produto!';     
                    } else if(empty($preco)) {
                        $aviso_erro = 'O preço é obrigatório!';    
                    }

                    if(!empty($preco)) {
                        $preco = str_replace(",",".",$preco);
                    } 

                    if(!empty($validade)) {
                        $data_digitada = explode('/', $validade);
                        if(count($data_digitada) == 3) {
                            $validade = implode('-', array_reverse($data_digitada));
                            // array_reverse = Inverte a data de 20/10/2010 para 2010/10/20
                            // explode = Traforma a data em 2010, 10, 20
                            // implode = para adiconar o '-' 2010-10-20
                        } else {
                            $aviso_erro = 'A data deve seguir o padrão dia/mês/ano';
                        }
                    }
                
                    if($tipo_formulario == 'editar' && $aviso_erro == false) {
                        $sql_code = "UPDATE produtos SET nome = '$nome', categoria = '$categoria', quantidade = '$quantidade', preco = '$preco', validade = '$validade', estoque = '$estoque' WHERE id = '$id'";
                        
                        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);

                        if($deu_certo) {
                            $aviso_sucesso = 'Produto atualizado com sucesso!';  
                        }
                    }
                }

                $sql_produto = "SELECT * FROM produtos WHERE id = '$id'";
                $query_produto = $mysqli->query($sql_produto) or die($mysqli->error);
                $produto = $query_produto->fetch_assoc();

            ?>
            
            <form method="POST" action="" class="formulario-cadastro">
                <input type="hidden" name="tipo_formulario" value="editar">

                <div class="header-formulario-cadastrar-produto">
                    <div class="titulo-formulario-editar-produto">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#a39800">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                        </svg>
                        <h1>Editar produto</h1>
                    </div> <!-- .titulo-formulario-editar-produto -->
                    <p>Edite todos os dados necessários do formulário</p>
                </div> <!-- .header-formulario-cadastrar-produto -->

                <div class="formulario-dados">
                    <input value="<?php echo $produto['nome'] ?>" name="nome" type="text" id="nome-input-editar" class="input-formulario">
                    <label for="nome-input-editar">Nome</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <div class="formulario-dados-categoria">
                        <p>Categoria</p>
                        <select name="categoria" id="categoria-produtos">
                            <option value="automotivo">Automotivo</option>
                            <option value="residencial">Residencial</option>
                            <option value="roupas">Roupas</option>
                        </select>
                    </div>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <input value="<?php echo $produto['quantidade'] ?>" name="quantidade" type="text" id="quantidade-input-editar" class="input-formulario">
                    <label for="quantidade-input-editar">Quantidade</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <input value="<?php echo $produto['preco'] ?>" name="preco" type="text" id="preco-input-editar" class="input-formulario">
                    <label for="preco-input-editar">Preço</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados-img">
                    <p>Imagem</p>
                    <input type="file" id="imagem-input-editar">
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <input value="<?php echo formatar_data($produto['validade']) ?>" name="validade" type="text" id="validade-input-editar" class="input-formulario">
                    <label for="validade-input-editar">Validade</label>
                </div> <!-- .formulario-dados -->

                <div class="formulario-dados">
                    <input value="<?php echo $produto['estoque'] ?>" name="estoque" type="number" id="estoque-input-editar" class="input-formulario">
                    <label for="estoque-input-editar">Estoque</label>
                </div> <!-- .formulario-dados -->

                <div class="btn-formulario-salvar-c">
                    <button id="salvar-edicao" class="btn-formulario-salvar" type="submit" name="editar">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#008702">
                            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/>
                        </svg>
                        <p>Salvar</p>
                    </button> <!-- .btn-formulario-salvar -->
                </div> <!-- .formulario-dados -->

            </form> <!-- .formulario-cadastro -->
        
        </div> <!-- .modal-cadastrar-produto -->
    </div> <!-- .fundo-modal-editar -->


    <!-------------------------------------------------------------------------------------------------->
    <!--                MENSAGEM DE ERRO OU SUCESSO FORMULÁRIO DE EDIÇÃO DE PRODUTOS                  -->
    <!-------------------------------------------------------------------------------------------------->
    

    <?php

        if(isset($_POST['editar']) && $aviso_erro) {
            
            include_once('conexao.php'); ?>

            <div id="modal-aviso" class="fundo-modal-aviso">
                <div class="modal-aviso">
                    <div onclick="fecharAviso()" class="btn-fechar-modal-aviso">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                    </div>

                    <p class="aviso-erro"> <?php echo $aviso_erro ?> </p>

                </div> <!-- .modal-aviso -->
            </div> <!-- .fundo-modal-aviso -->

            <?php
        }

        if(isset($_POST['editar']) && $aviso_sucesso) {
            
            include_once('conexao.php'); ?>

            <div id="modal-aviso" class="fundo-modal-aviso">
                <div class="modal-aviso">
                    <div onclick="fecharAviso()" class="btn-fechar-modal-aviso">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                    </div>

                    <p class="aviso-sucesso"> <?php echo $aviso_sucesso ?> </p>

                </div> <!-- .modal-aviso -->
            </div> <!-- .fundo-modal-aviso -->

            <?php
        }

    ?>

<!-------------------------------------------------------------------------------------------------->
<!--                                   MODAL DELETAR PRODUTO                                    -->
<!-------------------------------------------------------------------------------------------------->


    <div class="fundo-modal-deletar" id="modal-deletar">
        <div class="modal-cadastrar-produto">
            <div onclick="fecharDeletarProdutos()" class="btn-fechar-modal-deletar-produto">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </div>

            <?php

                if(isset($_POST['deletar'])) {

                    include_once('conexao.php');
                    $id = intval($_GET['id']);

                    if($tipo_formulario == 'deletar') {
                        $sql_code = "DELETE FROM produtos WHERE id = '$id'";
                        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
                    
                        if($deu_certo) {

                            $aviso_sucesso = 'Produto deletado com sucesso!';
                            
                        }
                    }
                }
            
            ?>

            <form method="post" id="deletar" name="deletar">
                <input type="hidden" name="tipo_formulario" value="deletar">
                <div class="header-formulario-cadastrar-produto">
                    <div class="titulo-formulario-deletar-produto">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#a30000">
                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                        </svg>
                        <h1>Deletar produto</h1>
                    </div> <!-- .titulo-formulario-deletar-produto -->
                    <p>Deseja realmente DELETAR o produto?</p>
                </div> <!-- .header-formulario-cadastrar-produto -->

                <div class="btn-deletar-c">
                    <a id="nao-deletar" href="produtos.php" class="btn-nao-deletar">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#008702">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                        <p>Não</p>
                    </a> <!-- .btn-nao-deletar -->

                    <button id="deletar-produto" name="deletar" value="1" class="btn-deletar" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#a30000">
                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                        </svg>
                        <p>Sim</p>
                    </button> <!-- .btn-deletar -->
                </div> <!-- .btn-deletar-c -->
            </form>

        </div> <!-- .modal-cadastrar-produto -->
    </div> <!-- .fundo-modal-deletar -->

    <!-------------------------------------------------------------------------------------------------->
    <!--                MENSAGEM DE ERRO OU SUCESSO AO DELETAR PRODUTOS                  -->
    <!-------------------------------------------------------------------------------------------------->

        
    <?php 

        if(isset($_POST['deletar']) && $aviso_sucesso) {
                        
            include_once('conexao.php'); ?>

            <div id="modal-aviso" class="fundo-modal-aviso">
                <div class="modal-aviso">
                    <div onclick="fecharAviso()" class="btn-fechar-modal-aviso">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                    </div>

                    <p class="aviso-sucesso"> <?php echo $aviso_sucesso ?> </p>

                </div> <!-- .modal-aviso -->
            </div> <!-- .fundo-modal-aviso -->

            <?php
        }

    ?>
     

<script src="script/abrircadastrarprodutos.js"></script>

</body>
</html>