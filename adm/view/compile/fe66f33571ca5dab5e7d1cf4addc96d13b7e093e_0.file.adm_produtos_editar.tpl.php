<?php
/* Smarty version 3.1.33, created on 2019-04-06 10:55:39
  from '/home1/agnald39/outletducao/adm/view/adm_produtos_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca8afdb903af1_95181882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe66f33571ca5dab5e7d1cf4addc96d13b7e093e' => 
    array (
      0 => '/home1/agnald39/outletducao/adm/view/adm_produtos_editar.tpl',
      1 => 1554558929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca8afdb903af1_95181882 (Smarty_Internal_Template $_smarty_tpl) {
?>              <!-- plugin editor tinymce----------->
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>      

<h4 class="text-center"> Editar produto </h4>
<hr>
  

<!-- comeÃ§a os campos para form produto    --->
<section class="row" id="camposproduto">
                                           <!--  enctype="multipart/form-data"  --->
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
        
        <div class="col-md-6">
            <label>Produto</label>
            <input type="text" name="pro_nome" id="pro_nome" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_nome'];?>
">
            
        </div>
        
        
        
        <div class="col-md-4">
            <label>Catogoria</label>
         
            <select name="pro_categoria" id="pro_categoria" class="form-control" required>
              
                <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </option>                           
                <option value=""> Escolha</option>                           
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>                    
                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>                                        
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
            </select>
            
            
        </div>
        
        
        
        
        <div class="col-md-2">
            <label>Ativo</label>
            <select name="pro_ativo" id="pro_cativo" class="form-control" required >
              
                <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
 </option>
                <option value=""> Escolha </option>
                <option value="NAO"> NÃ£o </option>
                <option value="SIM"> Sim </option>
                
            </select>
            
            
        </div>
        
        
        
        
        
           <div class="col-md-3">
            <label>Modelo</label>
            <input type="text" name="pro_modelo" id="pro_modelo" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_modelo'];?>
"  >
            
        </div>
        
        
           <div class="col-md-2">
            <label>Referencia</label>
            <input type="text" name="pro_ref" id="pro_ref" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ref'];?>
" >
            
        </div>
        
        
        
           <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="pro_valor" id="pro_valor" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_valor'];?>
">
            
        </div>
        
        
        
           <div class="col-md-2">
            <label>Estoque</label>
            <input type="text" name="pro_estoque" id="pro_estoque" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_estoque'];?>
">
            
          </div>
        
        
        
           <div class="col-md-2">
            <label>Peso</label>
            <input type="text" name="pro_peso" id="pro_peso" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_peso'];?>
">
            
          </div>
        
        
           <div class="col-md-2">
            <label>Altura</label>
            <input type="text" name="pro_altura" id="pro_altura" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_altura'];?>
">
            
          </div>
        
        
           <div class="col-md-2">
            <label>Largura</label>
            <input type="text" name="pro_largura" id="pro_largura" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_largura'];?>
">
            
          </div>
        
        
           <div class="col-md-2">
            <label>Comprimento</label>
            <input type="text" name="pro_comprimento" id="pro_comprimento" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_comprimento'];?>
">
            
          </div>
         <div class="col-md-12">
             <center>
       <picture><img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/calculo.jpg" alt=""  /></picture>
         </center>
         </div>
       
        <div class="col-md-12">
            
            <div class="col-md-4">
               <hr> 
               <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" class="thumbnail" alt="">
                
            </div>
            
            <div class="col-md-4">
            
                 <hr>
                 <label>Imagem Principal</label>
                 <!--- campos para adicionar a imagem---->
                 <input type="file" name="pro_img" class="form-control btn btn-success" id="pro_img">
                 <!----pega o nome da imagem atual --->
                 <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_atual'];?>
">
                 <!----pega o caminho completo da imagem atual --->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">
              

          
            </div>
            
            <div class="col-md-4">
                
           
            
            </div>
            

            
        </div>
        
        
        
           <div class="col-md-12">
            <label>Descrição</label>
           
            <textarea name="pro_desc" id="pro_desc" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desc'];?>
</textarea>

              <?php echo '<script'; ?>
> 
              tinymce.init({ selector:'textarea'  });
              <?php echo '</script'; ?>
> 
          
          
      
            
         
          
          </div>
        
           <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="pro_slug" id="pro_slug"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
">
            
          </div>
        
        <!-- botÃ£o gravar --->
    
      
            
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br>
                <button class="btn btn-primary btn-block" name="btn_gravar"><i class="fa fa-check"></i> Gravar </button>
            </div>

            <div class="col-md-4 text-right">
               
            </div>

    
        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
        
        
    </form>
    
    
    
    
</section>
        
        
        
        <!---bloco de apagar o produto --->
        <section class="row">

            <div class="col-md-4">

            </div>

            <div class="col-md-4">


            </div>

            <div class="col-md-4 text-right">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Produto</button> 

            </div>


            <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">

                <br>
            

                <form name="frm_apagar" method="post" action="">
                    <label>Apagar este produto?</label>

                    <input type="radio" name="confirmar" value="SIM" required>
                    <!---botao que apagar o produto de uma vez --->
                    <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 




                    <input type="hidden" name="pro_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
                    <input type="hidden" name="pro_apagar" value="SIM">
                    
                       <!----pega o caminho completo da imagem atual --->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">

                </form>

            </div>


        </section>
        

<br>
<br>
<br>
<br>
 <?php }
}
