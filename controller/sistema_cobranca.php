<?php
// carrego o auto load
require './lib/autoload.php';

// chamo a classe  do template
$smarty =  new Template();

// chamo o template
$smarty->display('sistema_cobranca.tpl');
