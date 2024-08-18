function abrirCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'flex';
}

function fecharCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'none';
    window.location.reload();
}


/* 
function abrirEditarProdutos() {
    
    let abrirModalEditarProduto = document.querySelector('.fundo-modal-editar')

    abrirModalEditarProduto.style.display = 'flex';
}

function fecharEditarProdutos() {
    
    let abrirModalEditarProduto = document.querySelector('.fundo-modal-editar')

    abrirModalEditarProduto.style.display = 'none';
}
*/

document.addEventListener("DOMContentLoaded", function() {
    const abrirModalEditarProduto = document.getElementById('modal');

    // Verificar o estado do modal no localStorage
    if (localStorage.getItem('modalOpen') === 'true') {
        abrirModalEditarProduto.style.display = 'flex';
    }

    // Abrir o modal
    abrirEditarProdutos = function() {
        abrirModalEditarProduto.style.display = 'flex';
        localStorage.setItem('modalOpen', 'true');
    }

    // Fechar o modal
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
        window.location.reload();
        
    });


});


