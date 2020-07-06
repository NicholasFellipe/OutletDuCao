<?php
/* Smarty version 3.1.33, created on 2019-03-17 19:00:57
  from '/home1/agnald39/outletducao/adm/view/adm_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8ec39916d654_38689378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cf20ce91444f73b9ad0465558bad2efc8574669' => 
    array (
      0 => '/home1/agnald39/outletducao/adm/view/adm_senha.tpl',
      1 => 1552860023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ec39916d654_38689378 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>
<form name="alterarsenha" method="post" action=""> 
    <section id="recovery">
        <div class="container">
            <div class="row">
                <div class="login-form">

                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                             <label>Digite sua senha atual</label>
                            <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form-control" required>  
                        </div>
                        <div class="form-group">
                            <label>Digite sua nova senha</label>
                            <input type="password" name="adm_senha" id="adm_senha" class="form-control" required>
                            <br>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-key"></i> Alterar </button>
                        </div>
                    </div>

                    <div class="col-md-4"></div> 
                </div>
            </div>
        </div>
    </section>  
</form><?php }
}
