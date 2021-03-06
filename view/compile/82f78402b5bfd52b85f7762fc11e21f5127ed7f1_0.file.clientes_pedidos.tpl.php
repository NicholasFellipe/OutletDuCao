<?php
/* Smarty version 3.1.33, created on 2020-05-31 11:48:15
  from 'C:\xampp\htdocs\OutletDuCao\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed3c3af2e1a87_16923741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82f78402b5bfd52b85f7762fc11e21f5127ed7f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\OutletDuCao\\view\\clientes_pedidos.tpl',
      1 => 1590931191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3c3af2e1a87_16923741 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="container" id="cart_items">

    <h4 class="text-center">Meus Pedidos</h4>

    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>    
                    <tr class="cart_menu">
                        <td class="description">Data</td>
                        <td class="description">Hora</td>
                        <td class="description">Ref</td>

                        <td class="description">Status</td>
                        <td></td>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr>

                        <td class="description" ><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                        <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                        <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>


                        <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
                            <td class="description" style="width: 15%"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Pago') {?>
                            <td class="description" style="width: 15%"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
                            <?php } else { ?>
                            <td class="description" style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                        <?php }?>

                    <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">

                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <td class="description" style="width: 10%"><button class="btn btn-primary"><i class="fa fa-list"></i> Detalhes</button></td>

                    </form>    

                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </table>
        </div>
    </center>


</section>
<?php }
}
