<?php
/* Smarty version 3.1.33, created on 2019-03-17 19:00:43
  from '/home1/agnald39/outletducao/adm/view/adm_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8ec38bde8572_62475128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a043d1c0265b98fc8ec4abf91484b601b06ed1ef' => 
    array (
      0 => '/home1/agnald39/outletducao/adm/view/adm_categorias.tpl',
      1 => 1552860019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ec38bde8572_62475128 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Gerenciar categorias </h4>
<hr>
<section id="cart_items">    
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>   
                    <tr class="cart_menu">
                        <td class="description">Nova Categoria</td>
                        <td class="description">Inserir</td>
                        <td class="description"></td>
                    </tr>
                </thead> 
                    <form name="categorias_editar" method="post" action="">
                        <tr class="cart_info">
                            <td class="description">
                                <input type="text" name="cate_nome" class="" placeholder="Insira aqui a nova categoria" required> 
                            </td>
                            <td class="description">
                               <button class="btn btn-primary" name="cate_nova" value="cate_nova"><i class="fa fa-check"></i> Inserir nova </button>
                            </td>
                            <td class="description">
                               
                            </td>
                        </tr>  
                    </form> 
            </table>
        </div>
    </center> 
</section>


<!-- section listar categorias -->

<section id="cart_items">    
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-bordered">
                <thead>   
                    <tr class="cart_menu">
                        <td class="description">Categoria</td>
                        <td class="description" >Editar</td>
                        <td class="description" >Apagar</td>
                    </tr>
                </thead> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                    <form name="categorias_editar" method="post" action="">
                        <tr class="cart_info">
                            <td class="description">
                                <input type="text" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
" class="" required> 
                                <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
">
                            </td>
                            <td class="description">
                                <button class="btn btn-primary" name="cate_editar" value="cate_editar"><i class="fa fa-refresh"></i> Editar</button>
                            </td>
                            <td class="description">
                                <button class="btn btn-danger" name="cate_apagar" value="cate_apagar"> <i class="fa fa-eraser"></i> Apagar</button>
                            </td>
                        </tr>  
                    </form> 
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
            </table>
        </div>
    </center> 
   
</section><?php }
}
