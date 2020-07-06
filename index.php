<?php

// verifo  se iniciou a ssesão
if (!isset($_SESSION)):
    session_start();
endif;

// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');

// carrego o auto load
require './lib/autoload.php';



    

// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();

$smarty = new Template();
// objeto produtos
$produtos = new Produtos();
$carrinho = new Carrinho();
    $sum = 0;
// verifico se passei ID da categoria se passei mostro itens da categoria
if (isset(Rotas::$pag[1])):
    $produtos->GetProdutosCate((int) Rotas::$pag[1]);

else:
    // se nao passei mostro  tudo
    $produtos->GetProdutosRecomendados();
endif;

$smarty->assign('PRO_REC', $produtos->GetItens());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
// passo valores para o meu template 
$smarty->assign('H2', 'Adriano Souza -  adrianosites.com.br');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());


if($carrinho->GetCarrinhoIcone()!=0){
  // objeto  da classe carrinho    
    foreach ($carrinho->GetCarrinho() as $value) {
        $sum +=$value['pro_qtd'];
    }
    $smarty->assign('QTD_CARRINHO', $sum);  
}

$smarty->assign('QTD_CARRINHO', $sum);
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CLIENTE_CONTA', Rotas::pag_ClienteConta());
$smarty->assign('PAG_PEDIDO_FINALIZADO', Rotas::pag_PedidoFinalizar());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('PAG_LOGIN', Rotas::pag_ClienteLogin());
$smarty->assign('PAG_PESQUISA', Rotas::pag_Pesquisa());
$smarty->assign('PAG_TERMOS_SITE', Rotas::pag_Termos_e_condicoes());
$smarty->assign('PAG_POLITICA_DEVOLUCAO', Rotas::pag_Politica_de_Devolucao());
$smarty->assign('PAG_POLITICA_PRIVACIDADE', Rotas::pag_Politica_de_Privacidae());
$smarty->assign('PAG_SISTEMA_COBRANCA', Rotas::pag_Sistema_Cobranca());
$smarty->assign('PAG_FAQ', Rotas::pag_Perguntas_Frequentes());

//if(Rotas::pag_Carrinho().'?cepcliente'==TRUE):
//    echo '<script> $("#header").hide();</script>';
//endif;

if (Login::Logado()):
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
endif;

//$email = new EnviarEmail ();
//
//if(isset($_POST['env'])):
//  $email->EnvEmail();  
//endif;
// chamo o template
$smarty->display('index.tpl');
