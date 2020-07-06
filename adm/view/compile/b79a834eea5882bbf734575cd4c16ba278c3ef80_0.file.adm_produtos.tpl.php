<?php
/* Smarty version 3.1.33, created on 2020-05-31 10:59:11
  from 'C:\xampp\htdocs\OutletDuCao\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed3b82fc3c8c1_67503236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b79a834eea5882bbf734575cd4c16ba278c3ef80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\OutletDuCao\\adm\\view\\adm_produtos.tpl',
      1 => 1590931239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3b82fc3c8c1_67503236 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Produtos</h4>
<hr>
<section class="row ">  
    <div class="col-md-4"> </div>
    <div class="col-md-4"> </div>
    <div class="col-md-4 text-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Novo Produto</a>
    </div>
</section>
<br>

<!--     exibe mensagem caso nao encontre produtos --->
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
<?php }?>   
<!--  começa lista de produtos  ---->   
<section id="cart_items">  
    <div class="table-responsive cart_info">
        <table class="table table-bordered">
            <thead> 
                <tr class="cart_menu">     
                    <td class="description"  ></td> 
                    <td class="description"  >Produto</td> 
                    <td class="description" >Categoria</td> 
                    <td class="description">Preço</td> 
                    <td class="description"  >Editar</td>      
                    <td class="description" >Extras</td>      
                </tr>  
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                <tr class="cart_info">
                    <td class="description">  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt="" > </td>
                    <td class="description"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
                    <td class="description">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                    <td class="description">
                        <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                            <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <button class="btn btn-primary"> <i class="fa fa-refresh"></i> </button>
                        </form>  
                    </td>
                    <td class="description">
                        <form name="proimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
                            <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                            <button class="btn btn-primary"> <i class="fa fa-file-image-o"></i> </button>
                        </form>  
                    </td>
                </tr>  
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table> 
    </div>
</section> 
<!--  paginação inferior   -->  
<section id="pagincao" class="row">
    <center>
        <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
</section>
<?php }
}
