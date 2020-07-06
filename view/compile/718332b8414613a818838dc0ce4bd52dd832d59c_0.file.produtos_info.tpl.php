<?php
/* Smarty version 3.1.33, created on 2020-05-31 11:02:15
  from 'C:\xampp\htdocs\OutletDuCao\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed3b8e7475460_42256056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718332b8414613a818838dc0ce4bd52dd832d59c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\OutletDuCao\\view\\produtos_info.tpl',
      1 => 1590931193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3b8e7475460_42256056 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <section>
        <style>
            .zoom { overflow: hidden;}.zoom img { max-width: 100%;-moz-transition: all 0.3s; -webkit-transition: all 0.3s;transition: all 0.3s;}.zoom:hover img { -moz-transform: scale(1.5);-webkit-transform: scale(1.5);transform: scale(1.5);}</style>
        <div class="container">
            <div class="row">
                <!--MENU LATERAL-->
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Categorias</h2>
                        <div class="panel-group category-products" id="accordian">                            <?php
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
                        </div>                    </div>
                </div>
                               <div class="col-sm-9 padding-right">
                    <div class="product-details">                        <div class="col-sm-5">
                            <div class="view-product zoom">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <br>   
                                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
                                <div class="col-lg-4 zoom">  
                                   <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="img-thumbnail"></picture>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">                               <picture> <img src="images/product-details/new.jpg" class="newarrival" alt="" /></picture>
                                <h2><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2>
                                <p>Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</p>
                                <span>
                                    <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>
                                    <picture><img src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/todos_animado_125_150.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto."></picture>
                                    <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] > 0) {?>
                                        <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                            <input type="hidden" name="acao" value="add">

                                            <button  class=" btn btn-primary check_out btn-block"> <i class=" fa fa-shopping-cart"></i> Comprar</button>
                                        </form> 
                                    <?php } else { ?>
                                        <form name="carrinho" method="post" action="#" >
                                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                            <input type="hidden" name="acao" value="add">
                                            <button  class=" btn btn-primary check_out btn-block disabled">Comprar</button>
                                        </form> 
                                    <?php }?>
                                </span>
                                <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] > 0) {?>

                                    <p><b>Pronta Entrega </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
 Unidades</p>

                                <?php } else { ?>
                                    <p><b>Indisponivel </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
 Unidades</p>
                                <?php }?>
                                Compartilhar: <i class="fa fa-share"></i>
                                
                                <a href="https://api.whatsapp.com/send?text=Veja esse produdo: <?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">      
                                <button class="btn btn-primary">
                                    <i class="fa fa-whatsapp "></i> WhatsApp </button>
                                  </a>
                            </div>                        </div>
                    </div>                    <div class="category-tab shop-details-tab">                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#reviews" data-toggle="tab">Detalhes do produto</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="reviews" >
                                <div class="col-sm-12">
                                                                        <p> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
 </p>
                                </div>
                            </div>

                        </div>
                    </div>                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</section><?php }
}
