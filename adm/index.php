<?php
// verifo  se iniciou a ssesão
if(!isset($_SESSION)):
    session_start();
endif;

// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');


// carrego o auto load
require '../lib/autoload.php';

/// verifico se o ADM está LOGADO
if(!Login::LogadoADM()):
     
    Rotas::Redirecionar(1, 'login.php');
    
    
     exit('<h2>Erro! Acesso negado</h2> ');
endif;


// chamo a classe  do template
$smarty =  new Template();
// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();


// passo valores para o meu template 
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());
$smarty->assign('PAG_ADM_CLIENTE', Rotas::pag_ClientesADM());
$smarty->assign('PAG_ADM_PEDIDOS', Rotas::pag_PedidosADM());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriasADM());
$smarty->assign('PAG_ADM_PRODUTOS', Rotas::pag_ProdutosADM());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::LogadoADM());
$smarty->assign('PAG_LOGOFF', Rotas::get_SiteADM() .'/logoff');
$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() .'/adm_senha');

$smarty->assign('USER', $_SESSION['ADM']['user_nome']);    
$smarty->assign('DATA', $_SESSION['ADM']['user_data']);    
$smarty->assign('HORA', $_SESSION['ADM']['user_hora']);   


// chamo o template
$smarty->display('adm_index.tpl');
       





