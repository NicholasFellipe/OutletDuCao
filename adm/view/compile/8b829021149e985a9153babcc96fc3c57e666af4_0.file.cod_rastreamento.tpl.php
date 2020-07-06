<?php
/* Smarty version 3.1.33, created on 2019-03-15 19:13:29
  from 'C:\xampp\htdocs\loja\adm\view\cod_rastreamento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8c238954d474_89121723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b829021149e985a9153babcc96fc3c57e666af4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\cod_rastreamento.tpl',
      1 => 1552687995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8c238954d474_89121723 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <link rel="stylesheet" href="../../view/tema/bootstrap-4/css/bootstrap.min.css" >
        <title></title>
    </head>
    <body>
        <h3>Olá, seu código de rastreamento é  <b style="color: red"><?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
</b> , referente ao pedido:</h3>
<br>
        <table border=1>
            <tr>
                <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
                <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
                <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
                <td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>
            </tr>     
        </table>
<br>
        <table class="table table-bordered">    
            <tr>
                <td ></td>
                <td >Item</td>
                <td >Valor Uni</td>
                <td >X</td>
                <td >Sub</td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                <tr >  
                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""></td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
                    <td class=" text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                    <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                    <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </table>
<br>   
    <table class="table table-bordered">
        <tr class="alert alert-success">
            <td class="text-danger"> <b>Frete: </b>R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
            <td class="text-danger"> <b>Total: </b>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
            <td class="text-danger"> <b>Final: </b>R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
        </tr>  
    </table>
<h3>Obrigado por comprar no <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>
<br>
<h3>Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a></h3>

<?php echo '<script'; ?>
 src="../../view/tema/bootstrap-4/jquery-slim.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../view/tema/bootstrap-4/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    </body>
</html>



<?php }
}
