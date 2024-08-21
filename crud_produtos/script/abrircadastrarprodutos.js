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

