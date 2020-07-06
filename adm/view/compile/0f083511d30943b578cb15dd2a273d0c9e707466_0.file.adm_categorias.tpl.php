<?php
/* Smarty version 3.1.33, created on 2019-03-15 10:13:40
  from 'C:\xampp\htdocs\loja\adm\view\adm_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8ba50468ac63_74993009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f083511d30943b578cb15dd2a273d0c9e707466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_categorias.tpl',
      1 => 1552655619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ba50468ac63_74993009 (Smarty_Internal_Template $_smarty_tpl) {
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
