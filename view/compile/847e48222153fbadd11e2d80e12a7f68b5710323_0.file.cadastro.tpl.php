<?php
/* Smarty version 3.1.33, created on 2019-04-22 18:01:04
  from '/home1/agnald39/outletducao/view/cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbe2b90718f72_85751431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '847e48222153fbadd11e2d80e12a7f68b5710323' => 
    array (
      0 => '/home1/agnald39/outletducao/view/cadastro.tpl',
      1 => 1555966292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbe2b90718f72_85751431 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00");
			$("#telefone").mask("(00) 0000-0000");
			$("#dataNascimento").mask("00/00/0000");
			var options = {
				translation: {
					'A': { pattern: /[A-Z]/},
					'a': { pattern: /[a-zA-Z]/},
					'S': { pattern: /[a-zA-Z0-9]/},
					'L': { pattern: /[a-z]/}
				}
			};
			$("#celular").mask("(00) 0000-00009");
			$("#celular").blur(function(event){
				if ($(this).val().length === 15){
					$("#celular").mask("(00) 00000-0009");
				}else{
					$("#celular").mask("(00) 0000-00009");
				}
			});
		})
		<?php echo '</script'; ?>
>
<section class="form" id="cadastro">
    <div class="container">
        <div class="row">
            <div class="login-form">                <form name="cadcliente" id="cadcliente" method="post" action="" > 
                    <form method="get" action=".">
                         <div class="container">
                    <div class="row">
                        <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                                <div class="container">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle btn btn-primary" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        <span class="fa fa-envelope-o"></span> Insira seu e-mail aqui <span class="fa fa-hand-o-down"></span>
                                    </a>
                                </div>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                                                                <div class="form-group">
                                            <div class="col-md-4">
                                                <label>Email:</label>
                                                <input type="email" name="cli_email" class="" placeholder="Seu Email"  maxlength="55"required>
                                            </div>
                                        </div>
                                                                            </div>
                                </div>
                            </div>
                            </div>
                                    </div>
                                    </div>
                                  <div class="container">   
                            <div class="row">
                                <div class="accordion-group ">
                                    <div class="container">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle btn btn-primary" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                         <span class="fa fa-th-list"></span> Complete seu cadastro <span class="fa fa-hand-o-down"></span>
                                        </a>
                                    </div>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                                                                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label>Nome:</label>
                                                    <input type="text" name="cli_nome" class="" placeholder="Seu Nome" minlength="3"  maxlength="18"required>
                                                </div> 
                                            </div> 
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label>Sobrenome:</label>
                                                    <input type="text" name="cli_sobrenome" class="" placeholder="Seu Sobrenome"  minlength="3"  maxlength="20"required> 
                                                </div>  
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label>Data Nasc:</label>
                                                    <input type="date" name="cli_data_nasc" class="" required>  
                                                </div>  
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>CPF:</label>
                                                    <input type="text" name="cli_cpf" id="cpf" class="" placeholder="Seu CPF" minlength="11" maxlength="11" required>  
                                                </div>  
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Fone:</label>

                                                    <input type="text"  name="cli_fone" id="telefone"  placeholder="Seu Fone" maxlength="15" required>   
                                                </div>  
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-3">     
                                                    <label>Celular:</label>
                                                    <input type="text" name="cli_celular" id="celular" class="" placeholder="Seu Celular"required> 
                                                </div>  
                                            </div>
                                            

                                                                                        <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>Cep:</label>
                                                    <input type="text" name="cli_cep" id="cep" class="" placeholder="CEP do Endereço " minlength="8" maxlength="8" onblur="pesquisacep(this.value);" required>
                                                    <label>
                                                        <input name="ibge" type="hidden" id="ibge" size="8" /></label>
                                                </div>
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>UF:</label>
                                                    <input type="text" name="cli_uf" id="uf" class="" placeholder="Estado do Endereço " maxlength="2" minlength="2" required>  
                                                </div>
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label>Cidade:</label>
                                                    <input type="text" name="cli_cidade" id="cidade" class="" placeholder="Cidade do Endereço" minlength="3"  maxlength="20" required> 
                                                </div>
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label>Bairro:</label>
                                                    <input type="text" name="cli_bairro" id="bairro" class=""placeholder="Bairro do Endereço " minlength="3"  maxlength="25" required>  
                                                </div>
                                            </div>
                                            


                                                                                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label>Endereço:</label>
                                                    <input type="text" name="cli_endereco" id="rua" class="" placeholder="Seu Endereço" minlength="3"  maxlength="55"required>
                                                </div>
                                            </div>
                                            
                                                                                        <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>Numero:</label>
                                                    <input type="text" name="cli_numero" class="" placeholder="Número do Endereço"  maxlength="8"required> 
                                                </div>
                                            </div>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                                  </div>
                                                <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right"><i class=" fa fa-check"></i> Me Cadastrar </button>
                            </div>
                        </div>
                                            </form>
                </form>
            </div>        </div>
    </div>
</section>
<br>

<?php }
}
