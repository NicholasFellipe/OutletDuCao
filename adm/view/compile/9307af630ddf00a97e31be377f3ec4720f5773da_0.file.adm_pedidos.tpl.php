<?php
/* Smarty version 3.1.33, created on 2019-04-06 10:30:06
  from '/home1/agnald39/outletducao/adm/view/adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca8a9deab9915_52803911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9307af630ddf00a97e31be377f3ec4720f5773da' => 
    array (
      0 => '/home1/agnald39/outletducao/adm/view/adm_pedidos.tpl',
      1 => 1554557392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca8a9deab9915_52803911 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Gerenciar Pedidos </h4>
<hr>

<section id="cart_items">
    <div class="container">
        <!---  faz  uma busca entre datas --->
        <label> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">
            <div class="col-md-3">            
                <input type="date" name="data_ini" required>
            </div> 
            <div class="col-md-3"> 
                <input type="date" name="data_fim" required>
            </div> 
            <div class="col-md-3"> 
                <button class="btn btn-primary"> Buscar </button>
            </div> 
            <div class="col-md-3">    
            </div> 
        </form>
    </div>
</section>
<br>
<section id="cart_items">
    <div class="container">
        <!--- faz  uma busca  por texto ---> 
        <label> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">  
            <div class="col-md-3">
                <input type="text" name="txt_ref" class="" required>   
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary"> Buscar </button>   
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </form>
    </div>
</section>
<hr>
<section id="cart_items">   
   
        <center>
            <div class="table-responsive cart_info">
                <table class="table table-bordered ">  
                    <thead> 
                        <tr class="cart_menu">
                            <td class="description">Cliente</td>
                            <td class="description">Data</td>
                            <td class="description">Hora</td>
                            <td class="description">Ref</td>
                            <td class="description">Status</td>
                            <td class="description"></td>
                            <td class="description"></td>
                            <td class="description">Email</td>

                        </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                        <tr> 
                            <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</td>
                            <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                            <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                            <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
                                <td ><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
                                <?php } else { ?>
                                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                            <?php }?>
                            <td class="description">
                                <!---- formulario que vai para itens do pedido ---->
                                <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                                    <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                                    <button class="btn btn-primary"><i class=" fa fa-list"></i> Detalhes</button>
                                </form> 
                            </td>
                            <td class="description">
                                <form name="deletar" method="post" action="">
                                    <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                                    <button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="fa fa-trash-o"></i> </button>
                                </form>
                            </td> 
                            <td  class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_email'];?>
</td> 
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        </center>  
   
</section>
<?php }
}
