<?php

// chamo o objeto template
$smarty = new Template();
// objeto produtos
$produtos = new Produtos();

// verifico se passei ID da categoria se passei mostro itens da categoria
if (isset(Rotas::$pag[1])):
    $produtos->GetProdutosCate((int) Rotas::$pag[1]);

else:
    // se nao passei mostro  tudo
    $produtos->GetProdutos();
endif;

///echo $produtos->GetItens()['pro_nome'];
// passo variavies para o template TPL    
$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('PAG_PROD', Rotas::pag_Produtos());
//$smarty->assign('REDIRECIONAR', Rotas::Redirecionar(1, Rotas::pag_Produtos()));
if ($produtos->TotalDados() < 1):
    Rotas::Redirecionar(1, Rotas::pag_Produtos());
endif;
//echo Rotas::get_ImageURL();
// chamo o template
$smarty->display('produtos.tpl');

//echo '<pre>';
//var_dump($produtos->GetItens());
//echo '</pre>';
