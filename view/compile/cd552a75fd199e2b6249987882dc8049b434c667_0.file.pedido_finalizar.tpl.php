<?php
/* Smarty version 3.1.33, created on 2019-04-23 21:14:09
  from '/home1/agnald39/outletducao/view/pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbfaa5119aee5_51846265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd552a75fd199e2b6249987882dc8049b434c667' => 
    array (
      0 => '/home1/agnald39/outletducao/view/pedido_finalizar.tpl',
      1 => 1556058982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbfaa5119aee5_51846265 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="cart_items">
    <div class="container">	
        <div class="review-payment">
            <h2 class="alert alert-success">Pedido Realizado com Sucesso!!!</h2>
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
                        <tr>
                            <td class="cart_product">
                               <picture> <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a></picture>
                            </td>
                            <td class="cart_description">
                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
  "> </a></h4>
                                                            </td>
                            <td class="cart_price">
                                <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
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
           </div>
</section>          
              <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3> 
            <div class="col-md-4"></div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-block" onclick=" 
                   PagSeguroLightbox({
    code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
    }, {
    success : function(transactionCode) {
      alert('Transação efetiva - ' + transactionCode);
        window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
    },
    abort : function() {
       alert('Erro no processo de pagamento');
         window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
    }
});  "> Pagar Agora via PagSeguro</button>
                  <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> </picture>
                   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                
            </div>
            <div class="col-md-4"></div>    
        </section>  <?php }
}
