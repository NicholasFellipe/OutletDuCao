<?php
/* Smarty version 3.1.33, created on 2019-03-26 18:18:12
  from 'C:\xampp\htdocs\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9a97147ddf95_09392741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4aca169a1025971aeec1f166e642be7e628458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\carrinho.tpl',
      1 => 1553635091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a97147ddf95_09392741 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="cart_items">
    <div class="container">      
        <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
            <button  class="btn btn-fefault cart">Comprar mais</button></a>  
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Descricao</td>
                        <td class="price">Preço</td>
                        <td class="quantity">Quantidade</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                        <tr class="cart_info">
                            <td class="cart_product">
                    <picture>   <a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a></picture>
                    </td>
                    <td class="cart_description">
                        <h4><a href=""><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a></h4>

                    </td>
                    <td class="cart_price">
                        <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
                    </td>
                    <td class="cart_quantity">
                        <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <input type="hidden" name="acao" value="addqtd">
                            <button  class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </form> 
                        <p> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 </p>
                        <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <input type="hidden" name="acao" value="remover">
                            <button  class="btn btn-primary"><i class="fa fa-minus"></i></button>   
                        </form>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</p>
                    </td>
                    <td class="cart_delete">
                        <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">

                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                            <input type="hidden" name="acao" value="del">    

                            <button class="btn btn-primary check_out"><i class="fa fa-times"></i></button>
                        </form>
                    </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
<!-- botoes de baixo e valor total -->
<section class="row container" id="total">            
    <div class="col-md-4 text-right"></div>
    <div class="col-md-4 text-right"></div>   
    <!-- botão de limpar-->
    <div class="col-md-4 ">  
        <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
            <input type="hidden" name="acao" value="limpar">
                        <input type="hidden" name="pro_id" value="67">
            <button class="btn btn-primary btn-block"> <i class="fa fa-trash-o"></i> Limpar Tudo</button>
        </form>
    </div>
</section>
<br>
<section id="do_action">
    <div class="container"> 
        <div class="row">
            <section id="dadosfrete">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_info">
                            <li class="single_field">
                            </li>
                            <li class="single_field zip-field">
                                <label> CEP:</label>
                                <input type="text" name="cep_frete"  id="cep_frete" value="" placeholder="digite seu cep" >
                                <!-- campos para tratar  do  frete --->
                                <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly>
                                <input type="hidden" name="frete_valor" id="frete_valor " value="0">
                            </li>
                            <li class="single_field">
                                                            </li>
                        </ul>
                        <button class="btn btn-default check_out" id="buscar_frete"> <i class="fa fa-paper-plane-o"></i> Calcular Frete </button>
                    </div>
                </div>
            </section>
            <section id="confirmarpedido">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li> Sub Total Carrinho <span> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>         
                        </ul>
                        <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">           
                            <!--  mostrar retorno do frete --->
                            <span id="frete"></span>
                            <!-- botão finalzar -->
                            <button class="btn btn-default check_out" type="submit" >  <i class=" fa fa-check"></i> Confirmar Pedido </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section><!--/#do_action--><?php }
}
