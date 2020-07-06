<?php
// chamar objeto do template
$smarty =  new Template();

// verifico se esta logado 
Login::MenuCliente();

// se nao existe post do pedido
if(!isset($_POST['cod_pedido'])):
    Rotas::Redirecionar(1, Rotas::pag_CLientePedidos());
    
    exit();
endif;

//chamo a classe de itens
$itens =  new Itens();
// pego via post o cod pedido 
$pedido = filter_var($_POST['cod_pedido'],FILTER_SANITIZE_STRING);

// executo a minha SQL
$itens->GetItensPedido($pedido);

// passando dados para o template 
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL',  $itens->GetTotal());

 // caso o status do pagamento for NAO, mostra novamente o botão de pagar 
 if($itens->GetItens()[1]['ped_pag_status']=='NAO'):
     
       // PAGAMENTO PS --------------------------

         $pag = new PagamentoPS();
      
         $pag->PagamentoITENS($_SESSION['CLI'], $itens->GetItens()[1], $itens->GetItens());
        
//         echo '<pre>';    
//         var_dump($itens->GetItens());
//         echo '</pre>';
            
              // passando para o template dados do PS
              $smarty->assign('PS_URL', $pag->psURL);            
              $smarty->assign('PS_COD', $pag->psCod);
              $smarty->assign('PS_SCRIPT', $pag->psURL_Script);
              $smarty->assign('REF',$pedido);
              $smarty->assign('PAG_RETORNO', Rotas::pag_PedidoRetorno());
              $smarty->assign('PAG_ERRO', Rotas::pag_PedidoRetornoERRO());
              $smarty->assign('TEMA', Rotas::get_SiteTEMA());
             
   /// fim do pagamento            

 endif;

// carregar o template 
$smarty->display('clientes_itens.tpl');

//echo '<pre>';
//var_dump($itens->GetItens());
//echo '</pre>';