<?php
/* Smarty version 3.1.33, created on 2019-04-23 19:38:51
  from '/home1/agnald39/outletducao/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf93fb0bf1d3_15981173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dce42b308d3720889222864209d36e272b440c5' => 
    array (
      0 => '/home1/agnald39/outletducao/view/login.tpl',
      1 => 1556058992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf93fb0bf1d3_15981173 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?> 
    <?php echo '<?php
    ';?>session_start();
    <?php echo '?>';?>
    <?php echo '<script'; ?>
>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
        }
    <?php echo '</script'; ?>
>
<?php } else { ?>
    

    <section  id="fazerlogin"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Cadastre-se</h2>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
">
                            <button type="submit" class="btn btn-default"><i class="fa fa-user-plus"></i> Me cadastrar </button>
                        </form>
                    </div><!--/sign up form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="orr">OU</h2>
                </div>
                <div class="col-sm-4">
                    <div class="login-form"><!--login form-->
                        <form name="cliente_login" method="post" action="" > 
                            <h2>Entre com a sua conta</h2>
                            <div class="form-group">
                                <input type="email" name="txt_email" placeholder="Seu Email" />
                            </div> 
                            <div class="form-group">
                                <input type="password" name="txt_senha" placeholder="Sua Senha" />
                            </div>
                            <div class="form-group">
                                <span>
                                    <input type="checkbox" class="checkbox"> 
                                    Me manter conectado
                                </span>
                            </div>  
                            <div class="form-group"> 

                                <button  class="btn btn-default"><i class="fa fa-sign-in"></i> Entrar</button>
                            </div>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="orr">OU</h2>
                </div>
                <div class="col-sm-3">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Recupere sua Senha</h2>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
">
                            <button type="submit" class="btn btn-default"><i class="fa fa-key"></i> Recuperar senha </button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
    <br>
<?php }
}
}
