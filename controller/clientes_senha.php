<?php
// objeto do template 
$smarty = new Template();

// chamo o menu de cliente logado
Login::MenuCliente();

// verifico se foi passo o post  com senha atual e a nova 
if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])):    

 // pego dados do post e sessão atual para variaveis
       
    $senha_atual = Sistema::Criptografia($_POST['cli_senha_atual']);
    $senha_nova  =  $_POST['cli_senha'];
    $email       =  $_SESSION['CLI']['cli_email']; 
      
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
     if($senha_atual != $_SESSION['CLI']['cli_pass']):
         
         echo '<div class="container"><div class="alert alert-danger text-center">  ';
         Sistema::VoltarPagina();
         echo '  A senha atual está incorreta  </div></div>';
         exit();
    
    endif;   
    
    // gravo a nova senha no banco de dados  

   $clientes = new Clientes();
   $clientes->SenhaUpdate($senha_nova, $email);

       echo '<div class="container"><div class="alert alert-success text-center"> Senha alterada com sucesso! Já pode fazer login com sua nova senha </div></div>';
     
// caso não exista o post de alterar a senha, mostro os campos no template        
else:   
      
// chamo o template 
$smarty->display('clientes_senha.tpl');    
    
endif;