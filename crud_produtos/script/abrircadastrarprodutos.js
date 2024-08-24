/*---------------------------------------------------------------------------------*/
/*                FAZ O SITE ABRIR JA COM O PARÂMETRO PAGINA=1                     */
/*---------------------------------------------------------------------------------*/

window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (!urlParams.has('pagina')) {
        urlParams.set('pagina', '1');
        window.location.search = urlParams.toString();
    }
};


/*---------------------------------------------------------------------------------*/
/*                FUNCÃO ATUALIZAR A URL NA PÁGINA SELECIONADA                     */
/*---------------------------------------------------------------------------------*/

function manterParametroPagina() {
    // Cria uma nova URL com a URL atual
    const urlAtual = new URL(window.location.href);
    
    // Extrai o valor do parâmetro 'pagina'
    const paginaAtual = urlAtual.searchParams.get('pagina');
    
    // Remove todos os parâmetros de consulta exceto 'pagina'
    const params = new URLSearchParams();
    if (paginaAtual !== null) {
        params.set('pagina', paginaAtual);
    }

    // Atualiza a URL com o parâmetro 'pagina' e remove o hash
    urlAtual.search = params.toString(); // Define os parâmetros de consulta
    urlAtual.hash = ''; // Remove o fragmento da URL (hash)

    // Atualiza a URL na barra de endereço
    window.history.replaceState({}, document.title, urlAtual.toString());

    // Recarrega a página com a nova URL
    window.location.href = urlAtual.toString();
}



/*---------------------------------------------------------------------------------*/
/*                     FUNCÃO PARA TRAVAR O FUNDO DOS MODAIS                       */
/*---------------------------------------------------------------------------------*/

function travarFundoModal() {

    document.body.style.position = 'fixed';
    document.body.style.top = '0';
    document.body.style.width = '100%';
    document.body.style.height = '100%';
    document.body.style.overflow = 'hidden';
}

/*---------------------------------------------------------------------------------*/
/*                FUNCÃO ABRIR E FECHAR MODAL DE CADASTRAR PRODUTOS                */
/*---------------------------------------------------------------------------------*/

// Abrir modal de cadastrar produtos

function abrirCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'flex';
    travarFundoModal()   
}

// Fechar modal de cadastrar produtos

function fecharCadastrarProdutos() {

    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'none';
    manterParametroPagina()
    apagarPesquisa();
}


/*---------------------------------------------------------------------------------*/
/*            FUNCÃO ABRIR E FECHAR MODAL DE EDITAR E DELETAR PRODUTOS             */
/*---------------------------------------------------------------------------------*/


document.addEventListener("DOMContentLoaded", function() {

    // VISUALIZAR PRODUTOS

    const abrirModalVisualizarProduto = document.getElementById('modal-visualizar');
    
    // Verificar o estado do modal no localStorage

    if (localStorage.getItem('modalVisualizar') === 'true') {
        abrirModalVisualizarProduto.style.display = 'flex';
        travarFundoModal()
    }

    // Abrir o modal de editar produtos

    abrirVisualizarProdutos = function() {

        abrirModalVisualizarProduto.style.display = 'flex';
        localStorage.setItem('modalVisualizar', 'true');
    }
 
    // Fechar o modal de editar produtos

    fecharVisualizarProdutos = function() {

        abrirModalVisualizarProduto.style.display = 'none';
        localStorage.setItem('modalVisualizar', 'false');

        manterParametroPagina()
        apagarPesquisa();
    }



    // EDITAR PRODUTOS

    const abrirModalEditarProduto = document.getElementById('modal-editar');
    
    // Verificar o estado do modal no localStorage

    if (localStorage.getItem('modalOpen') === 'true') {
        abrirModalEditarProduto.style.display = 'flex';
        travarFundoModal()
    }

    // Abrir o modal de editar produtos

    abrirEditarProdutos = function() {

        abrirModalEditarProduto.style.display = 'flex';
        localStorage.setItem('modalOpen', 'true');
    }
 
    // Fechar o modal de editar produtos

    fecharEditarProdutos = function() {

        abrirModalEditarProduto.style.display = 'none';
        localStorage.setItem('modalOpen', 'false');

        manterParametroPagina()
        apagarPesquisa();
    }

    document.getElementById('salvar-edicao').addEventListener('click', function() {
        localStorage.removeItem('modalOpen'); // Remove o item do localStorage
        apagarPesquisa();
        
    });
    
    // DELETAR PRODUTOS

    const abrirModalDeletarProduto = document.getElementById('modal-deletar');
    
    // Verificar o estado do modal no localStorage

    if (localStorage.getItem('modalDeletar') === 'true') {
        abrirModalDeletarProduto.style.display = 'flex';
        travarFundoModal()
    }

    // Abrir o modal de deletar produtos

    abrirDeletarProdutos = function() {

        abrirModalDeletarProduto.style.display = 'flex';
        localStorage.setItem('modalDeletar', 'true'); 
    }
 
    // Fechar o modal de deletar produtos

    fecharDeletarProdutos = function() {

        abrirModalDeletarProduto.style.display = 'none';
        localStorage.setItem('modalDeletar', 'false');

        manterParametroPagina()
        apagarPesquisa();
    }

    // BOTÃO DE NAO DELETAR PRODUTO

    const naoDeletar = document.getElementById('nao-deletar');
   
        naoDeletar.addEventListener('click', function() {
            
            fecharDeletarProdutos(); // Fecha o modal
            apagarPesquisa();
        
        });
    
    // BOTÃO DE DELETAR PRODUTO

    document.getElementById('deletar-produto').addEventListener('click', function() {

        localStorage.removeItem('modalDeletar'); // Remove o item do localStorage

        apagarPesquisa();
        
    });


    /*---------------------------------------------------------------------------------*/
    /*                MOSTAR E OCUTAR BOTÃO PESQUISA E APAGAR PESQUISA                 */
    /*---------------------------------------------------------------------------------*/

    const botaoPesquisar = document.getElementById('botao-pesquisar');
    const botaoApagarPesquisa = document.getElementById('apagar-pesquisa');
    const campoPesquisa = document.getElementById('pesquisa');

    // Função para atualizar a visibilidade dos botões
    function atualizarVisibilidadeBotoes() {

        if (campoPesquisa.value.trim() !== '') {
            botaoPesquisar.style.display = 'none';
            botaoApagarPesquisa.style.display = 'block';
        } else {
            botaoPesquisar.style.display = 'block';
            botaoApagarPesquisa.style.display = 'none';
        }
    }

    // Carregar o valor do campo de pesquisa do localStorage ao carregar a página
    campoPesquisa.value = localStorage.getItem('valorPesquisa') || '';

    atualizarVisibilidadeBotoes(); // Atualiza a visibilidade dos botões com base no valor carregado

    // Atualizar o localStorage e a visibilidade dos botões ao digitar no campo de pesquisa

    campoPesquisa.addEventListener('input', () => {
        localStorage.setItem('valorPesquisa', campoPesquisa.value);
        botaoPesquisar.addEventListener('click', function() {
            atualizarVisibilidadeBotoes();
        });
        
    });

    // Função para apagar a pesquisa

    window.apagarPesquisa = function() {
        
        campoPesquisa.value = ''; // Limpa o campo de pesquisa
        localStorage.removeItem('valorPesquisa'); // Remove o valor do localStorage
        atualizarVisibilidadeBotoes(); // Atualiza a visibilidade dos botões
        campoPesquisa.focus(); // Foca no campo de pesquisa
    };

});

/*---------------------------------------------------------------------------------*/
/*             FUNCÃO MENSAGEM DE AVISOS AO EDITAR E DELETAR PRODUTOS              */
/*---------------------------------------------------------------------------------*/

function fecharAviso() {
    
    let fecharModalAvisos = document.querySelector('.fundo-modal-aviso')

    fecharModalAvisos.style.display = 'none';
    
    localStorage.setItem('modalAviso', 'false');

    manterParametroPagina()
}


 


