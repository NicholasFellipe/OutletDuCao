<?php

// echo count($_SESSION['PRO']);
// caso exista mostro as informações     
if (isset($_SESSION['PRO']) > 0):
    $alt = 0;
    $larg = 0;
    $comp = 0;
    $produtos = new Produtos();
    // chamando objeto do template
    $smarty = new Template();
    // objeto  da classe carrinho 
    $carrinho = new Carrinho();
    // passando alguma variaveis para o template 
    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PESO', number_format($carrinho->GetPeso(), 3, '.', ''));
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
    $smarty->assign('PROD', $produtos->GetItens());
    $smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());

     $smarty->assign('LOGADO', Login::Logado());

    if (isset($_SESSION['CLI']['cli_cep'])):
        $smarty->assign('CEP_DO_CLIENTE', $_SESSION['CLI']['cli_cep']);
    endif;


    // mostrando  o template 
    $smarty->display('carrinho.tpl');
// caso a contagem do array $_SESSION['PRO'] não seja maior que zero
else:
    echo '<div class="container"><h4 class="alert alert-danger text-center"> Sem produtos no carrinho</h4></div>';
    Rotas::Redirecionar(1, Rotas::pag_Produtos());       
endif;