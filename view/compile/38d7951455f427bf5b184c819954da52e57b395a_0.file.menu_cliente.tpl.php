<?php
/* Smarty version 3.1.33, created on 2020-05-31 11:47:38
  from 'C:\xampp\htdocs\OutletDuCao\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed3c38a643823_67672118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d7951455f427bf5b184c819954da52e57b395a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\OutletDuCao\\view\\menu_cliente.tpl',
      1 => 1590931191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3c38a643823_67672118 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">

    <div class="row">
        <h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
    </div>
    <div class="row">
        <div class="text-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-danger check_out"><i class="fa fa-home"></i> Minha Conta</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="btn btn-primary check_out"><i class="fa fa-barcode"></i> Meus Pedidos</a> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="btn btn-danger check_out "><i class="fa fa-pencil-square-o"></i> Meus Dados </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-primary check_out"><i class="fa fa-shopping-cart"></i> Meu Carrinho </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" class="btn btn-danger check_out"><i class="fa fa-key"></i> Alterar Senha </a>
               
        </div>
    </div>
</section>
<hr>
<?php }
}
