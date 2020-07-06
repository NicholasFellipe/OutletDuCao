<?php
/* Smarty version 3.1.33, created on 2019-03-30 10:14:44
  from '/home1/agnald39/outletducao/view/frete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9f6bc477ea43_19227063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '501ad28f8a8bf0f3abdc0f1d01358b1d642b53b7' => 
    array (
      0 => '/home1/agnald39/outletducao/view/frete.tpl',
      1 => 1553951570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9f6bc477ea43_19227063 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function () {

        // validar frete
        $('#buscar_frete').click(function () {

            var CEP_CLIENTE = $('#cep_frete').val();
            var PESO_FRETE = $('#peso_frete').val();

            if (CEP_CLIENTE.length !== 8) {
                alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');
                $('#frete').addClass(' text-center text-danger');
                $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
                $('#cep_frete').focus();
            } else {


                $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
                $('#frete').addClass(' text-center text-danger');

                // carrego o combo com os bairros

                $('#frete').load('controller/frete.php?cepcliente=' + CEP_CLIENTE + '&pesofrete=' + PESO_FRETE);

            } // fim do IF digitei o CEP


        }); // fim do change


    }); // fim do ready

<?php echo '</script'; ?>
>
<h2>Cálculo de Frete</h2>
<section id="cart_items">
    <div class="container">      
        <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
            <button  class="btn btn-fefault cart">Comprar mais</button></a>  
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Descricao</td>
                        <td class="price">Preço</td>
                        <td class="quantity">Quantidade</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                        <tr class="cart_info">
                            <td class="cart_product">
                    <picture>   <a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a></picture>
                    </td>
                    <td class="cart_description">
                        <h4><a href=""><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a></h4>

                    </td>
                    <td class="cart_price">
                        <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
                    </td>
                    <td class="cart_quantity">
                        <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <input type="hidden" name="acao" value="addqtd">
                            <button  class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </form> 
                        <p> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 </p>
                        <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <input type="hidden" name="acao" value="remover">
                            <button  class="btn btn-primary"><i class="fa fa-minus"></i></button>   
                        </form>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</p>
                    </td>
                    <td class="cart_delete">
                        <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">

                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                            <input type="hidden" name="acao" value="del">    

                            <button class="btn btn-primary check_out"><i class="fa fa-times"></i></button>
                        </form>
                    </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
<!-- botoes de baixo e valor total -->
<section class="row container" id="total">            
    <div class="col-md-4 text-right"></div>
    <div class="col-md-4 text-right"></div>   
    <!-- botão de limpar-->
    <div class="col-md-4 ">  
        <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
            <input type="hidden" name="acao" value="limpar">
                        <input type="hidden" name="pro_id" value="67">
            <button class="btn btn-primary btn-block"> <i class="fa fa-trash-o"></i> Limpar Tudo</button>
        </form>
    </div>
</section>
<br>
<section id="do_action">
    <div class="container"> 
        <div class="row">
            <section id="confirmarpedido">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li> Sub Total Carrinho <span> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>         
                        </ul>
                        <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">           
                            <!--  mostrar retorno do frete --->
                            <?php 

//instancio a classe correios
$destino = $_GET['cepcliente'];
$peso = $_GET['pesofrete'];
// chamando a classe Correios
echo 'valor CEP=> '. $_GET['cepcliente'];
echo 'Valor PESO=> '. $_GET['pesofrete'];
$frete = new Correios($destino, $peso);
//chamo meu metodo para calcular
$calc = $frete->Calcular();
//verifica se foi calculado, se sim retorna xml , caso n�o, mostra erros
                            if (!$calc):
    $error = $frete->error();
    echo $error[0];
else:
    echo '<span class="radio text-danger text-left" > ';
    foreach ($frete->frete as $frete):
        if ($frete['erro'] != 0):
            echo $frete['tipo'] . ' - ';
            echo $frete['Codigo'] . ' - ';
            echo $frete['MsgErro'];
            echo '<br><b> Erro no calculo de frete </b><br>';
        else:
            echo '<br> <input type="radio"  required id="frete_radio" name="frete_radio" value="' . str_replace(',', '.', $frete['valor']) . '" > ' . $frete['valor'] . ' : ' . $frete['tipo'] . ' - Prazo: ' . $frete['Prazo'] . ' dia(s)</b>';
        endif;
    endforeach;
    echo '</span><br>';
endif;
                            ?>
                            <span id="frete"></span>
                            <!-- botão finalzar -->
                            <button class="btn btn-default check_out" type="submit" >  <i class=" fa fa-check"></i> Confirmar Pedido </button>
                        </form>
                    </div>
                </div>
            </section>
        </div> 
    </div>      
</section><?php }
}
