<?php
// instancio a classe smarty
$smarty = new Template();
// passo variaveis para o template
$smarty->assign('BANNER', Rotas::ImageLink('banner.jpg', 750,230));

// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
// chamo o template
$smarty->display('home.tpl');

// incluo a pagina de produtos
include_once Rotas::get_Pasta_Controller() .'/produtos.php';

