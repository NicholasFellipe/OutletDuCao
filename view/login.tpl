{if $LOGADO == true} 
    <?php
    session_start();
    ?>
    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
        }
    </script>
{else}
    

    <section  id="fazerlogin"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Cadastre-se</h2>
                        <form action="{$PAG_CADASTRO}">
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
                        <form action="{$PAG_RECOVERY}">
                            <button type="submit" class="btn btn-default"><i class="fa fa-key"></i> Recuperar senha </button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
    <br>
{/if}