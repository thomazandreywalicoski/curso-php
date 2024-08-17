function abrirCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'flex';
}

function fecharCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'none';
}




function abrirEditarProdutos() {
    
    let abrirModalEditarProduto = document.querySelector('.fundo-modal-editar')

    abrirModalEditarProduto.style.display = 'flex';
}

function fecharEditarProdutos() {
    
    let abrirModalEditarProduto = document.querySelector('.fundo-modal-editar')

    abrirModalEditarProduto.style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    if (id) {
        // Código para abrir o modal e carregar dados do produto
        openModalWithProduct(id);
    }
});
