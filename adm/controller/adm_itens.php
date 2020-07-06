<?php

// chamar objeto do template
$smarty = new Template();
// se nao existe post do pedido
if (!isset($_POST['cod_pedido'])):
    //  Rotas::Redirecionar(1, Rotas::pag_CLientePedidos());
    exit();
endif;

//chamo a classe de itens
$itens = new Itens();
// pego via post o cod pedido 
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);

// executo a minha SQL
$itens->GetItensPedido($pedido);

// passando dados para o template 
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());

if (isset($_POST['cli_nome']) and isset($_POST['cli_email'])):

    // criando variaveis 
    $cli_nome = $_POST['cli_nome'];
    $cli_email = $_POST['cli_email'];
    // passo variaveis para o template de email de cadastro realizado 

    $smarty->assign('NOME', $cli_nome);
    $smarty->assign('EMAIL', $cli_email);
    $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
    $smarty->assign('SITE', Config::SITE_NOME);
    $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
    // envio email para o cliente 
    $email = new EnviarEmail();
    $assunto = 'Seu Codigo de Rastreamento ' . Config::SITE_NOME;
    $msg = $smarty->fetch('cod_rastreamento.tpl');
    $destinatarios = array($cli_email);
    $email->Enviar($assunto, $msg, $destinatarios);
     // vefico cadastro e dou ,aviso e levo o cliente até o login
    echo '<div class="container"><div class="alert alert-success">Código Enviado com Sucesso!!!</div></div>';
    Rotas::Redirecionar(1, Rotas::pag_PedidosADM());
endif;



$smarty->display('adm_itens.tpl');


//echo '<pre>';
//var_dump($itens->GetItens());
//echo '</pre>';



