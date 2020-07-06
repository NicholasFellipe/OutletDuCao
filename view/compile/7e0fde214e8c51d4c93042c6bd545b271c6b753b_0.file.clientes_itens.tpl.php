<?php
/* Smarty version 3.1.33, created on 2019-04-02 09:03:40
  from '/home1/agnald39/outletducao/view/clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca34f9c171db9_39791780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e0fde214e8c51d4c93042c6bd545b271c6b753b' => 
    array (
      0 => '/home1/agnald39/outletducao/view/clientes_itens.tpl',
      1 => 1554123397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca34f9c171db9_39791780 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Dados do pedido</h4>

<!-- informações sobre o pedido -->
<section class="container" id="cart_items">
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed" >
                <thead>
                    <tr class="cart_info">
                        <td class="description"><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
                        <td class="description"><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
                        <td class="description"><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
                        <td class="description"><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>
                    </tr>  
                </thead>
            </table>
        </div>
    </center>
</section>
<!-- listagem dos itens --->
<section class="container" id="cart_items">
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>   
                    <tr class="cart_menu">
                        <td class="description"></td>
                        <td class="description">Item</td>
                        <td class="description">Valor Uni</td>
                        <td class="description">Quantidade</td>
                        <td class="description">SubTotal</td>
                    </tr>
                </thead>   
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr>
                        <td class="description"><picture><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </picture></td>
                        <td class="description"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
                        <td class="description"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                        <td class="description"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                        <td class="description"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </center>
</section>
<section class="container" id="cart_items">
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed" >
                <thead>
                    <tr class="cart_info">
                        <td class="description"> <b>Frete:</b> R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
                        <td class="description"> <b>Total:</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                        <td class="description"> <b>Valor Final:</b> R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                    </tr>  
                </thead>
            </table>
        </div>
    </center>
</section>  
<?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'NAO') {?>          
    <!--  modos de pagamento e outras informações --> 
    <section class="container">
        <h3 class="text-center"> Formas de pagamento </h3>     
        <div class="col-md-4">
        </div>
        <!-- botao de pagamento  -->
        <div class="col-md-4">
            <button class="btn btn-primary btn-lg btn-block" onclick="
                    PagSeguroLightbox({
                        code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
                    }, {
                        success: function (transactionCode) {
                            alert('Transação efetiva - ' + transactionCode);
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                                        },
                                        abort: function () {
                                            alert('Erro no processo de pagamento');
                                            window.location = '<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                                                        }
                                                    });

                    ">
                Pagar Agora via PagSeguro</button>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
        </div>
        <div class="col-md-4">
        </div>
    </section>
    <?php }?>
<section class='container'>
    <br>
    <center>              
        <img src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/todos_estatico_550_100.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto.">                                      
    </center>
    <br>
</section><?php }
}
