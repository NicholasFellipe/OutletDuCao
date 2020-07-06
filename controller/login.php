<?php
// objeto do temnplate 
$smarty = new Template();
// objeto do login 
$login =  new Login();  
        // verifico se passei o post para efetuar o login 
        if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])):

            $user  = $_POST['txt_email'];
            $senha = $_POST['txt_senha'];

           $login->GetLogin($user, $senha);

          // var_dump($_SESSION['CLI']);

        endif;
// passo variaveis para o template 
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());

// verifo se estou logado ou não 
if(Login::Logado()):
      $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
      $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
     // caso ja esteja logado       
       Login::MenuCliente();
           
 endif;
$smarty->display('login.tpl');