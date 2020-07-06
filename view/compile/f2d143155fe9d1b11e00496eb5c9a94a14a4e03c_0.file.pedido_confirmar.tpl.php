<?php
/* Smarty version 3.1.33, created on 2019-03-26 18:18:29
  from 'C:\xampp\htdocs\loja\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9a9725cc00b1_81961845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d143155fe9d1b11e00496eb5c9a94a14a4e03c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\pedido_confirmar.tpl',
      1 => 1552850377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a9725cc00b1_81961845 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
  "> </a></h4>
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
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Total</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                                </tr>
                                <tr>
                                    <td>Frete</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</td>
                                </tr>

                                <tr>
                                    <td>Valor Final</td>
                                    <td><span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="payment-options">
            <span>
                 <div class="col-md-4 pull-left">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-default check_out" title="">Voltar ao Carrinho</a>
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
