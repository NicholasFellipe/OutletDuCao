<?php
// verifico se não existe a sessao produtos
    
 // caso exista mostro as informações     
if(isset($_SESSION['PRO'])):       
    
       if(!isset($_POST['frete_radio'])):
           
           Rotas::Redirecionar(1, Rotas::pag_Carrinho().'#dadosfrete');
           
           exit('<div class="alert alert-danger">Precisa escolher  o frete </div>');
       endif;
         
       // objeto do template  
        $smarty = new Template();

        // objeto do carrinho 
        $carrinho = new Carrinho();
        
        // passo valores para o template
        $smarty->assign('PRO', $carrinho->GetCarrinho());
        
          // pego valor do frete e valor total com o frete 
        $_SESSION['PED']['frete'] = $_POST['frete_radio'];
        $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->GetTotal());
   
        $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
        $smarty->assign('TOTAL',  Sistema::MoedaBR($carrinho->GetTotal()) );
        $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
        $smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
        $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
        $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
        $smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());

         if (isset($_SESSION['CLI']['cli_cep'])):
        $smarty->assign('NOME_DO_CLIENTE', $_SESSION['CLI']['cli_nome']);
        $smarty->assign('ENDERECO_DO_CLIENTE', $_SESSION['CLI']['cli_endereco']);
        $smarty->assign('NUMERO_DO_CLIENTE', $_SESSION['CLI']['cli_numero']);
        $smarty->assign('BAIRRO_DO_CLIENTE', $_SESSION['CLI']['cli_bairro']);
        $smarty->assign('CIDADE_DO_CLIENTE', $_SESSION['CLI']['cli_cidade']);
        $smarty->assign('UF_DO_CLIENTE', $_SESSION['CLI']['cli_uf']);
        $smarty->assign('CEP_DO_CLIENTE', $_SESSION['CLI']['cli_cep']);
        
    endif;
        
     //   var_dump($_SESSION['PED']);
        // chamar o template 
        $smarty->display('pedido_confirmar.tpl');

      //  echo '<pre>';
        //var_dump($_SESSION['PRO']);
     //   echo '</pre>';   

else:
     echo '<div class="container"><h4 class="alert alert-danger text-center"> Sem produtos no carrinho</h4></div>';
    Rotas::Redirecionar(1, Rotas::pag_Produtos());
        
endif;