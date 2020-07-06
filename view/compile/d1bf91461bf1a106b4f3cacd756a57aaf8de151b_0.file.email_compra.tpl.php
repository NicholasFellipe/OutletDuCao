<?php
/* Smarty version 3.1.33, created on 2019-04-23 21:14:06
  from '/home1/agnald39/outletducao/view/email_compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbfaa4ebe0fe5_23495173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1bf91461bf1a106b4f3cacd756a57aaf8de151b' => 
    array (
      0 => '/home1/agnald39/outletducao/view/email_compra.tpl',
      1 => 1556058990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbfaa4ebe0fe5_23495173 (Smarty_Internal_Template $_smarty_tpl) {
?><h3> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 , obrigado pela sua compra em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
</h3>
<section class="row">
    <h4>
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
        <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
" > Minha conta: <?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
 </a>
    </h4>                              
</section>
<section class="row ">
    <center> 
        <div class="alert alert-success"> Itens do seu pedido </div> 
        <br>     
        <table class="table table-bordered" style="width: 95%;"> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                <tr style="border: 1px solid #b2dba1">
              <!---- <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 "> </td> --->
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
  </td>
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
   </td>
                    <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>  
                </tr>  
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
        </table>
    </center>          
</section><!-- fim da listagem itens -->
<!-- botoes de baixo e valor total -->
<section class="row">                  
    <div class="col-md-4 text-right"></div>
    <div class="col-md-4 text-right"></div>
    <!-- botão de limpar-->
    <div class="col-md-4 text-right  text-danger bg-warning">

        <h4> Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
 </h4>
        <h4> Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
 </h4>
        <h4> Final : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
 </h4>
    </div>   
</section>
<br>
<?php }
}
