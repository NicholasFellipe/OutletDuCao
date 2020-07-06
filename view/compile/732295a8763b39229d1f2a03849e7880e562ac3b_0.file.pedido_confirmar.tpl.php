<?php
/* Smarty version 3.1.33, created on 2019-04-23 21:13:36
  from '/home1/agnald39/outletducao/view/pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbfaa3058aab9_01086567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732295a8763b39229d1f2a03849e7880e562ac3b' => 
    array (
      0 => '/home1/agnald39/outletducao/view/pedido_confirmar.tpl',
      1 => 1556058993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbfaa3058aab9_01086567 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="cart_items">
    <div class="container">	
        <div class="review-payment">
            <h2>Revisão & Pagamento</h2>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Preço</td>
                        <td class="quantity">Quantidade</td>
                        <td class="total">Total</td>  
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
                    <picture> <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a></picture>
                    </td>
                    <td class="cart_description">
                        <h4> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
                        <!--<p>Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</p>-->
                    </td>
                    <td class="cart_price">
                        <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
                    </td>
                    <td class="cart_quantity">
                        <p> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 </p>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</p>
                    </td> 
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr>
                   
                        <table class="table table-condensed total-result">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="description"><h3 class="text-center"><i class="fa fa-paper-plane"></i> Dados para entrega</h3></td>
                                    <td class="price"><h3 class="text-center"><i class="fa fa-paper-plane"></i> SubTotal</h3></td>
                                </tr>
                            </thead>
                            <tr class="cart_info">
                                <td class="description">
                                    
                                    <h4><p>Nome: <?php echo $_smarty_tpl->tpl_vars['NOME_DO_CLIENTE']->value;?>
</p></h4>
                                    <h4><p>Endereço: <?php echo $_smarty_tpl->tpl_vars['ENDERECO_DO_CLIENTE']->value;?>
</p></h4>
                                    <h4><p>Número: <?php echo $_smarty_tpl->tpl_vars['NUMERO_DO_CLIENTE']->value;?>
</p></h4>
                                    <h4><p>Bairro: <?php echo $_smarty_tpl->tpl_vars['BAIRRO_DO_CLIENTE']->value;?>
</p></h4>
                                    <h4><p>Cidade: <?php echo $_smarty_tpl->tpl_vars['CIDADE_DO_CLIENTE']->value;?>
 </p></h4>
                                    <h4><p>Estado: <?php echo $_smarty_tpl->tpl_vars['UF_DO_CLIENTE']->value;?>
</p></h4>
                                    <h4><p>CEP: <?php echo $_smarty_tpl->tpl_vars['CEP_DO_CLIENTE']->value;?>
</p></h4>
                                    
                                </td> 
                                <td class="price text-success">
                                    <h4><p>Total: R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</p></h4>
                                    <h4><p>Frete: R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</p></h4>
                                    <h4><p><span>Valor Final R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</span></p></h4>
                                </td>

                            </tr>

                        </table>
                <h3><p class="alert alert-warning">* Endereço do seu cadastro, se tiver algo errado favor alterar!</p></h3>
                    </td>




                </tr>




                </tbody>
            </table>
        </div>
        <div class="payment-options">
            <span>
                <div class="col-md-4 pull-left">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-default check_out" title=""><i class="fa fa-backward"></i> Voltar ao Carrinho</a>
                </div>
            </span>
            <span>
                <div class="col-md-4 pull-right">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
" class="btn btn-default check_out" title=""> <i class="fa fa-check"></i> Finalizar</a> 
                </div>
            </span>

        </div>
    </div>
</section> <!--/#cart_items-->

<!-- botoes e opções de cima -->

<br>

<?php }
}
