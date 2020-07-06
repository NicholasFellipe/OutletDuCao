<?php
/* Smarty version 3.1.33, created on 2019-03-19 20:16:52
  from '/home1/agnald39/outletducao/adm/view/adm_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c917864dacf68_37778049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '743d0d9b26929f53186a7809cb8e68c9ae0f624b' => 
    array (
      0 => '/home1/agnald39/outletducao/adm/view/adm_itens.tpl',
      1 => 1552860020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c917864dacf68_37778049 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Dados do pedido</h4>
<!-- informações sobre o pedido -->
<section class="row" id="cart_items">
    <div class="table-responsive cart_info">
        <center>
            <table class="table table-bordered" style="width: 90%">
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
            </table>
        </center>  
    </div>
</section>
<!-- listagem dos itens --->
<section class="row" id="cart_items">
    <div class="table-responsive cart_info">
        <center>
            <table class="table table-bordered" style="width: 90%">    
                <tr class="cart_menu">
                    <td class="description"></td>
                    <td class="description">Item</td>
                    <td class="description">Valor Uni</td>
                    <td class="description">X</td>
                    <td class="description">Sub</td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr class="cart_info">  
                        <td class="description"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
                        <td class="description"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
                        <td class="description text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                        <td class="description text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                        <td class="description text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </table>
        </center> 
    </div>
</section>            
<section class="row" id="resumo">
    <center>
        <table class="table table-bordered" style="width: 90%">
            <tr class="cart_info">
                <td class=" description text-danger"> <b>Frete:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
                <td class="description text-danger"> <b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                <td class="description text-danger"> <b>Final:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
            </tr>  
        </table>
    </center>
</section>


            
            
<section class="row" id="cart_items">
    <div class="table-responsive cart_info">
        <center>
            <table class="table table-bordered" style="width: 90%">
                <tr class="cart_menu">
                    <td class="description text-center">Código de Rastreamento</td>
                </tr>
                <tr class="cart_info text-center"> 
                    <td class="description">
                        <form name="deletar" method="post" action="">
                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                            <!-- Small modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-paper-plane-o"></i> Enviar Código</button>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                     <form name="cadcliente" id="cadcliente" method="post" action="" > 
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Enviar Código de Rastreamento</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                           

                                                <p><?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['cli_email'];?>
</p>

                                                                                                <div class="form-group">
                                                    <label>Código de Rastreamento:</label>
                                                    <input type="text" name="cli_nome" class="" placeholder="Codigo de Rastreamento" minlength="3" required>
                                                </div> 
                                                                                                                                                <div class="form-group">
                                                   
                                                    <input type="hidden" name="cli_email" class="" value="<?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['cli_email'];?>
" placeholder="Email cliente" required>
                                                </div>
                                                                                        </div>
                                        <div class="modal-footer">
                                            
                                            <div class="form-group"> 
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-window-close-o"></i> Cancelar </button>
                                                <button type="submit" class="btn btn-primary"> <i class="fa fa-paper-plane-o"></i> Enviar Código</button>
                                            </div>
                                           
                                        </div>
                                    </div><!-- /.modal-content -->
                                     </form>
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </form> 
                    </td>
                </tr>


            </table>
        </center>  
    </div>
</section>
<?php }
}
