<?php
/* Smarty version 3.1.33, created on 2019-04-23 19:39:04
  from '/home1/agnald39/outletducao/view/clientes_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf940866b122_98912385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b87c8271cafdb4c2afa90e30fc10910836ff109' => 
    array (
      0 => '/home1/agnald39/outletducao/view/clientes_dados.tpl',
      1 => 1556059103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf940866b122_98912385 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <h3 class="title text-center">Meus Dados</h3>
    </div>
    <div class="row">
        <div class="login-form"><!--login form-->
            <form name="cadcliente" id="cadcliente" method="post" action="" > 
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Nome:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="" minlength="3" required>   
                    </div> 
                </div> 

                <div class="form-group">
                    <div class="col-md-4">
                        <label>Sobrenome:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" name="cli_sobrenome" class=""  minlength="3" required>    
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label>Data Nasc:</label>
                        <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" name="cli_data_nasc" class="" required>     
                    </div> 
                </div>
                
                <div class="form-group">
                    <div class="col-md-2">
                        <label>CPF:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="" minlength="11" maxlength="11" required readonly>   
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <label>DDD:  </label>
                        <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd" class=""   required>   
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label>Fone:</label>
                        <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" name="cli_fone" class="" required>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label>Celular:</label>
                        <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular" class="" required> 
                    </div>   
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Endereço:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class=""  minlength="3" required>
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <label>Numero:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero" class="" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Bairro:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro" class="" minlength="3" required> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Cidade:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade" class="" minlength="3" required> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <label>UF:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
"name="cli_uf" class="" maxlength="2" minlength="2" required> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <label>Cep:</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep" class="" minlength="8" maxlength="8" required> 
                    </div>   
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Email:</label>
                        <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" name="cli_email" class="" required>  
                    </div>
                </div>
                                <div class="form-group"> 
                    <section class="row" id="btngravar">   
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <label>Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
                            <input type="password" name="cli_senha" id="cli_senha" class="" required>
                            <br>
                            <button type="submit" class="btn btn-geral btn-block "> <i class="fa fa-check"></i> Gravar </button>
                        </div>
                        <div class="col-md-4"></div>
                    </section>
                    
                                    </div>
            </form>
        </div><!--/login form-->
    </div>
</div>
<?php }
}
