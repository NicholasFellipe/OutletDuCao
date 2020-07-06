<?php
// objeto do template 
$smarty = new Template();


// verifico se foi passo o post  com senha atual e a nova 
if(isset($_POST['adm_senha_atual']) and isset($_POST['adm_senha'])):
     

 // pego dados do post e sessão atual para variaveis
       
    $senha_atual = Sistema::Criptografia($_POST['adm_senha_atual']);
    $senha_nova  =  $_POST['adm_senha'];
    $email       =  $_SESSION['ADM']['user_email']; 
    
   
//    
//    echo '<pre>';  
//  print_r($_POST);
// echo '</pre>';     
//       
// echo '<pre>';  
//  print_r($_SESSION['CLI']);
//  echo '</pre>';     
//       
        
    
     // verifico se a senha atual foi digitada corretamente
     if($senha_atual != $_SESSION['ADM']['user_pw']):
         
         echo '<div class="alert alert-danger">  ';
         Sistema::VoltarPagina();
         echo '  A senha atual não corresponde  </div>';
         exit();
    
    endif;   
    
    // gravo a nova senha no banco de dados  
   $user = new User();
   if ($user->AlterarSenha($senha_nova, $email)):


         // apos alterar envia email com a nova senha
         $enviar = new EnviarEmail();
         
         $assunto = 'Alteração da senha ADM no site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIl_ADM);
         $msg = '<h3> Foi feito alteração de senha ADM no site neste momento, nova senha:  ' . $senha_nova .'</h3>';
                  
         $enviar->Enviar($assunto, $msg, $destinatarios);
        // fim do email 
      
        echo '<div class="alert alert-success"> Senha alterada com sucesso! Já pode fazer login com sua nova senha </div>';
       
       // faz redirecioamento para LOGOFF
        Rotas::Redirecionar(2, Rotas::get_SiteADM() . '/logoff');

    else:

        echo '<div class="alert alert-danger"> Erro ao tentar alterar a senha  </div>';


    endif;




// caso não exista o post de alterar a senha, mostro os campos no template        
else:   
    
  
// chamo o template 
$smarty->display('adm_senha.tpl');    
    
endif;




