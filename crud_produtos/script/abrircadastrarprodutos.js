/*---------------------------------------------------------------------------------*/
/*                FUNCÃO ABRIR E FECHAR MODAL DE CADASTRAR PRODUTOS                */
/*---------------------------------------------------------------------------------*/

// Abrir modal de cadastrar produtos

function abrirCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'flex';
}

// Fechar modal de cadastrar produtos

function fecharCadastrarProdutos() {

    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'none';
    window.location.reload();
}


/*---------------------------------------------------------------------------------*/
/*            FUNCÃO ABRIR E FECHAR MODAL DE EDITAR E DELETAR PRODUTOS             */
/*---------------------------------------------------------------------------------*/


document.addEventListener("DOMContentLoaded", function() {

    // EDITAR PRODUTOS

    const abrirModalEditarProduto = document.getElementById('modal-editar');
    
    // Verificar o estado do modal no localStorage

    if (localStorage.getItem('modalOpen') === 'true') {
        abrirModalEditarProduto.style.display = 'flex';
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

        const url = new URL(window.location);
        url.search = ''; // Remove parâmetros de consulta
        url.hash = '';   // Remove o fragmento da URL (hash)
        window.history.replaceState({}, document.title, url.toString());
        window.location.reload();
    }

    document.getElementById('salvar-edicao').addEventListener('click', function() {
        localStorage.removeItem('modalOpen'); // Remove o item do localStorage
        
    });
    
    // DELETAR PRODUTOS

    const abrirModalDeletarProduto = document.getElementById('modal-deletar');
    
    // Verificar o estado do modal no localStorage

    if (localStorage.getItem('modalDeletar') === 'true') {
        abrirModalDeletarProduto.style.display = 'flex';
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

        const url = new URL(window.location);
        url.search = ''; // Remove parâmetros de consulta
        url.hash = '';   // Remove o fragmento da URL (hash)
        window.history.replaceState({}, document.title, url.toString());
        window.location.reload();
    }

    // BOTÃO DE NAO DELETAR PRODUTO

    const naoDeletar = document.getElementById('nao-deletar');
   
        naoDeletar.addEventListener('click', function() {
            
            fecharDeletarProdutos(); // Fecha o modal
        
        });
    
    // BOTÃO DE DELETAR PRODUTO

    document.getElementById('deletar-produto').addEventListener('click', function() {

        localStorage.removeItem('modalDeletar'); // Remove o item do localStorage
        window.location.reload();
        
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

    const url = new URL(window.location);
    url.search = ''; // Remove parâmetros de consulta
    url.hash = '';   // Remove o fragmento da URL (hash)
    window.history.replaceState({}, document.title, url.toString());
    window.location.reload();
}


 


