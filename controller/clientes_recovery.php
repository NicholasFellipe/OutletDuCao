<?php
// objeto do template smarty
$smarty =  new Template();

// verifico se existe um post do email 
if(isset($_POST['cli_email'])):
  
   
    // classe de clientes
    $cliente = new Clientes();
    // metodo que valida o email
    $cliente->setCli_email($_POST['cli_email']);   
   // verifico se existe o email 
    if($cliente->GetClienteEmail($cliente->getCli_email()) > 0):
     // o email foi encontrado         
        
     // faz a gravação da nova senha
        $novasenha = Sistema::GerarSenha();
        
        $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());
        
     // envia o email para o cliente 
        $email = new EnviarEmail();
        $destinatarios = array($cliente->getCli_email());
        $assunto = 'Nova senha ' . Config::SITE_NOME;
        
        $msg ="Olá cliente, foi solicitada uma nova senha para acesso ao site: " . Config::SITE_NOME;
        $msg .= " <br> Nova senha = " . $novasenha;
        
        $email->Enviar($assunto, $msg, $destinatarios);
        
        // mostra mensagem na tela que foi enviada a senha 
        echo '<div class="container"><h3 class="alert alert-success text-center">Olá cliente, foi enviada uma nova senha para acesso ao site em seu email de cadastro</h3></div>';
        Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());
        
        else:
    // email não encontrado 
       echo '<div class="container"><h3 class="alert alert-danger text-center">Email não encontrado</h3></div> '; 
        
    endif;
    
// caso não exista o post mostro o template     
else: 
    
  // chamo o template 
$smarty->display('clientes_recovery.tpl');  
    
endif;
