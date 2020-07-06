<?php
/* Smarty version 3.1.33, created on 2019-03-26 23:27:27
  from 'C:\xampp\htdocs\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9adf8fc66022_11405895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e43319338037d61ae19a0944e2375360bbb269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos.tpl',
      1 => 1553653641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9adf8fc66022_11405895 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4> 
<?php }?>  
<section>
    <div class="container">
        <div class="row">
                        <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Categorias</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PROD']->value;?>
">Todas as Categorias</a></h4>
                            </div>
                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></h4>
                                </div>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>                </div>
            </div>
                                    <div class="col-sm-9 padding-right">
                                <div class="features_items">
                    <h2 class="title text-center">Produtos</h2>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?> 
                            <div class="" id="pularliha">
                            <?php }?> 
                                                        <div class="col-xs-6 col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" /></picture>
                                            <h2>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h2>
                                            <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</p>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Ver o produto</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h2>
                                                <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</p>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Ver o pruduto</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="acao" value="add">
                                                <button  class=" btn btn-default check_out btn-block"><i class="fa fa-shopping-cart"></i> Comprar </button>
                                            </form> 
                                            <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="acao" value="addcarrinho">


                                                <button  class=" btn btn-default check_out btn-block"><i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho </button>
                                                
                                            </form> 
                                                                                    </ul>
                                    </div>

                                </div>
                            </div>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['i']->value%3 == 0) {?> 
                            </div>
                            <?php $_smarty_tpl->_assignInScope('i', 0);?> 
                        <?php }?>                  
                                                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>                <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

            </div>
                    </div>
    </div>
</section><?php }
}
