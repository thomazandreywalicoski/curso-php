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
function abrirDeletarProdutos() {
    
    let abrirModalDeletarProduto = document.querySelector('.fundo-modal-deletar')

    abrirModalDeletarProduto.style.display = 'flex';
}

function fecharDeletarProdutos() {
    
    let abrirModalDeletarProduto = document.querySelector('.fundo-modal-deletar')

    abrirModalDeletarProduto.style.display = 'none';
    
}

*/


document.addEventListener("DOMContentLoaded", function() {
    const abrirModalEditarProduto = document.getElementById('modal-editar');
    
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
        
    });
    
    


    const abrirModalDeletarProduto = document.getElementById('modal-deletar');
    
    // Verificar o estado do modal no localStorage
    if (localStorage.getItem('modalDeletar') === 'true') {
        abrirModalDeletarProduto.style.display = 'flex';
    }

    // Abrir o modal
    abrirDeletarProdutos = function() {
        abrirModalDeletarProduto.style.display = 'flex';
        localStorage.setItem('modalDeletar', 'true');
    }
 
    // Fechar o modal
    fecharDeletarProdutos = function() {
        abrirModalDeletarProduto.style.display = 'none';
        localStorage.setItem('modalDeletar', 'false');

        const url = new URL(window.location);
        url.search = ''; // Remove parâmetros de consulta
        url.hash = '';   // Remove o fragmento da URL (hash)
        window.history.replaceState({}, document.title, url.toString());
        window.location.reload();
    }

    const naoDeletar = document.getElementById('nao-deletar');
   
        naoDeletar.addEventListener('click', function() {
            
            fecharDeletarProdutos(); // Fecha o modal
        
        });
    

    document.getElementById('deletar-produto').addEventListener('click', function() {
        localStorage.removeItem('modalDeletar'); // Remove o item do localStorage
        window.location.reload();
        
    });

});

