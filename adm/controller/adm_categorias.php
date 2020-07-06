<?php
// chamando  objeto do template 
$smarty = new Template();

// chamo classe de categorias
$categorias =  new Categorias();


// verifico se passou o POSTeditar
if(isset($_POST['cate_editar'])):
    
    $cate_id   = $_POST['cate_id'];
    $cate_nome = $_POST['cate_nome'];    
    
    if($categorias->Editar($cate_id, $cate_nome)):
        echo '<div class="alert alert-success"> Categoria editada com sucesso </div>';
        
    endif;
    
    
endif;


                // se passei o POST apagar 
                if(isset($_POST['cate_apagar'])):

                    $cate_id   = $_POST['cate_id'];

                    if($categorias->Apagar($cate_id)):
                        echo '<div class="alert alert-success"> Categoria apagada com sucesso </div>';

                    endif;


                endif;

// verifo se tem o POST de inserir a categoria nova 

if(isset($_POST['cate_nova'])):
    
    
    $cate_nome = $_POST['cate_nome'];    
    
    if($categorias->Inserir($cate_nome)):
        echo '<div class="alert alert-success"> Categoria inserida com sucesso </div>';
        
    endif;
    
    
endif;



// chamo o métodos que traz as tacagorias 
$categorias->GetCategorias();

// passando variaveis para o template 
$smarty->assign('CATEGORIAS', $categorias->GetItens());



// chamando o template
$smarty->display('adm_categorias.tpl');
