<?php

// objeto do template 
$smarty =  new Template();

// objeto da classe pedidos 
$pedidos = new Pedidos();


    /// verificar se existe o POST de apagar o pedido
  if(isset($_POST['ped_apagar'])):
      
      $ped_cod = $_POST['cod_pedido'];
     
      if($pedidos->Apagar($ped_cod)):
          
          echo '<div class="alert alert-success"> Pedido apagado com sucesso </div>';
      endif;
      
      
      
  endif;


    // verifico se passei ID na URL
    if (isset(Rotas::$pag[1])):

        $id = (int) Rotas::$pag[1];
        // trazer os pedidos do cliente ID
        $pedidos->GetPedidosCliente($id);

      // verifico se passei o post da data     
    elseif (isset($_POST['data_ini']) and isset($_POST['data_fim'])):
      

        $pedidos->GetPedidosDATA($_POST['data_ini'], $_POST['data_fim']);
    
  // verifico se passei o post referencia
    elseif (isset($_POST['txt_ref'])):

          $ref = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
    
          $pedidos->GetPedidosREF($ref);

    // caso nao tem post algum ou parametro na URL trazer os todos pedidos         
    else:
      
        $pedidos->GetPedidosCliente();
    
    endif;




// passando variaveis para o template 
$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', rotas::pag_ItensADM());

// verifico se existem pedidos 
 if( $pedidos->TotalDados() > 0 ):
     
     
// carregando o template caso exista pedidos 
   $smarty->display('adm_pedidos.tpl');

     
/// caso nao exista resultados nao mostra template      
else:
     
   echo '<div class="alert alert-danger"> Nada foi encontrado  </div>';     
     
endif;



