function abrirCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.modal-cadastrar-produto')

    abrirModalCadastrarProduto.style.display = 'flex';
}

function fecharCadastrarProdutos() {
    
    let abrirModalCadastrarProduto = document.querySelector('.modal-cadastrar-produto')

    abrirModalCadastrarProduto.style.display = 'none';
}

function continuarModalCadastroAberto() {

    let continuarCadastroAberto = document.querySelector('.modal-cadastrar-produto')

    continuarCadastroAberto.style.display = 'block';
}