// Função para salvar o link clicado no localStorage
function manterBorda(link) {
    localStorage.setItem('linkSelecionado', link.getAttribute('data-id'));
}

// Função para restaurar a borda após o carregamento da página
window.onload = function() {
    const linkSelecionado = localStorage.getItem('linkSelecionado');
    if (linkSelecionado) {
        // Adiciona a borda ao link correspondente
        const link = document.querySelector(`.menu-opcoes-opcao[data-id="${linkSelecionado}"]`);
        if (link) {
            link.classList.add('menu-opcoes-opcao-selecionada');
        }
    }
};







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

// Função para manter os parâmetros 'pagina' e 'busca', remover 'id' e o fragmento
function manterParametroPagina() {
    // Cria uma nova URL com a URL atual
    const urlAtual = new URL(window.location.href);

    // Extrai os valores dos parâmetros 'pagina' e 'busca'
    const paginaAtual = urlAtual.searchParams.get('pagina');
    const buscaAtual = urlAtual.searchParams.get('busca');

    // Cria um novo conjunto de parâmetros de consulta
    const params = new URLSearchParams();

    // Adiciona 'pagina' e 'busca' aos parâmetros de consulta, se existirem
    if (paginaAtual !== null) {
        params.set('pagina', paginaAtual);
    }
    if (buscaAtual !== null) {
        params.set('busca', buscaAtual);
    }

    // Atualiza a URL com os parâmetros de consulta e remove o hash
    urlAtual.search = params.toString(); // Define os parâmetros de consulta
    urlAtual.hash = ''; // Remove o fragmento da URL (hash)

    // Remove o parâmetro 'id', se existir
    urlAtual.searchParams.delete('id');

    // Atualiza a URL na barra de endereço
    window.history.replaceState({}, document.title, urlAtual.toString());

    // Recarrega a página para atualizar o produto
    window.location.href = urlAtual.toString();
}

// Preenche a caixa de pesquisa com o valor do parâmetro 'busca', se existir
function preencheCaixaPesquisa() {
    const urlAtual = new URL(window.location.href);
    const buscaAtual = urlAtual.searchParams.get('busca');
    const pesquisa = document.getElementById('pesquisa');
    if (buscaAtual !== null) {
        pesquisa.value = buscaAtual;
    }
}

// Ao carregar a página, preenche a caixa de pesquisa com o valor do parâmetro 'busca', se existir
window.addEventListener('DOMContentLoaded', (event) => {
    preencheCaixaPesquisa();
});




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
    apagarPesquisa()
}

// Fechar modal de cadastrar produtos

function fecharCadastrarProdutos() {

    let abrirModalCadastrarProduto = document.querySelector('.fundo-modal')

    abrirModalCadastrarProduto.style.display = 'none';
    manterParametroPagina()
   
}


/*---------------------------------------------------------------------------------*/
/*   FUNCÃO ABRIR E FECHAR MODAL LUCROS, VISUALIZAR, EDITAR E DELETAR PRODUTOS     */
/*---------------------------------------------------------------------------------*/


document.addEventListener("DOMContentLoaded", function() {

    // VISUALIZAR LUCROS PRODUTOS

    const abrirModalLucrosProduto = document.getElementById('modal-lucro');
    
    // Verificar o estado do modal no localStorage

    if (localStorage.getItem('modalLucros') === 'true') {
        abrirModalLucrosProduto.style.display = 'flex';
        travarFundoModal()
    }

    // Abrir o modal de lucros

    abrirVisualizarLucrosProdutos = function() {

        abrirModalLucrosProduto.style.display = 'flex';
        localStorage.setItem('modalLucros', 'true');
    }





    // Função para abrir o modal e configurar o localStorage
    //function abrirVisualizarLucrosProdutos() {
    //    abrirModalLucrosProduto.style.display = 'flex';
    //    localStorage.setItem('modalLucros', 'true');
    //}

    // Função para verificar e abrir o modal após a página ser carregada
    //window.addEventListener('load', function() {
    //    if (localStorage.getItem('modalLucros') === 'true') {
    //        abrirModalLucrosProduto.style.display = 'flex';
    //        localStorage.removeItem('modalLucros'); // Remover o valor após exibir o modal
    //    }
    //});



    
 
 
    // Fechar o modal de lucros

    fecharVisualizarLucrosProdutos = function() {

        abrirModalLucrosProduto.style.display = 'none';
        localStorage.setItem('modalLucros', 'false');

        manterParametroPagina()
        
    }

    // BOTÃO REGISTRAR VENDA

    document.getElementById('registrar-venda').addEventListener('click', function() {

        localStorage.removeItem('modalLucros'); // Remove o item do localStorage
        
    });

    // BOTÃO DE CANCELAR REGISTRAR VENDA

    const cancelarVenda = document.getElementById('cancelar-venda');
   
    cancelarVenda.addEventListener('click', function() {
         
    fecharVisualizarLucrosProdutos(); // Fecha o modal
    manterParametroPagina();
          
});



    // VISUALIZAR PRODUTOS

    const abrirModalVisualizarProduto = document.getElementById('modal-visualizar');
    
    // Verificar o estado do modal no localStorage

    if (localStorage.getItem('modalVisualizar') === 'true') {
        abrirModalVisualizarProduto.style.display = 'flex';
        travarFundoModal()
    }

    // Abrir o modal de visualizar produtos

    abrirVisualizarProdutos = function() {

        abrirModalVisualizarProduto.style.display = 'flex';
        localStorage.setItem('modalVisualizar', 'true');
    }
 
    // Fechar o modal de visualizar produtos

    fecharVisualizarProdutos = function() {

        abrirModalVisualizarProduto.style.display = 'none';
        localStorage.setItem('modalVisualizar', 'false');

        manterParametroPagina()
        
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
        
    }

    document.getElementById('salvar-edicao').addEventListener('click', function() {
        localStorage.removeItem('modalOpen'); // Remove o item do localStorage
        
        
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
        
    }

    // BOTÃO DE NAO DELETAR PRODUTO

    const naoDeletar = document.getElementById('nao-deletar');
   
        naoDeletar.addEventListener('click', function() {
            
            fecharDeletarProdutos(); // Fecha o modal
            manterParametroPagina()
           
        
        });
    
    // BOTÃO DE DELETAR PRODUTO

    document.getElementById('deletar-produto').addEventListener('click', function() {

        localStorage.removeItem('modalDeletar'); // Remove o item do localStorage

       
        
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
        const campoPesquisa = document.getElementById('pesquisa');
        
        // Limpa o campo de pesquisa
        campoPesquisa.value = '';
    
        // Remove o valor do localStorage
        localStorage.removeItem('valorPesquisa');
    
        // Cria uma nova URL com a URL atual
        const urlAtual = new URL(window.location.href);
    
        // Remove o parâmetro 'busca'
        urlAtual.searchParams.delete('busca');
    
        // Atualiza a URL na barra de endereço sem recarregar a página
        window.history.replaceState({}, document.title, urlAtual.toString());
    
        // Atualiza a visibilidade dos botões (exemplo)
        atualizarVisibilidadeBotoes();
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


/*---------------------------------------------------------------------------------*/
/*                    FUNCÃO PARA MOSTRAR E OCUTAR PAGINAÇÃO                       */
/*---------------------------------------------------------------------------------*/


// Função para esconder a paginação
function esconderPaginacao() {
    let numeroDePaginas = document.querySelector('.numero-de-paginas');
    let paginasProdutos = document.querySelector('.paginas-produtos');

    if (numeroDePaginas) {
        numeroDePaginas.style.display = 'none';
    }
    if (paginasProdutos) {
        paginasProdutos.style.display = 'none';
    }
}

// Função para mostrar a paginação
function mostrarPaginacao() {
    let numeroDePaginas = document.querySelector('.numero-de-paginas');
    let paginasProdutos = document.querySelector('.paginas-produtos');

    if (numeroDePaginas) {
        numeroDePaginas.style.display = 'flex';
    }
    if (paginasProdutos) {
        paginasProdutos.style.display = 'flex';
    }
}

// Função para verificar o parâmetro 'busca' e ocultar a paginação se necessário
function verificarParametroBusca() {
    const urlAtual = new URL(window.location.href);
    const buscaAtual = urlAtual.searchParams.get('busca');

    if (buscaAtual) {
        esconderPaginacao();
    } else {
        mostrarPaginacao();
    }
}

// Inicializa a verificação do parâmetro 'busca' ao carregar a página
window.addEventListener('DOMContentLoaded', verificarParametroBusca);
 

/*---------------------------------------------------------------------------------*/
/*                         FUNCÃO CONTADOR DE ESTOQUE                              */
/*---------------------------------------------------------------------------------*/


function atualizarEstoque(acao) {
    // Obtém o valor atual do estoque
    let estoqueAtual = parseInt(document.getElementById('estoqueAtual').textContent);

    // Atualiza o estoque com base na ação
    if (acao === 'adicionar') {
        estoqueAtual++;
    } else if (acao === 'remover') {
        estoqueAtual--;
    }

    // Atualiza o valor exibido do estoque
    document.getElementById('estoqueAtual').textContent = estoqueAtual;

    // Atualiza o campo oculto do estoque no formulário
    document.getElementById('estoque').value = estoqueAtual;
}
