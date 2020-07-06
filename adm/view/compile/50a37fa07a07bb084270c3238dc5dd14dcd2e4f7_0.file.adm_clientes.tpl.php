<?php
/* Smarty version 3.1.33, created on 2019-03-18 11:27:51
  from '/home1/agnald39/outletducao/adm/view/adm_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8faae7562011_23093220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50a37fa07a07bb084270c3238dc5dd14dcd2e4f7' => 
    array (
      0 => '/home1/agnald39/outletducao/adm/view/adm_clientes.tpl',
      1 => 1552860019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8faae7562011_23093220 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Clientes </h4>
<hr>

<!--- listando clientes ---->
<section id="cart_items">  
    <div class="table-responsive cart_info">
        <table class="table table-bordered">
            <thead> 
        
        <tr class="cart_menu">
            <td class="description"></td>
            <td class="description">Nome</td>
            <td class="description">Email </td>
            <td class="description">Fone </td>
            <td class="description">Data cad</td>
            <td class="description"></td>
            
        </tr> 
            </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
        
            <tr class="cart_info">
            <td class="description"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 " class="btn btn-primary"><i class=" fa fa-archive"></i> Pedidos</a> </td>
            <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
            <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
            <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_fone'];?>
</td>
            <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_data_cad'];?>
</td>
            <td class="description">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-primary"><i class="fa fa-eye"></i> Ver </a>
                
            </td>
            
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
    </center >
    
</section><?php }
}
