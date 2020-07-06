<?php
// objeto do template smarty
$smarty = new Template();


// verifico se passou os POSTS
if(isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['cli_cpf'])):    
    
     // criando variaveis 
     $cli_nome      = $_POST['cli_nome'];
     $cli_sobrenome = $_POST['cli_sobrenome'];
     $cli_data_nasc = $_POST['cli_data_nasc'];
     $cli_cpf       = $_POST['cli_cpf'];
     $cli_ddd       = $_POST['cli_ddd'];
     $cli_fone      = $_POST['cli_fone'];
     $cli_celular   = $_POST['cli_celular'];
     $cli_endereco  = $_POST['cli_endereco'];
     $cli_numero    = $_POST['cli_numero'];
     $cli_bairro    = $_POST['cli_bairro'];
     $cli_cidade    = $_POST['cli_cidade'];
     $cli_uf        = $_POST['cli_uf'];
     $cli_cep       = $_POST['cli_cep'];
     $cli_email     = $_POST['cli_email'];
     $cli_senha     = Sistema::GerarSenha();
     $cli_data_cad  = Sistema::DataAtualUS();
     $cli_hora_cad  = Sistema::HoraAtual();
    
     
    // gravo os dados no banco      
     $clientes = new Clientes();
     $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);
     $clientes->Inserir();
     
     
    
     // passo variaveis para o template de email de cadastro realizado 
     
     $smarty->assign('NOME', $cli_nome);
     $smarty->assign('EMAIL', $cli_email);
     $smarty->assign('SENHA', $cli_senha);
     $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
     $smarty->assign('SITE', Config::SITE_NOME);
     $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
    
     // envio email para o cliente 
     $email = new EnviarEmail();
     $assunto = 'Cadastro Efetuado ' . Config::SITE_NOME;
     $msg = $smarty->fetch('email_cliente_cadastro.tpl');
     $destinatarios = array($cli_email);
     
     $email->Enviar($assunto, $msg, $destinatarios);
     
     
     // vefico cadastro e dou ,aviso e levo o cliente até o login
     echo '<div class="container"><div class="alert alert-success text-center">Olá '. $cli_nome.', Cadastro efetuado com sucesso! A senha para fazer login foi enviada para seu email cadastrado. <br>'
             . ' Acesse seu email para visualizar a senha.</div></div>';
             Rotas::Redirecionar(5,  Rotas::pag_ClienteLogin());
     
 // se não tejm POSTS  mostra  os campos do cadastro  
else:     
 

// chamo o template da tela de cadastro
$smarty->display('cadastro.tpl');   
    
    
endif;



