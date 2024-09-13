<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/pagina_administracao/pagina_administracao.css">
    <link rel="stylesheet" href="./estilo/modal_cadastrar_editar_deletar_produto/estilo_modal.css">
    <link rel="stylesheet" href="./estilo/backup_banco_de_dados/backup.css">
    <link rel="stylesheet" href="./estilo/banners/banners.css">
    <link rel="stylesheet" href="./responsividade/dashboard.css">
    <link rel="stylesheet" href="./responsividade/painel_de_controle.css">
    <link rel="stylesheet" href="./responsividade/tabela_produtos.css">
    <link rel="stylesheet" href="./responsividade/paginacao.css">
    <link rel="stylesheet" href="./responsividade_modal/modal_cadastrar.css">
    <link rel="stylesheet" href="./responsividade_modal/modal_lucros.css">
    <link rel="stylesheet" href="./responsividade_modal/modal_visualizar.css">
    <link rel="stylesheet" href="./responsividade_modal/modal_editar.css">
    <link rel="stylesheet" href="./responsividade_modal/modal_deletar.css">
    <title>Painel de Administração</title>  
</head>
<body>

    <!-------------------------------------------------------------------------------------------------->
    <!--                                           MENU                                               -->
    <!-------------------------------------------------------------------------------------------------->

    <div class="menu-administrador-c">
        <div class="menu-administrador">

            <div class="menu-opcoes-c">
                <div class="menu-opcoes">

                    <a href="produtos.php?pagina=1" class="menu-opcoes-opcao" id="inicio">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
                        </svg>
                        <p>Início</p>
                    </a>
                    
                    <a href="#" class="menu-opcoes-opcao">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M160-80v-440H80v-240h208q-5-9-6.5-19t-1.5-21q0-50 35-85t85-35q23 0 43 8.5t37 23.5q17-16 37-24t43-8q50 0 85 35t35 85q0 11-2 20.5t-6 19.5h208v240h-80v440H160Zm400-760q-17 0-28.5 11.5T520-800q0 17 11.5 28.5T560-760q17 0 28.5-11.5T600-800q0-17-11.5-28.5T560-840Zm-200 40q0 17 11.5 28.5T400-760q17 0 28.5-11.5T440-800q0-17-11.5-28.5T400-840q-17 0-28.5 11.5T360-800ZM160-680v80h280v-80H160Zm280 520v-360H240v360h200Zm80 0h200v-360H520v360Zm280-440v-80H520v80h280Z"/>
                        </svg>
                        <p>Promoções</p>
                    </a>

                    <a href="produtos.php?banners" class="menu-opcoes-opcao">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M160-240v-320 320Zm0 80q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800l80 160h120l-80-160h80l80 160h120l-80-160h80l80 160h120l-80-160h120q33 0 56.5 23.5T880-720v160H160v320h320v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z"/>
                        </svg>
                        <p>Banners</p>
                    </a>

                    <a href="produtos.php?backup" class="menu-opcoes-opcao" id="backup">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M260-160q-91 0-155.5-63T40-377q0-78 47-139t123-78q25-92 100-149t170-57q117 0 198.5 81.5T760-520q69 8 114.5 59.5T920-340q0 75-52.5 127.5T740-160H520q-33 0-56.5-23.5T440-240v-206l-64 62-56-56 160-160 160 160-56 56-64-62v206h220q42 0 71-29t29-71q0-42-29-71t-71-29h-60v-80q0-83-58.5-141.5T480-720q-83 0-141.5 58.5T280-520h-20q-58 0-99 41t-41 99q0 58 41 99t99 41h100v80H260Zm220-280Z"/>
                        </svg>
                        <p>Backup</p>
                    </a>

                </div>
            </div>

            <div class="perfil-usuario">
                <div class="perfil-usuario-nome">
                    <p>Bem Estar</p>
                </div>
                <a href="#" class="perfil-usuario-img">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>


    <!-------------------------------------------------------------------------------------------------->
    <!--                                       MENU MOBILE                                            -->
    <!-------------------------------------------------------------------------------------------------->


    
    <div class="container-menu-mobile">
        <input type="checkbox" id="check">
        <label for="check" class="menu-hamburguer">
            <div class="barra barra1"></div>
            <div class="barra barra2"></div>
            <div class="barra barra3"></div>
        </label>
        <nav class="navegacao">
            <a href="#home">Início</a>
            <a href="#sobre">Promoções</a>
            <a href="#servicos">Banners</a>
            <a href="#contato">Backup</a>
        </nav>
    </div>
   



<?php


 if (isset($_GET['pagina'])) { ?>

    <!-------------------------------------------------------------------------------------------------->
    <!--                                         DASHBOARD                                            -->
    <!-------------------------------------------------------------------------------------------------->


    <?php

        include_once('conexao.php');

        // Inicializa variáveis para armazenar os totais
        $total_quantidade_vendida = 0;
        $total_valor_compra = 0;
        $total_valor_venda = 0;
        $total_valor_lucro = 0;

        // Consulta para obter o total de todos os produtos
        $sql_total = "SELECT SUM(quantidade_total_venda) AS total_quantidade_vendida, SUM(valor_total_compra) AS total_valor_compra, SUM(valor_total_venda) AS total_valor_venda, SUM(valor_total_lucro) AS total_valor_lucro FROM produtos";

        $query_total = $mysqli->query($sql_total) or die($mysqli->error);

        // Verifica se a consulta retornou resultados
        if ($query_total->num_rows > 0) {
            $total = $query_total->fetch_assoc();
            $total_quantidade_vendida = $total['total_quantidade_vendida'];
            $total_valor_compra = $total['total_valor_compra'];
            $total_valor_venda = $total['total_valor_venda'];
            $total_valor_lucro = $total['total_valor_lucro'];
        } else {
            // Se não houver resultados, os totais permanecem como 0
            $total_quantidade_vendida = 0;
            $total_valor_compra = 0;
            $total_valor_venda = 0;
            $total_valor_lucro = 0;
        }             

    ?>
    
    <div class="dashboard-c">
        <div class="dashboard">

            <div class="dashboard-titulo">
                <svg class="img-dashboard-titulo" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#5f6368">
                    <path d="M280-280h80v-280h-80v280Zm160 0h80v-400h-80v400Zm160 0h80v-160h-80v160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
                </svg>
                <h1>Dashboard</h1>
                <svg class="seta" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                    <path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/>
                </svg>
            </div> <!-- .dashboard-titulo -->

            <div class="dashboard-resultados-c">

                <div class="estatisticas-c-1">
                    <div class="estatisticas-total-vendas">
                        <div class="estatisticas-titulo-resultado-c">
                            <p class="estatisticas-titulo">Total vendas</p>
                            <p class="estatisticas-resultado"><?php echo $total_quantidade_vendida ?? 0; ?></p> 
                        </div> <!-- .estatisticas-titulo-resultado-c -->
                        <div class="estatisticas-img">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#b07e00">
                                <path d="M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z"/>
                            </svg>
                        </div> <!-- .estatisticas-img -->
                    </div> <!-- .estatisticas-total-vendas -->

                    <div class="estatisticas-valor-total-compras">
                        <div class="estatisticas-titulo-resultado-c">
                            <p class="estatisticas-titulo">Valor total compra</p>
                            <p class="estatisticas-resultado">R$<?php echo number_format((float) ($total_valor_compra ?? 0), 2, ',', '.'); ?></p>
                        </div> <!-- .estatisticas-titulo-resultado-c -->
                        <div class="estatisticas-img">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#9a0000">
                                <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                            </svg>
                        </div> <!-- .estatisticas-img -->                  
                    </div> <!-- .estatisticas-valor-total-compras -->
                </div> <!-- .estatisticas-c-1 -->

                <div class="estatisticas-c-2">
                    <div class="estatisticas-valor-total-vendas">
                        <div class="estatisticas-titulo-resultado-c">
                            <p class="estatisticas-titulo">Valor total venda</p>
                            <p class="estatisticas-resultado">R$<?php echo number_format((float) ($total_valor_venda ?? 0), 2, ',', '.'); ?></p>
                        </div> <!-- .estatisticas-titulo-resultado-c -->
                        <div class="estatisticas-img">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0068a9">
                                <path d="M200-80q-33 0-56.5-23.5T120-160v-480q0-33 23.5-56.5T200-720h80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720h80q33 0 56.5 23.5T840-640v480q0 33-23.5 56.5T760-80H200Zm0-80h560v-480H200v480Zm280-240q83 0 141.5-58.5T680-600h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85h-80q0 83 58.5 141.5T480-400ZM360-720h240q0-50-35-85t-85-35q-50 0-85 35t-35 85ZM200-160v-480 480Z"/>
                            </svg>
                        </div> <!-- .estatisticas-img -->
                    </div> <!-- .estatisticas-valor-total-vendas -->

                    <div class="estatisticas-valor-total-lucros">
                        <div class="estatisticas-titulo-resultado-c">
                            <p class="estatisticas-titulo">Lucro total</p>
                            <p class="estatisticas-resultado">R$<?php echo number_format((float) ($total_valor_lucro ?? 0), 2, ',', '.'); ?></p>
                        </div> <!-- .estatisticas-titulo-resultado-c -->
                        <div class="estatisticas-img">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#008800">
                                <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                            </svg>
                        </div> <!-- .estatisticas-img -->
                    </div> <!-- .estatisticas-valor-total-lucros -->
                </div> <!-- .estatisticas-c-2 -->

            </div> <!-- .dashboard-resultados-c -->

        </div> <!-- .dashboard -->
    </div> <!-- .dashboard-c -->

    
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/>
                        </svg>
                        <h1>Cadastrar produto</h1>
                    </div>
                    <p>Preencha todos os dados do formulário abaixo</p>
                </div> <!-- .header-formulario-cadastrar-produto -->

                <div class="formulario-dados-linha-1">

                    <div class="cadastro-produto-nome">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z"/>
                            </svg>
                            <label>Nome</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" name="nome" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-nome -->

                    <div class="cadastro-produto-preco">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                            </svg>
                            <label>Preço</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php if(isset($_POST['preco'])) echo $_POST['preco']; ?>" name="preco" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-preco -->
                     
                </div> <!-- .formulario-dados-linha-1 -->


                <div class="formulario-dados-linha-2">

                    <div class="cadastro-produto-marca">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg class="icone-coluna" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/>
                            </svg>
                            <label>Marca</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="" name="marca" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-marca -->

                    

                    <div class="cadastro-produto-categoria">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M400-240v-80h160v80H400ZM240-440v-80h480v80H240ZM120-640v-80h720v80H120Z"/>
                            </svg>
                            <label>Categoria</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <select name="categoria" id="categoria-produtos">
                                <option value="automotivo">Automotivo</option>
                                <option value="residencial">Residencial</option>
                                <option value="roupas">Roupas</option>
                            </select>
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-categoria -->

                </div> <!-- .formulario-dados-linha-2 -->


                <div class="formulario-dados-linha-3">

                    <div class="cadastro-produto-quantidade">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M480-400 40-640l440-240 440 240-440 240Zm0 160L63-467l84-46 333 182 333-182 84 46-417 227Zm0 160L63-307l84-46 333 182 333-182 84 46L480-80Zm0-411 273-149-273-149-273 149 273 149Zm0-149Z"/>
                            </svg>
                            <label>Quantidade</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php if(isset($_POST['quantidade'])) echo $_POST['quantidade']; ?>" name="quantidade" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-quantidade -->

                    <div class="cadastro-produto-estoque">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M320-280q17 0 28.5-11.5T360-320q0-17-11.5-28.5T320-360q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160q17 0 28.5-11.5T360-480q0-17-11.5-28.5T320-520q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160q17 0 28.5-11.5T360-640q0-17-11.5-28.5T320-680q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Zm120 320h240v-80H440v80Zm0-160h240v-80H440v80Zm0-160h240v-80H440v80ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
                            </svg>
                            <label>Estoque</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php if(isset($_POST['estoque'])) echo $_POST['estoque']; ?>" name="estoque" type="number">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-estoque -->

                    <div class="cadastro-produto-validade">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
                            </svg>
                            <label>Validade</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php if(isset($_POST['validade'])) echo $_POST['validade']; ?>" name="validade" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-validade -->

                    

                </div> <!-- .formulario-dados-linha-3 -->



                <div class="formulario-dados-linha-4">

                    <div class="cadastro-produto-preco-fornecedor">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                            </svg>
                            <label>Preço fornecedor</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php if(isset($_POST['preco_fornecedor'])) echo $_POST['preco_fornecedor']; ?>" name="preco_fornecedor" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-preco -->

                    <div class="cadastro-produto-imagem">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Zm140-360q25 0 42.5-17.5T400-620q0-25-17.5-42.5T340-680q-25 0-42.5 17.5T280-620q0 25 17.5 42.5T340-560Z"/>
                            </svg>
                            <label>Imagem</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input type="file" name="imagem">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-imagem -->

                </div> <!-- .formulario-dados-linha-4 -->


                <div class="formulario-dados-linha-5">

                    <div class="cadastro-produto-descricao">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                            </svg>
                            <label>Descrição do produto</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <textarea name="descricao"></textarea>
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-descricao -->

                </div> <!-- .formulario-dados-linha-4 -->

                <div class="btn-formulario-salvar-c">
                    <button class="btn-formulario-salvar" type="submit" name="cadastrar" id="cadastrar">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/>
                        </svg>
                        <p>Cadastrar</p>
                    </button> <!-- .btn-formulario-salvar -->
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
                        $imagem = $_FILES['imagem'];
                        $categoria = $_POST['categoria'];
                        $marca = $_POST['marca'];
                        $quantidade = $_POST['quantidade'];
                        $preco = $_POST['preco'];
                        $preco_fornecedor = $_POST['preco_fornecedor'];
                        $validade = $_POST['validade'];
                        $estoque = $_POST['estoque'];
                        $descricao = $_POST['descricao'];
                        $tipo_formulario = $_POST['tipo_formulario'];

                        if(empty($nome)) {
                            $aviso_erro = 'Preencha o nome!';                    
                        } else if(isset($imagem)) {
                            if($imagem['error'] !== UPLOAD_ERR_OK) {
                                $aviso_erro = 'Falha ao enviar a imagem!';
                            }

                            if($imagem['size'] > 1048576) {
                                $aviso_erro = 'Imagem muito grande! Máx: 1MB';
                            }

                            $pasta_armazenamento_imagem = "imagens_produtos/";
                            $nome_imagem = $imagem['name'];
                            $novo_nome_imagem = uniqid();

                            $extencao = strtolower(pathinfo($nome_imagem, PATHINFO_EXTENSION));

                            if($extencao != "jpg" && $extencao != "png") {
                                $aviso_erro = 'Imagem não aceita! Somente imagens .jpg e .png';
                            }

                            $caminho_imagem = $pasta_armazenamento_imagem . $novo_nome_imagem . "." . $extencao;
                            $imagem_enviada = move_uploaded_file($imagem['tmp_name'], $caminho_imagem);

                        } else if(empty($preco)) {
                            $aviso_erro = 'Preecha o preço do produto!';   
                        } else if(empty($marca)) {
                            $aviso_erro = 'Preecha a marca do produto!';   
                        } else if(empty($quantidade)) {
                            $aviso_erro = 'Preecha a quantidade do produto!';     
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
                            $sql_code = "INSERT INTO produtos (imagem, nome, categoria, marca, preco_fornecedor, quantidade, preco, validade, estoque, descricao) VALUES ('$caminho_imagem', '$nome', '$categoria', '$marca', '$preco_fornecedor', '$quantidade', '$preco', '$validade', '$estoque', '$descricao')";
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

                    <p class="aviso-erro"> <?php echo $aviso_erro; ?> </p>

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

                    <p class="aviso-sucesso"> <?php echo $aviso_sucesso; ?> </p>

                </div> <!-- modal-aviso -->
            </div> <!-- .fundo-modal-aviso -->

            <?php
        }
    
    ?>
     

<!-------------------------------------------------------------------------------------------------->
<!--                  PAINEL DE ADMINISTRAÇÃO E TABELA DE PRODUTOS CADASTRADOS                    -->
<!-------------------------------------------------------------------------------------------------->  

    <?php
        include_once('conexao.php');

        $sql_produtos_quantidade_query = "SELECT COUNT(*) as produtos_cadastrados FROM produtos";
        $sql_produtos_quantidade_query_exec = $mysqli->query($sql_produtos_quantidade_query) or die($mysqli->error);

        $sql_quantidade_produtos_cadastrados = $sql_produtos_quantidade_query_exec->fetch_assoc();
        $quantidade_produtos_cadastrados = $sql_quantidade_produtos_cadastrados['produtos_cadastrados'];

        $pagina_atual = $_GET['pagina'] ? intval($_GET['pagina']) : 1;
        $quantidade_produtos_por_pagina = 10;
        $offset = ($pagina_atual - 1) * $quantidade_produtos_por_pagina;

        $numero_pagina = ceil($quantidade_produtos_cadastrados / $quantidade_produtos_por_pagina);

    ?>
    

    <div class="container-produtos-cadastrados">

        <div class="titulo-painel-administracao">
            <svg class="img-titulo-painel-administracao" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#5f6368">
                <path d="m234-480-12-60q-12-5-22.5-10.5T178-564l-58 18-40-68 46-40q-2-13-2-26t2-26l-46-40 40-68 58 18q11-8 21.5-13.5T222-820l12-60h80l12 60q12 5 22.5 10.5T370-796l58-18 40 68-46 40q2 13 2 26t-2 26l46 40-40 68-58-18q-11 8-21.5 13.5T326-540l-12 60h-80Zm40-120q33 0 56.5-23.5T354-680q0-33-23.5-56.5T274-760q-33 0-56.5 23.5T194-680q0 33 23.5 56.5T274-600ZM592-40l-18-84q-17-6-31.5-14.5T514-158l-80 26-56-96 64-56q-2-18-2-36t2-36l-64-56 56-96 80 26q14-11 28.5-19.5T574-516l18-84h112l18 84q17 6 31.5 14.5T782-482l80-26 56 96-64 56q2 18 2 36t-2 36l64 56-56 96-80-26q-14 11-28.5 19.5T722-124l-18 84H592Zm56-160q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Z"/>
            </svg>
            <h1>Painel de Administração</h1>
            <svg class="seta" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                <path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/>
            </svg>
        </div> <!-- .titulo-painel-administracao -->

        <div class="painel-administracao">
            <div class="painel-administracao-cadastro">
                <div onclick="abrirCadastrarProdutos()" class="btn-cadastrar">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/>
                    </svg>
                    <p>Cadastrar Produto</p>
                </div> <!-- .btn-cadastrar -->

                <!-- Botão cadastrar mobile -->

                <div onclick="abrirCadastrarProdutos()" class="btn-cadastrar-mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/>
                    </svg>
                    <p>Cadastrar</p>
                </div> <!-- .btn-cadastrar-mobile -->

                <div class="pesquisar-produto-cadastrado">
                    <form action="" class="barra-pesquisa">
                        <input type="hidden" id="pagina" name="pagina" value="<?php echo isset($_GET['pagina']) ? htmlspecialchars($_GET['pagina']) : '1'; ?>">
                        <input type="text" id="pesquisa" name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Procurar produto cadastrado...">
                        <button type="submit" id="botao-pesquisar" class="botao-de-pesquisar" onclick="esconderPaginacao()">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
                            </svg>
                        </button> <!-- .botao-de-pesquisar -->
                        <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>" id="apagar-pesquisa" class="botao-apagar-pesquisa" onclick="apagarPesquisa()">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                            </svg>
                        </a> <!-- .botao-apagar-pesquisa -->
                    </form> <!-- .barra-pesquisa -->
                </div> <!-- .pesquisar-produto-cadastrado -->

                <div>
                    <a id="atualizar" href="produtos.php?pagina=1" class="atualizar-tabela" onclick="apagarPesquisa()">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M204-318q-22-38-33-78t-11-82q0-134 93-228t227-94h7l-64-64 56-56 160 160-160 160-56-56 64-64h-7q-100 0-170 70.5T240-478q0 26 6 51t18 49l-60 60ZM481-40 321-200l160-160 56 56-64 64h7q100 0 170-70.5T720-482q0-26-6-51t-18-49l60-60q22 38 33 78t11 82q0 134-93 228t-227 94h-7l64 64-56 56Z"/>
                        </svg>
                        <p>Atualizar</p>
                    </a>

                    <!-- Botão Mobile -->

                    <a id="atualizar" href="produtos.php?pagina=1" class="atualizar-tabela-mobile" onclick="apagarPesquisa()">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M204-318q-22-38-33-78t-11-82q0-134 93-228t227-94h7l-64-64 56-56 160 160-160 160-56-56 64-64h-7q-100 0-170 70.5T240-478q0 26 6 51t18 49l-60 60ZM481-40 321-200l160-160 56 56-64 64h7q100 0 170-70.5T720-482q0-26-6-51t-18-49l60-60q22 38 33 78t11 82q0 134-93 228t-227 94h-7l64 64-56 56Z"/>
                        </svg>
                    </a>

                </div> 

            </div> <!-- .painel-administracao-cadastro -->

            
        </div> <!-- .painel-administracao -->

        <div class="titulo-tabela">
            <svg class="img-titulo-tabela" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#5f6368">
                <path d="M240-80q-33 0-56.5-23.5T160-160v-480q0-33 23.5-56.5T240-720h80q0-66 47-113t113-47q66 0 113 47t47 113h80q33 0 56.5 23.5T800-640v480q0 33-23.5 56.5T720-80H240Zm0-80h480v-480h-80v80q0 17-11.5 28.5T600-520q-17 0-28.5-11.5T560-560v-80H400v80q0 17-11.5 28.5T360-520q-17 0-28.5-11.5T320-560v-80h-80v480Zm160-560h160q0-33-23.5-56.5T480-800q-33 0-56.5 23.5T400-720ZM240-160v-480 480Z"/>
            </svg>
            <h1><?php echo $quantidade_produtos_cadastrados ?> produtos cadastrados</h1>
        </div> <!-- .titulo-tabela -->
        
        
        <div class="tabela-produtos-cadastrados">
            <table>
                <thead>
                    <tr class="cabecalho-tabela">
                        <th class="coluna-tabela">
                            <div class="informacao-tabela">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M280-240q-100 0-170-70T40-480q0-100 70-170t170-70q66 0 121 33t87 87h432v240h-80v120H600v-120H488q-32 54-87 87t-121 33Zm0-80q66 0 106-40.5t48-79.5h246v120h80v-120h80v-80H434q-8-39-48-79.5T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Zm0-80q33 0 56.5-23.5T360-480q0-33-23.5-56.5T280-560q-33 0-56.5 23.5T200-480q0 33 23.5 56.5T280-400Zm0-80Z"/>
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
                                <svg class="icone-coluna" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/>
                                </svg>
                                <p>Marca</p>
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
                                    <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                                </svg>
                                <p>Preço</p>
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

                        if(!isset($_GET['busca']) || $_GET['busca'] == "") {

                            $sql_produtos = "SELECT * FROM produtos LIMIT {$quantidade_produtos_por_pagina} OFFSET {$offset}";
                            $query_produtos = $mysqli->query($sql_produtos) or die($mysqli->error);

                            ?>

                            <?php

                            if($quantidade_produtos_cadastrados == 0) { ?>
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
                                                <?php echo $produto['id']; ?>
                                            </td>

                                            <td class="dado-produto dado-produto-centralizado">
                                                <img src="<?php echo $produto['imagem']; ?>" alt="Imagem produto" class="imagem-produto"> 
                                            </td>

                                            <td class="dado-produto">
                                                <?php echo $produto['nome']; ?>
                                            </td>

                                            <td class="dado-produto">
                                                <?php echo $produto['marca']; ?>
                                            </td>

                                            <td class="dado-produto">
                                                <?php echo $produto['categoria']; ?>
                                            </td>

                                            <td class="dado-produto">
                                                <?php echo "R$" . $preco; ?>
                                            </td>

                                            <td class="dado-produto dado-produto-centralizado">
                                                <?php echo $produto['estoque']; ?>
                                            </td>

                                            <td class="dado-produto dado-produto-centralizado">
                                                
                                                <div class="acoes-tabela">

                                                    <!-- Em vez de usar o link diretamente para abrir o modal, vamos usar um `onclick` para definir o `localStorage` 
                                                    <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&id=<?php echo $produto['id']; ?>" onclick="localStorage.setItem('modalLucros', 'true');">
                                                        <div class="visualizar-lucro-produto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                                <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                                                            </svg>
                                                        </div> .visualizar-lucro-produto
                                                    </a> -->

                                                    <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&id=<?php echo $produto['id']; ?>#modal">
                                                        <div class="visualizar-lucro-produto" onclick="abrirVisualizarLucrosProdutos()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                            <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                                                        </svg>
                                                        </div> <!-- .visualizar-lucro-produto -->
                                                    </a>

                                                    <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&id=<?php echo $produto['id']; ?>#modal">
                                                        <div class="visualizar-informacoes-produto" onclick="abrirVisualizarProdutos()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                                <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
                                                            </svg>
                                                        </div> <!-- .visualizar-informacoes-produto -->
                                                    </a>

                                                    <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&id=<?php echo $produto['id']; ?>#modal">
                                                        <div onclick="abrirEditarProdutos()" class="editar-produto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                                                            </svg>
                                                        </div> <!-- .editar-produto -->
                                                    </a>                                             
                                                        
                                                    <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&id=<?php echo $produto['id']; ?>#modal">
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
                            }

                        //--------------------------------------------------------------------------------------------------//
                        //                        EXIBE OS PRODUTOS CORESPONDENTES A PESQUISA                               //
                        //--------------------------------------------------------------------------------------------------//
                            
                        }   else {
                                $pesquisa = $mysqli->real_escape_string($_GET['busca']);
                                $sql_code = "SELECT * FROM produtos WHERE id LIKE '%$pesquisa%' OR nome LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%' OR quantidade LIKE '%$pesquisa%' OR preco LIKE '%$pesquisa%' OR validade LIKE '%$pesquisa%' OR estoque LIKE '%$pesquisa%'";

                                $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar " . $mysqli->error);

                                if($sql_query->num_rows == 0) { ?>

                                    <tr>
                                        <td colspan="8" class="aviso-nenhum-produto-cadastrado">Nenhum produto encontrado</td>
                                    </tr>

                                    <?php
                                } else {
                                    while($dados_encontrados = $sql_query->fetch_assoc()) {

                                        $preco_encontrado = "";
                                        if(!empty($dados_encontrados['preco'])) {
                                            $preco_encontrado = number_format($dados_encontrados['preco'], 2, ',', '.');
                                        }

                                        $validade_encontrada = "Não Informado";
                                        if(!empty($dados_encontrados['validade'])) {
                                            $validade_encontrada = implode('/', array_reverse(explode('-',$dados_encontrados['validade'])));  
                                        } ?>

                                        <tr class="corpo-tabela">
                                            
                                            <div class="dados-produto">

                                                <td class="dado-produto dado-produto-centralizado">
                                                    <?php echo $dados_encontrados['id']; ?>
                                                </td>

                                                <td class="dado-produto dado-produto-centralizado">
                                                    <img src="<?php echo $dados_encontrados['imagem']; ?>" alt="Imagem produto" class="imagem-produto">
                                                </td>

                                                <td class="dado-produto">
                                                    <?php echo $dados_encontrados['nome']; ?>
                                                </td>

                                                <td class="dado-produto">
                                                    <?php echo $dados_encontrados['categoria']; ?>
                                                </td>

                                                <td class="dado-produto">
                                                    <?php echo $dados_encontrados['marca']; ?>
                                                </td>

                                                <td class="dado-produto">
                                                    <?php echo "R$" . $preco_encontrado; ?>
                                                </td>

                                                <td class="dado-produto dado-produto-centralizado">
                                                    <?php echo $dados_encontrados['estoque']; ?>
                                                </td>

                                                <td class="dado-produto dado-produto-centralizado">
                                                    
                                                    <div class="acoes-tabela">

                                                        <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&busca=<?php echo $pesquisa; ?>&id=<?php echo $dados_encontrados['id']; ?>#modal">
                                                            <div class="visualizar-lucro-produto" onclick="abrirVisualizarLucrosProdutos()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                                <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                                                            </svg>
                                                            </div> <!-- .visualizar-lucro-produto -->
                                                        </a>

                                                        <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&busca=<?php echo $pesquisa; ?>&id=<?php echo $dados_encontrados['id']; ?>#modal">
                                                            <div class="visualizar-informacoes-produto" onclick="abrirVisualizarProdutos()">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                                    <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
                                                                </svg>
                                                            </div> <!-- .visualizar-informacoes-produto -->
                                                        </a>

                                                        <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&busca=<?php echo $pesquisa; ?>&id=<?php echo $dados_encontrados['id']; ?>#modal">
                                                            <div id="abrirModalDiv" onclick="abrirEditarProdutos()" class="editar-produto" >
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                                                    <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                                                                </svg>
                                                            </div> <!-- .editar-produto -->
                                                        </a>                                             
                                                            
                                                        <a href="produtos.php?pagina=<?php echo $pagina_atual; ?>&busca=<?php echo $pesquisa; ?>&id=<?php echo $dados_encontrados['id']; ?>#modal"> 
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
                                }

                            } ?>

                </tbody>
            </table>

        </div> <!-- .tabela-produtos-cadastrados -->


        <!-------------------------------------------------------------------------------------------------->
        <!--                           SELETOR DE PÁGINAS DOS PRODUTOS                                    -->
        <!-------------------------------------------------------------------------------------------------->
        <?php

        if($numero_pagina > 1) { ?>

            <div class="numero-de-paginas">
                <p>Página <?php echo $pagina_atual; ?> de <?php echo $numero_pagina; ?></p>
            </div>
            <div class="paginas-produtos">

                <a class="mudar-pagina" href="?pagina=1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                        <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/>
                    </svg>
                </a>
                
                <?php
                    for($p = 1; $p <= $numero_pagina; $p++) {
                        if($p === $pagina_atual) { ?>
                            <p class="pagina-produtos-atual"><?php echo $p; ?></p>

                            <?php
                        } else {
                            echo "<a class='paginas-anterior-posterior' href='?pagina={$p}'>{$p}<a>";
                        } 
                    }
                ?>

                <a class="mudar-pagina" href="?pagina=<?php echo $numero_pagina; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                        <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                    </svg>
                </a>
                
            </div>

        <?php

        } ?>

    </div> <!-- .container-produtos-cadastrados -->


<!-------------------------------------------------------------------------------------------------->
<!--                                 MODAL VISUALIZAR PRODUTO                                     -->
<!-------------------------------------------------------------------------------------------------->

    <div class="fundo-modal-visualizar" id="modal-visualizar">
        <div class="modal-visualizar-produto">

            <div class="titulo-modal-visualizar-produto">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                    <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
                </svg>
                <h1>Informações do produto</h1>
            </div>

            <div onclick="fecharVisualizarProdutos()" class="btn-fechar-modal-visualizar-produto">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </div> <!-- .btn-fechar-modal-editar-produto -->

            <?php

                include_once('conexao.php');

                $id = intval($_GET['id']);

                $sql_visualizar_produto = "SELECT * FROM produtos WHERE id = '$id'";
                $query_visualizar_produto = $mysqli->query($sql_visualizar_produto) or die($mysqli->error);
                $visualizar_produto = $query_visualizar_produto->fetch_assoc();

                $visualizar_produto_preco = "";
                if(!empty($visualizar_produto['preco'])) {
                    $visualizar_produto_preco = number_format($visualizar_produto['preco'], 2, ',', '.');
                }

                $visualizar_produto_validade = "Não Informado";
                if(!empty($visualizar_produto['validade'])) {
                    $visualizar_produto_validade = implode('/', array_reverse(explode('-',$visualizar_produto['validade'])));  
                }

                
                if(empty($visualizar_produto['descricao'])) {
                    $visualizar_produto_descricao = "Nenhuma descrição sobre o produto informada.";
                } else {
                    $visualizar_produto_descricao = $visualizar_produto['descricao'];
                }

            ?>

            <div class="modal-informacoes-linha-1-c">
                <div class="modal-informacoes-linha-1">
                    <div class="modal-informacoes-linha-1-divisao-1">
                        <div class="informacoes-produtos-id">
                            <div class="informacoes-produtos-tipo-dado">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                    <path d="M280-240q-100 0-170-70T40-480q0-100 70-170t170-70q66 0 121 33t87 87h432v240h-80v120H600v-120H488q-32 54-87 87t-121 33Zm0-80q66 0 106-40.5t48-79.5h246v120h80v-120h80v-80H434q-8-39-48-79.5T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Zm0-80q33 0 56.5-23.5T360-480q0-33-23.5-56.5T280-560q-33 0-56.5 23.5T200-480q0 33 23.5 56.5T280-400Zm0-80Z"/>
                                </svg>
                                <h2>ID:</h2>
                            </div> <!-- .informacoes-produtos-tipo-dado -->
                            <div class="informacoes-produtos-dado">
                                <p><?php echo $visualizar_produto['id']; ?></p>
                            </div> <!-- .informacoes-produtos-dado -->
                        </div> <!-- .informacoes-produtos-id -->

                        <div class="informacoes-produtos-preco">
                            <div class="informacoes-produtos-tipo-dado">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                    <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                                </svg>
                                <h2>Preço:</h2>
                            </div> <!-- .informacoes-produtos-tipo-dado -->
                            <div class="informacoes-produtos-dado">
                                <p><?php echo $visualizar_produto_preco; ?></p>
                            </div> <!-- .informacoes-produtos-dado -->
                        </div> <!-- .informacoes-produtos-preco -->

                    </div> <!-- .modal-informacoes-linha-1-divisao-1 -->

                    <div class="modal-informacoes-linha-1-divisao-2">
                        <div class="informacoes-produtos-categoria">
                            <div class="informacoes-produtos-tipo-dado">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                    <path d="M400-240v-80h160v80H400ZM240-440v-80h480v80H240ZM120-640v-80h720v80H120Z"/>
                                </svg>
                                <h2>Categoria:</h2>
                            </div> <!-- .informacoes-produtos-tipo-dado -->
                            <div class="informacoes-produtos-dado">
                                <p><?php echo $visualizar_produto['categoria']; ?></p>
                            </div> <!-- .informacoes-produtos-dado -->
                        </div> <!-- .informacoes-produtos-categoria -->

                        <div class="informacoes-produtos-quantidade">
                            <div class="informacoes-produtos-tipo-dado">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                    <path d="M480-400 40-640l440-240 440 240-440 240Zm0 160L63-467l84-46 333 182 333-182 84 46-417 227Zm0 160L63-307l84-46 333 182 333-182 84 46L480-80Zm0-411 273-149-273-149-273 149 273 149Zm0-149Z"/>
                                </svg>
                                <h2>Quantidade:</h2>
                            </div> <!-- .informacoes-produtos-tipo-dado -->
                            <div class="informacoes-produtos-dado">
                                <p><?php echo $visualizar_produto['quantidade']; ?></p>
                            </div> <!-- .informacoes-produtos-dado -->
                        </div> <!-- .informacoes-produtos-quantidade -->

                    </div> <!-- .modal-informacoes-linha-1-divisao-2 -->

                </div> <!-- .modal-informacoes-linha-1 -->

                <div class="informacoes-produtos-img">
                    <div class="informacoes-produtos-tipo-dado">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Zm140-360q25 0 42.5-17.5T400-620q0-25-17.5-42.5T340-680q-25 0-42.5 17.5T280-620q0 25 17.5 42.5T340-560Z"/>
                        </svg>
                        <h2>Imagem:</h2>
                    </div>
                    <div class="informacoes-produtos-dado-img">
                        <img width="80px" src="<?php echo $visualizar_produto['imagem']; ?>" alt="Imagem produto">
                    </div>     
                </div>
            </div> <!-- .modal-informacoes-linha-1-c -->


            <div class="modal-informações-linha-2-c">
                <div class="informacoes-produtos-nome">
                    <div class="informacoes-produtos-tipo-dado">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                            <path d="M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z"/>
                        </svg>
                        <h2>Nome do produto:</h2>
                    </div> <!-- .informacoes-produtos-tipo-dado -->
                    <div class="informacoes-produtos-dado">
                        <p><?php echo $visualizar_produto['nome']; ?></p>
                    </div> <!-- .informacoes-produtos-dado -->
                </div> <!-- .informacoes-produtos-nome -->

            </div> <!-- .modal-informações-linha-2-c -->

            
            <div class="modal-informações-linha-3-c">
                <div class="informacoes-produtos-validade">
                    <div class="informacoes-produtos-tipo-dado">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                            <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
                        </svg>
                        <h2>Validade:</h2>
                    </div> <!-- .informacoes-produtos-tipo-dado -->
                    <div class="informacoes-produtos-dado">
                        <p><?php echo $visualizar_produto_validade; ?></p>
                    </div> <!-- .informacoes-produtos-dado -->
                </div> <!-- .informacoes-produtos-validade -->

                <div class="informacoes-produtos-marca">
                    <div class="informacoes-produtos-tipo-dado">
                        <svg class="icone-coluna" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                            <path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/>
                        </svg>
                        <h2>Marca:</h2>
                    </div> <!-- .informacoes-produtos-tipo-dado -->
                    <div class="informacoes-produtos-dado">
                        <p><?php echo $visualizar_produto['marca']; ?></p>
                    </div> <!-- .informacoes-produtos-dado -->
                </div> <!-- .informacoes-produtos-marca -->

            </div> <!-- .modal-informações-linha-3-c -->


            <div class="modal-informações-linha-4-c">

                <div class="informacoes-produtos-preco-fornecedor">
                    <div class="informacoes-produtos-tipo-dado">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                            <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                        </svg>
                        <h2>Preço fornecedor:</h2>
                    </div> <!-- .informacoes-produtos-tipo-dado -->
                    <div class="informacoes-produtos-dado">
                        <p><?php echo $visualizar_produto['preco_fornecedor']; ?></p>
                    </div> <!-- .informacoes-produtos-dado -->
                </div> <!-- .informacoes-produtos-marca -->

                <div class="informacoes-produtos-estoque">
                    <div class="informacoes-produtos-tipo-dado">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                            <path d="M320-280q17 0 28.5-11.5T360-320q0-17-11.5-28.5T320-360q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160q17 0 28.5-11.5T360-480q0-17-11.5-28.5T320-520q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160q17 0 28.5-11.5T360-640q0-17-11.5-28.5T320-680q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Zm120 320h240v-80H440v80Zm0-160h240v-80H440v80Zm0-160h240v-80H440v80ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
                        </svg>
                        <h2>Estoque:</h2>
                    </div> <!-- .informacoes-produtos-tipo-dado -->
                    <div class="informacoes-produtos-dado">
                        <p><?php echo $visualizar_produto['estoque']; ?></p>
                    </div> <!-- .informacoes-produtos-dado -->
                </div> <!-- .informacoes-produtos-estoque -->

            </div> <!-- .modal-informações-linha-4-c -->


            <div class="modal-informações-linha-5-c">
                <div class="informacoes-produtos-descricao">
                    <div class="informacoes-produtos-tipo-dado">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                        </svg>
                        <h2>Descrição do produto: </h2>
                    </div> <!-- .informacoes-produtos-tipo-dado -->
                    <div class="informacoes-produtos-dado-descricao">
                        <p><?php echo $visualizar_produto_descricao; ?></p>
                    </div> <!-- .informacoes-produtos-dado-descricao -->
                </div> <!-- .informacoes-produtos-descricao -->

            </div> <!-- .modal-informações-linha-5-c -->

        </div> <!-- .modal-visualizar-produto -->
    </div> <!-- .fundo-modal-visualiza -->


            
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
                    $marca = $_POST['marca'];
                    $quantidade = $_POST['quantidade'];
                    $preco = $_POST['preco'];
                    $validade = $_POST['validade'];
                    $estoque = $_POST['estoque'];
                    $descricao = $_POST['descricao'];
                    $tipo_formulario = $_POST['tipo_formulario'];

                    if(empty($nome)) {
                        $aviso_erro = 'O nome não pode ser vazio!';                    
                    } else if(empty($preco)) {
                        $aviso_erro = 'O preço é obrigatório!';    
                    } else if(empty($marca)) {
                        $aviso_erro = 'A marca é obrigatória!';    
                    } else if(empty($quantidade)) {
                        $aviso_erro = 'Preecha a quantidade do produto!';  
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

                    // Atualiza o estoque com base na ação do formulário
                    if (isset($_POST['acao_estoque'])) {
                        if ($_POST['acao_estoque'] == 'adicionar') {
                            $estoque++;
                        } elseif ($_POST['acao_estoque'] == 'remover') {
                            $estoque--;
                        }
                    }
                
                    if($tipo_formulario == 'editar' && $aviso_erro == false) {
                        $sql_code = "UPDATE produtos SET nome = '$nome', categoria = '$categoria', marca = '$marca', quantidade = '$quantidade', preco = '$preco', validade = '$validade', estoque = '$estoque', descricao = '$descricao' WHERE id = '$id'";
                        
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                        </svg>
                        <h1>Editar produto</h1>
                    </div> <!-- .titulo-formulario-editar-produto -->
                    <p>Edite todos os dados necessários do formulário</p>
                </div> <!-- .header-formulario-cadastrar-produto -->


                <div class="formulario-dados-linha-1">

                    <div class="cadastro-produto-nome">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z"/>
                            </svg>
                            <label>Nome</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php echo $produto['nome']; ?>" name="nome" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-nome -->

                    <div class="cadastro-produto-preco">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                            </svg>
                            <label>Preço</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php echo $produto['preco']; ?>" name="preco" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-preco -->
                     
                </div> <!-- .formulario-dados-linha-1 -->


                <div class="formulario-dados-linha-2">

                    <div class="cadastro-produto-marca">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg class="icone-coluna" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/>
                            </svg>
                            <label>Marca</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php echo $produto['marca']; ?>" name="marca" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-marca -->

                    

                    <div class="cadastro-produto-categoria">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M400-240v-80h160v80H400ZM240-440v-80h480v80H240ZM120-640v-80h720v80H120Z"/>
                            </svg>
                            <label>Categoria</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <select name="categoria" id="categoria-produtos">
                                <option value="automotivo" <?php if($produto['categoria'] == 'automotivo') echo 'selected'; ?>>Automotivo</option>
                                <option value="residencial" <?php if($produto['categoria'] == 'residencial') echo 'selected'; ?>>Residencial</option>
                                <option value="roupas" <?php if($produto['categoria'] == 'roupas') echo 'selected'; ?>>Roupas</option>
                            </select>
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-categoria -->

                </div> <!-- .formulario-dados-linha-2 -->


                <div class="formulario-dados-linha-3">

                    <div class="cadastro-produto-quantidade">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M480-400 40-640l440-240 440 240-440 240Zm0 160L63-467l84-46 333 182 333-182 84 46-417 227Zm0 160L63-307l84-46 333 182 333-182 84 46L480-80Zm0-411 273-149-273-149-273 149 273 149Zm0-149Z"/>
                            </svg>
                            <label>Quantidade</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php echo $produto['quantidade']; ?>" name="quantidade" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-quantidade -->

                    <div class="cadastro-produto-validade">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
                            </svg>
                            <label>Validade</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php echo formatar_data($produto['validade']); ?>" name="validade" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-validade -->

                    <div class="cadastro-produto-estoque">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M320-280q17 0 28.5-11.5T360-320q0-17-11.5-28.5T320-360q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160q17 0 28.5-11.5T360-480q0-17-11.5-28.5T320-520q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160q17 0 28.5-11.5T360-640q0-17-11.5-28.5T320-680q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Zm120 320h240v-80H440v80Zm0-160h240v-80H440v80Zm0-160h240v-80H440v80ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
                            </svg>
                            <label>Estoque</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado-estoque">

                            <!-- Campo oculto para armazenar o valor do estoque -->
                            <input type="hidden" id="estoque" name="estoque" value="<?php echo $produto['estoque']; ?>">
                            <!-- Campo oculto para a ação de estoque -->
                            <input type="hidden" id="acaoEstoque" name="acao_estoque" value="">
                            
                            <button class="btn-decrementar" type="button" onclick="atualizarEstoque('remover')"> - </button>
                            <p class="visualizador-estoque" id="estoqueAtual"><?php echo $produto['estoque']; ?></p>
                            <button class="btn-acrescentar" type="button" onclick="atualizarEstoque('adicionar')"> + </button>
                             
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-estoque -->

                </div> <!-- .formulario-dados-linha-3 -->

                <div class="formulario-dados-linha-4">

                    <div class="cadastro-produto-preco-fornecedor">
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                            </svg>
                            <label>Preço fornecedor</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input value="<?php echo $produto['preco_fornecedor']; ?>" name="preco_fornecedor" type="text">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-preco -->

                    <div class="cadastro-produto-imagem">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Zm140-360q25 0 42.5-17.5T400-620q0-25-17.5-42.5T340-680q-25 0-42.5 17.5T280-620q0 25 17.5 42.5T340-560Z"/>
                            </svg>
                            <label>Imagem</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <input type="file" id="imagem">
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-imagem -->

                </div> <!-- .formulario-dados-linha-4 -->

                <div class="formulario-dados-linha-5">

                    <div class="cadastro-produto-descricao">      
                        <div class="cadastro-produto-tipo-dado">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                            </svg>
                            <label>Descrição do produto</label>
                        </div> <!-- .cadastro-produto-tipo-dado -->
                        <div class="cadastro-produto-dado">
                            <textarea name="descricao"><?php echo $produto['descricao'] ?? ''; ?></textarea>
                        </div> <!-- .cadastro-produto-dado -->
                    </div> <!-- .cadastro-produto-descricao -->

                </div> <!-- .formulario-dados-linha-4 -->



                <div class="btn-formulario-salvar-c">
                    <button id="salvar-edicao" class="btn-formulario-salvar" type="submit" name="editar">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
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
<!--                                   MODAL DELETAR PRODUTO                                      -->
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                        </svg>
                        <h1>Deletar produto</h1>
                    </div> <!-- .titulo-formulario-deletar-produto -->
                    <p>Deseja realmente DELETAR o produto?</p>
                </div> <!-- .header-formulario-cadastrar-produto -->

                <div class="btn-deletar-c">
                    <a id="nao-deletar" href="#" class="btn-nao-deletar">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                        <p>Não</p>
                    </a> <!-- .btn-nao-deletar -->

                    <button id="deletar-produto" name="deletar" value="1" class="btn-deletar" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                        </svg>
                        <p>Sim</p>
                    </button> <!-- .btn-deletar -->
                </div> <!-- .btn-deletar-c -->
            </form>

        </div> <!-- .modal-cadastrar-produto -->
    </div> <!-- .fundo-modal-deletar -->

    <!-------------------------------------------------------------------------------------------------->
    <!--                        MENSAGEM DE ERRO OU SUCESSO AO DELETAR PRODUTOS                       -->
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



    <!-------------------------------------------------------------------------------------------------->
    <!--                                  MODAL LUCROS E DESPESAS                                     -->
    <!-------------------------------------------------------------------------------------------------->


    <?php

        $aviso_erro = false;
        $aviso_sucesso = false;
        $quantidade_total_venda = 0;
        $valor_total_compra = 0;
        $valor_total_venda = 0;
        $valor_total_lucro = 0;

        include_once('conexao.php');
        
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        if (count($_POST) > 0 && isset($_POST['tipo_formulario']) && $_POST['tipo_formulario'] === 'lucro') {
            $preco = $_POST['preco'];
            $quantidade_vendido = $_POST['quantidade_vendido'];
            $preco_fornecedor = $_POST['preco_fornecedor'];
            $tipo_formulario = $_POST['tipo_formulario'];
            $estoque_vendido = $_POST['estoque'];
            
            if (empty($preco_fornecedor)) {
                $aviso_erro = 'Preencha o valor do fornecedor por unidade!'; 
            } else if (empty($preco)) {
                $aviso_erro = 'Preencha o valor de venda por unidade!'; 
            } else if ($quantidade_vendido <= 0) {
                $aviso_erro = 'Preencha a quantidade vendida!';
            } else if ($quantidade_vendido > $estoque_vendido) {
                $aviso_erro = "Você não possui esse N° de produtos disponível em estoque!";
            }

           
            if (!$aviso_erro) {

                // Obtém os dados atuais do produto para somar
                $sql_saldo = "SELECT estoque, quantidade_total_venda, valor_total_compra, valor_total_venda, valor_total_lucro FROM produtos WHERE id = '$id'";
                $query_saldo = $mysqli->query($sql_saldo) or die($mysqli->error);
                $saldo = $query_saldo->fetch_assoc();
                        
                // Calcula valores incrementais
                $total_venda_momento = $quantidade_vendido;

                $valor_total_compra_momento = $preco_fornecedor * $quantidade_vendido;
                $valor_total_venda_momento = $preco * $quantidade_vendido;
                $valor_total_lucro_momento = ($preco - $preco_fornecedor) * $quantidade_vendido;


                // Atualiza valores acumulando com os existentes
                $quantidade_total_venda = $saldo['quantidade_total_venda'] + $total_venda_momento;
                $valor_total_compra = $saldo['valor_total_compra'] + $valor_total_compra_momento;
                $valor_total_venda = $saldo['valor_total_venda'] + $valor_total_venda_momento;
                $valor_total_lucro = $saldo['valor_total_lucro'] + $valor_total_lucro_momento;
                $estoque = $saldo['estoque'] - $total_venda_momento; // Atualiza o estoque


                
                $sql_registrar_venda = "UPDATE produtos SET estoque = '$estoque', quantidade_total_venda = '$quantidade_total_venda', valor_total_compra = '$valor_total_compra', valor_total_venda = '$valor_total_venda', valor_total_lucro = '$valor_total_lucro' WHERE id = '$id'";

                $venda_registrada = $mysqli->query($sql_registrar_venda) or die($mysqli->error);

                if ($venda_registrada) {
                    $aviso_sucesso = 'Venda registrada com sucesso!';  
                }
            }
        }

        $sql_saldo = "SELECT * FROM produtos WHERE id = '$id'";
        $query_saldo = $mysqli->query($sql_saldo) or die($mysqli->error);
        $saldo = $query_saldo->fetch_assoc();

    ?>


    <div class="fundo-modal-lucro" id="modal-lucro">
        <div class="modal-lucro">

            <div onclick="fecharVisualizarLucrosProdutos()" class="btn-fechar-modal-lucro">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </div>

            <div class="titulo-modal-lucro">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                    <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                </svg>
                <h1>Lucros e despesas</h1>
            </div>

            <div class="informacoes-principais-modal-lucro">
                <div class="informacoes-vendas">
                    <div class="tipo-informacoes-produto-dados-c">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M856-390 570-104q-12 12-27 18t-30 6q-15 0-30-6t-27-18L103-457q-11-11-17-25.5T80-513v-287q0-33 23.5-56.5T160-880h287q16 0 31 6.5t26 17.5l352 353q12 12 17.5 27t5.5 30q0 15-5.5 29.5T856-390ZM513-160l286-286-353-354H160v286l353 354ZM260-640q25 0 42.5-17.5T320-700q0-25-17.5-42.5T260-760q-25 0-42.5 17.5T200-700q0 25 17.5 42.5T260-640Zm220 160Z"/>
                        </svg>
                        <p class="tipo-informacoes-produto-dados">N° vendas</p>
                    </div>
                    <p class="informacoes-produto-dados-quantidade-vendas"><?php echo htmlspecialchars($saldo['quantidade_total_venda']); ?></p>
                </div>
                <div class="informacoes-despesas">
                    <div class="tipo-informacoes-produto-dados-c">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                        </svg>
                        <p class="tipo-informacoes-produto-dados">Compras</p>
                    </div>
                    <p class="informacoes-produto-dados-custo"><?php echo "R$" .  htmlspecialchars($saldo['valor_total_compra']); ?></p>
                </div>
                <div class="informacoes-despesas">
                    <div class="tipo-informacoes-produto-dados-c">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/>
                        </svg>
                        <p class="tipo-informacoes-produto-dados">Vendas</p>
                    </div>
                    <p class="informacoes-produto-dados-valor-venda"><?php echo "R$" . htmlspecialchars($saldo['valor_total_venda']); ?></p>
                </div>
                <div class="informacoes-lucro">
                    <div class="tipo-informacoes-produto-dados-c">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/>
                        </svg>
                        <p class="tipo-informacoes-produto-dados">Lucros</p>
                    </div>
                    <p class="informacoes-produto-dados-lucro"><?php echo "R$" . htmlspecialchars($saldo['valor_total_lucro']); ?></p>
                </div>
            </div>

            <hr>

            <div class="informacoes-produto-modal-lucro">
                <div class="informacoes-nome-produto">
                    <p class="tipo-informacoes-produto-dados">Produto</p>
                    <p class="informacoes-produto-dados"><?php echo htmlspecialchars($saldo['nome']); ?></p>
                </div>
                <div class="informacoes-estoque-produto">
                    <p class="tipo-informacoes-produto-dados">Em estoque</p>
                    <p class="informacoes-produto-dados"><?php echo htmlspecialchars($saldo['estoque']); ?></p>
                </div>
            </div>

            <hr>

            <div class="informar-venda">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                    <path d="M720-40v-120H600v-80h120v-120h80v120h120v80H800v120h-80ZM80-160v-240H40v-80l40-200h600l40 200v80h-40v120h-80v-120H440v240H80Zm80-80h200v-160H160v160Zm-38-240h516-516ZM80-720v-80h600v80H80Zm42 240h516l-24-120H146l-24 120Z"/>
                </svg>
                <p>Informar venda</p>
            </div>

            <form action="" method="post" id="lucro" name="lucro" class="formulario-modal-lucro">
                <input type="hidden" name="tipo_formulario" value="lucro">
                <input type="hidden" name="estoque" value="<?php echo htmlspecialchars($saldo['estoque']); ?>">
                <div class="informacoes-custo-modal-lucro">
                    <div class="informacoes-valor-fornecedor">
                        <p class="tipo-informacoes-produto-dados">Valor fornecedor</p>
                        <input type="number" value="<?php echo htmlspecialchars($saldo['preco_fornecedor']); ?>" name="preco_fornecedor" class="informacoes-produto-dados-input">
                    </div>
                    <div class="informacoes-valor-vendido">
                        <p class="tipo-informacoes-produto-dados">Valor venda</p>
                        <input type="number" value="<?php echo htmlspecialchars($saldo['preco']); ?>" name="preco" class="informacoes-produto-dados-input">
                    </div>
                    <div class="informacoes-quantidade-vendido">
                        <p class="tipo-informacoes-produto-dados">Qntd vendido</p>
                        <input type="number" value="<?php echo htmlspecialchars($quantidade_vendido ?? 0); ?>" name="quantidade_vendido" class="informacoes-produto-dados-input">
                    </div>
                </div>
                <div class="btn-registrar-venda-c">
                    <a href="#" id="cancelar-venda" class="btn-cancelar-venda" type="button">Cancelar</a>
                    <button class="btn-registrar-venda" type="submit" id="registrar-venda">Registrar venda</button>
                </div>
            </form>

        </div>
    </div>


    <!-------------------------------------------------------------------------------------------------->
    <!--                   MENSAGEM DE ERRO OU SUCESSO FORMULÁRIO DE REGISTRAR VENDAS                 -->
    <!-------------------------------------------------------------------------------------------------->
    
    
    <?php

        if (isset($_POST['tipo_formulario']) && $_POST['tipo_formulario'] === 'lucro') {
            if ($aviso_erro) { ?>

                <div id="modal-aviso" class="fundo-modal-aviso">
                    <div class="modal-aviso">
                        <div onclick="fecharAviso()" class="btn-fechar-modal-aviso">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                            </svg>
                        </div>

                        <p class="aviso-erro"> <?php echo $aviso_erro; ?> </p>

                    </div> <!-- modal-aviso -->
                </div> <!-- .fundo-modal-aviso -->

                <?php
            }

            if ($aviso_sucesso) { ?>

                <div id="modal-aviso" class="fundo-modal-aviso">
                    <div class="modal-aviso">
                        <div onclick="fecharAviso()" class="btn-fechar-modal-aviso">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000">
                                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                            </svg>
                        </div>

                        <p class="aviso-sucesso"> <?php echo $aviso_sucesso; ?> </p>

                    </div> <!-- modal-aviso -->
                </div> <!-- .fundo-modal-aviso -->

                <?php
            }
        }
    ?>


<?php
} ?>

    <?php

        if(isset($_GET['backup'])) { 

            include_once('conexao.php'); ?>

            <div class="container-backup">
                <div class="backup-titulo">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#000">
                        <path d="M260-160q-91 0-155.5-63T40-377q0-78 47-139t123-78q25-92 100-149t170-57q117 0 198.5 81.5T760-520q69 8 114.5 59.5T920-340q0 75-52.5 127.5T740-160H520q-33 0-56.5-23.5T440-240v-206l-64 62-56-56 160-160 160 160-56 56-64-62v206h220q42 0 71-29t29-71q0-42-29-71t-71-29h-60v-80q0-83-58.5-141.5T480-720q-83 0-141.5 58.5T280-520h-20q-58 0-99 41t-41 99q0 58 41 99t99 41h100v80H260Zm220-280Z"/>
                    </svg>
                    <h1>Fazer backup do Banco de Dados</h1>
                </div>
                <div class="backup-recomendacoes">
                    <p class="backup-recomendacoes-titulo">Backup Semanal Recomendado</p>
                    <p class="backup-recomendacoes-descricao">Para proteger seus dados e garantir a recuperação em caso de falhas, é recomendado realizar backups semanais. Isso ajuda a evitar a perda total de informações e assegura a continuidade do seu trabalho.</p>
                    <form action="backup.php" method="POST">
                        <button class="btn-fazer-backup" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                <path d="M260-160q-91 0-155.5-63T40-377q0-78 47-139t123-78q25-92 100-149t170-57q117 0 198.5 81.5T760-520q69 8 114.5 59.5T920-340q0 75-52.5 127.5T740-160H520q-33 0-56.5-23.5T440-240v-206l-64 62-56-56 160-160 160 160-56 56-64-62v206h220q42 0 71-29t29-71q0-42-29-71t-71-29h-60v-80q0-83-58.5-141.5T480-720q-83 0-141.5 58.5T280-520h-20q-58 0-99 41t-41 99q0 58 41 99t99 41h100v80H260Zm220-280Z"/>
                            </svg>
                            <p>Fazer backup</p>
                        </button>
                    </form>
                </div>

            </div>

        <?php
        }

    ?>


    <!-------------------------------------------------------------------------------------------------->
    <!--                                   PRIMEIRO BANNER SITE                                       -->
    <!-------------------------------------------------------------------------------------------------->

    <?php

        $aviso_erro = false;
        $aviso_sucesso = false;

        if (count($_POST) > 0) {
            include_once('conexao.php');

            // Processa o primeiro banner
            $primeiro_banner = $_FILES['primeiro_banner'] ?? null;

            if (isset($primeiro_banner)) {
                // Verifica se houve erro no upload
                if ($primeiro_banner['error'] !== UPLOAD_ERR_OK) {
                    $aviso_erro = 'Falha ao enviar o primeiro banner!';
                }

                // Verifica o tamanho do banner
                if ($primeiro_banner['size'] > 1048576) {
                    $aviso_erro = 'Primeiro banner muito grande! Máx: 1MB';
                }

                $pasta_armazenamento_banner = "banners_site/";
                $nome_primeiro_banner = $primeiro_banner['name'];
                $novo_nome_primeiro_banner = uniqid();

                $extencao_primeiro = strtolower(pathinfo($nome_primeiro_banner, PATHINFO_EXTENSION));

                // Verifica a extensão da imagem
                if ($extencao_primeiro != "jpg" && $extencao_primeiro != "png") {
                    $aviso_erro = 'Primeiro banner não aceito! Somente imagens .jpg e .png';
                }

                // Define o caminho completo para o banner
                $caminho_primeiro_banner = $pasta_armazenamento_banner . $novo_nome_primeiro_banner . "." . $extencao_primeiro;

                // Move o arquivo para o diretório de armazenamento
                if (move_uploaded_file($primeiro_banner['tmp_name'], $caminho_primeiro_banner)) {
                    // Atualiza o caminho do primeiro banner no banco de dados
                    $sql_primeiro_banner = "UPDATE primeiro_banner SET caminho_banner = '$caminho_primeiro_banner'";
                    $primeiro_banner_enviado_sucesso = $mysqli->query($sql_primeiro_banner) or die($mysqli->error);

                    if ($primeiro_banner_enviado_sucesso) {
                        $aviso_sucesso = 'Primeiro banner atualizado com sucesso!';
                    }
                } else {
                    $aviso_erro = 'Falha ao mover o banner para o diretório!';
                }
            }
        }

        include_once('conexao.php');

        // Recupera o banner do banco de dados para exibir
        $sql_visualizar_banner = "SELECT caminho_banner FROM primeiro_banner";
        $query_visualizar_banner = $mysqli->query($sql_visualizar_banner) or die($mysqli->error);
        $visualizar_primeiro_banner = $query_visualizar_banner->fetch_assoc();

        // Define o caminho padrão se não houver banner carregado
        $path_primeiro_banner = $visualizar_primeiro_banner['caminho_banner'] ?? 'banners_site/imagem_upload.png';
    ?>


    <!-------------------------------------------------------------------------------------------------->
    <!--                                    SEGUNDO BANNER SITE                                       -->
    <!-------------------------------------------------------------------------------------------------->

    <?php

        $aviso_erro = false;
        $aviso_sucesso = false;

        if (count($_POST) > 0) {
            include_once('conexao.php');

            // Processa o segundo banner
            $segundo_banner = $_FILES['segundo_banner'] ?? null;

            if (isset($segundo_banner)) {
                // Verifica se houve erro no upload
                if ($segundo_banner['error'] !== UPLOAD_ERR_OK) {
                    $aviso_erro = 'Falha ao enviar o segundo banner!';
                }

                // Verifica o tamanho do banner
                if ($segundo_banner['size'] > 1048576) {
                    $aviso_erro = 'Segundo banner muito grande! Máx: 1MB';
                }

                $pasta_armazenamento_segundo_banner = "banners_site/";
                $nome_segundo_banner = $segundo_banner['name'];
                $novo_nome_segundo_banner = uniqid();

                $extencao_segundo = strtolower(pathinfo($nome_segundo_banner, PATHINFO_EXTENSION));

                // Verifica a extensão da imagem
                if ($extencao_segundo != "jpg" && $extencao_segundo != "png") {
                    $aviso_erro = 'Segundo banner não aceito! Somente imagens .jpg e .png';
                }

                // Define o caminho completo para o banner
                $caminho_segundo_banner = $pasta_armazenamento_segundo_banner . $novo_nome_segundo_banner . "." . $extencao_segundo;

                // Move o arquivo para o diretório de armazenamento
                if (move_uploaded_file($segundo_banner['tmp_name'], $caminho_segundo_banner)) {
                    // Atualiza o caminho do segundo banner no banco de dados
                    $sql_segundo_banner = "UPDATE segundo_banner SET caminho_banner = '$caminho_segundo_banner'";
                    $segundo_banner_enviado_sucesso = $mysqli->query($sql_segundo_banner) or die($mysqli->error);

                    if ($segundo_banner_enviado_sucesso) {
                        $aviso_sucesso = 'Segundo banner atualizado com sucesso!';
                    }
                } else {
                    $aviso_erro = 'Falha ao mover o banner para o diretório!';
                }
            }
        }

        include_once('conexao.php');

        // Recupera o segundo banner do banco de dados para exibir
        $sql_visualizar_segundo_banner = "SELECT caminho_banner FROM segundo_banner";
        $query_visualizar_segundo_banner = $mysqli->query($sql_visualizar_segundo_banner) or die($mysqli->error);
        $visualizar_segundo_banner = $query_visualizar_segundo_banner->fetch_assoc();

        // Define o caminho padrão se não houver banner carregado
        $path_segundo_banner = $visualizar_segundo_banner['caminho_banner'] ?? 'banners_site/imagem_upload.png';
    ?>



<?php

    if(isset($_GET['banners'])) { ?>

        <div class="container-banners">

            <div class="banners-titulo">
                <div class="banners-titulo-img">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#000">
                        <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm80-80h480L570-520 450-360l-90-120-120 160Zm-80 80v-480 480Z"/>
                    </svg>
                    <h1>Adicionar banners ao site</h1>
                </div>
                <p>Você pode adicionar até 2 banners ao seu site. Escolha os melhores para destacar e atrair a atenção dos seus visitantes!</p>
            </div>

            <div class="container-upload-banners">

                <div class="banners-informacoes-c">
                    <div class="banners-informacoes">
                        <div class="banners-informacoes-titulo">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fff">
                                <path d="M160-240v-320 320Zm0 80q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800l80 160h120l-80-160h80l80 160h120l-80-160h80l80 160h120l-80-160h120q33 0 56.5 23.5T880-720v160H160v320h320v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z"/>
                            </svg>
                            <h1>Primeiro banner</h1>
                        </div>
                        <p class="banners-informacoes-descricao">Atenção! Para garantir a melhor apresentação, os banners devem seguir as seguintes especificações:</p>
                        <ul class="especificacoes-banners">
                            <li><span class="especificacao-banner">Dimensões:</span> Largura de 1420px e Altura de 300px.</li>
                            <li><span class="especificacao-banner">Tamanho máximo do arquivo:</span> 5MB.</li>
                        </ul>
                        <p class="banners-informacoes-descricao">Banners que não atenderem a essas especificações não serão aceitos. Certifique-se de que seu banner esteja dentro desses parâmetros para uma exibição ideal!</p>
                    </div>

                    <div class="formulario-upload-banners-c">
                        <form enctype="multipart/form-data" action="" method="post" class="formulario-upload-banners">
                            <input type="hidden" name="tipo_formulario" value="banner_primeiro">
                            <input type="file" name="primeiro_banner">
                            <button type="submit" class="btn-fazer-upload-banner">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M440-200h80v-167l64 64 56-57-160-160-160 160 57 56 63-63v167ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                                </svg>
                                <p>Fazer upload</p>
                            </button>
                        </form>
                    </div>


                    <div class="preview-img-banner">
                        <p>Preview do banner:</p>
                        <img src="<?php echo htmlspecialchars($path_primeiro_banner); ?>" alt="Preview do Primeiro Banner">
                    </div>
                </div>

                <div class="banners-informacoes-c">
                    <div class="banners-informacoes">
                        <div class="banners-informacoes-titulo">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fff">
                                <path d="M160-240v-320 320Zm0 80q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800l80 160h120l-80-160h80l80 160h120l-80-160h80l80 160h120l-80-160h120q33 0 56.5 23.5T880-720v160H160v320h320v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z"/>
                            </svg>
                            <h1>Segundo banner</h1>
                        </div>
                        <p class="banners-informacoes-descricao">Atenção! Para garantir a melhor apresentação, os banners devem seguir as seguintes especificações:</p>
                        <ul class="especificacoes-banners">
                            <li><span class="especificacao-banner">Dimensões:</span> Largura de 1420px e Altura de 300px.</li>
                            <li><span class="especificacao-banner">Tamanho máximo do arquivo:</span> 5MB.</li>
                        </ul>
                        <p class="banners-informacoes-descricao">Banners que não atenderem a essas especificações não serão aceitos. Certifique-se de que seu banner esteja dentro desses parâmetros para uma exibição ideal!</p>
                    </div>

                    <div class="formulario-upload-banners-c">
                        <form enctype="multipart/form-data" action="" method="post" class="formulario-upload-banners">
                        <input type="hidden" name="tipo_formulario" value="banner_segundo">
                            <input type="file" name="segundo_banner">
                            <button type="submit" class="btn-fazer-upload-banner">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                                    <path d="M440-200h80v-167l64 64 56-57-160-160-160 160 57 56 63-63v167ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                                </svg>
                                <p>Fazer upload</p>
                            </button>
                        </form>
                    </div>

                    <div class="preview-img-banner">
                        <p>Preview do banner:</p>
                        <img src="<?php echo htmlspecialchars($path_segundo_banner); ?>" alt="Preview do Primeiro Banner">
                    </div>
                </div>

            </div> <!-- .container-upload-banners -->

        </div> <!-- .container-banners -->


        

        

    <?php
    } ?>

   
<script src="script/abrircadastrarprodutos.js"></script>

</body>
</html>