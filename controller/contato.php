<?php

$smarty = new Template();

$smarty->assign('CONTATO', 'Pagina de contato');

// verifico se passou os POSTS
if (isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['conteudo'])):
    // criando variaveis 
    $cli_nome = $_POST['cli_nome'];
    $conteudo = $_POST['conteudo'];
    $cli_email = $_POST['cli_email'];
    // passo variaveis para o template de email de cadastro realizado 
    $smarty->assign('NOME', $cli_nome);
    $smarty->assign('EMAIL', $cli_email);
    $smarty->assign('CONTEUDO', $conteudo);
    // envio email para o cliente 
    $email = new EnviarEmail();
    $assunto = 'Contato Cliente ' . $cli_nome;
    $msg = $smarty->fetch('envio_contato.tpl');
    $destinatarios = array(Config::SITE_EMAIl_ADM);

    $email->Enviar($assunto, $msg, $destinatarios);


    // vefico cadastro e dou ,aviso 
    echo '<div class="container"><div class="alert alert-success text-center">Email Enviado com Sucesso!!!</div></div> <br>';
    Rotas::Redirecionar(1, Rotas::pag_Contato());

// se não tejm POSTS  mostra  os campos do cadastro  
endif;

$smarty->display('contato.tpl');
