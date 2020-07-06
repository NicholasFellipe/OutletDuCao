<?php
/* Smarty version 3.1.33, created on 2019-03-26 14:48:34
  from 'C:\xampp\htdocs\loja\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9a65f2257ab8_47985326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4924bcb350fdce42e50638f7f6e7710fa79c07ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\home.tpl',
      1 => 1552865070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a65f2257ab8_47985326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="slider">    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                                                <div class="item active">
                            <div class="col-sm-6">
                                <div class="logo pull-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><picture><img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/logo.jpg" alt="" style="width: 139px;" /></picture></a>
                                </div>
                                <h2>Os melhores produtos para seu melhor amigo</h2>
                                <p>Só a Outlet Du Cão tem uma grande variedade de produtos pet voltadas ao melhor amigo. </p>
                               <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/carousel-dog.jpg" class="girl img-responsive" alt="" /></picture>
                            </div>
                            <div class="col-sm-6">
                             <picture>   <img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/carousel-1.jpg" class="girl img-responsive" alt="" /></picture>
                            </div>
                        </div>
                        
                                                <div class="item">
                            <div class="col-sm-6">
                                <div class="logo pull-right">
                                  <picture>  <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/logo.jpg" alt="" style="width: 139px;" /></a></picture>
                                </div>
                                <h2>Compra protegida</h2>
                                <p>Todas suas compras estão protegidas, além de poder pagar com cartão, boleto ou saldo no Pag Seguro. </p>
                               <picture> <img src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/todos_animado_125_150.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto."></picture>
                            </div>
                            <div class="col-sm-6">
                             <picture>   <img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/carousel-2.jpg" class="girl img-responsive" alt="" /></picture>
                            </div>
                        </div>
                        
                                                <div class="item">
                            <div class="col-sm-6">
                                <div class="logo pull-right">
                                 <picture>   <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/logo.jpg" alt="" style="width: 139px;" /></a></picture>
                                </div>
                                <h2>Envio para todo o Brasil</h2>
                                <p>Seu pedido aonde você estiver!. </p>
                               <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/carousel-mapa.jpg" class="girl img-responsive" alt="" /></picture>
                            </div>
                            <div class="col-sm-6">
                             <picture>   <img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/carousel-3.jpg" class="girl img-responsive" alt="" /></picture>
                            </div>
                        </div>
                        
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><?php }
}
