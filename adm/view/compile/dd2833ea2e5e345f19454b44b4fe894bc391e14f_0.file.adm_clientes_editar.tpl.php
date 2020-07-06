<?php
/* Smarty version 3.1.33, created on 2019-03-17 18:44:41
  from 'C:\xampp\htdocs\loja\adm\view\adm_clientes_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8ebfc9be0b18_83295773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd2833ea2e5e345f19454b44b4fe894bc391e14f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_clientes_editar.tpl',
      1 => 1552859080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ebfc9be0b18_83295773 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Detalhes do cliente</h4>

<section class="form" id="cadastro">
    <div class="container">
        <div class="row">
            <div class="login-form">
                <form name="cadcliente" id="cadcliente" method="post" action="">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Nome:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="" minlength="3" required>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
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
                            <label>RG:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" name="cli_rg" class="" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>CPF:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="" minlength="11" maxlength="11" required >   
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>DDD:</label>
                            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd" class=""  min="10" max="99" required>     
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
                        <div class="col-md-5">
                            <label>Endereço:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class=""  minlength="3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-1">
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
                        <div class="col-md-3">
                            <label>Cidade:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade" class="" minlength="3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-1">
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
                        <div class="col-md-4"></div> 
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-default check_out btn-block "> <i class="fa fa-check"></i> Salvar </button>
                            <input type="hidden" name="cli_id" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ID']->value;?>
">    
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<br><br><?php }
}
