<?php 

// objeto do template 
$smarty =  new Template();

// verifico se esta logado 
Login::MenuCliente();

// objeto da classe pedidos 
$pedidos = new Pedidos();
// trazer os pedidos 
$pedidos->GetPedidosCliente($_SESSION['CLI']['cli_id']);

// passando variaveis para o template 
$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', rotas::pag_CLienteItens());

$smarty->display('clientes_pedidos.tpl');

