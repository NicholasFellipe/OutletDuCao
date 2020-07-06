<?php
//var_dump($_POST);
//var_dump($_FILES);
// objeto da classe template 
$smarty = new Template();



// id do produto passado
$pro_id = (int)$_POST['pro_id'];


// verifico se passei o POST de ADD nova imagem 
if(isset($_POST['pro_id']) && isset($_FILES['pro_img']['name'])):
    
    $upload = new ImageUpload();

    // verifico se passei a imagem
        if(!empty($_FILES['pro_img']['name'])):
            
            
            // faço o upload
            $upload->Upload(900, 'pro_img');
            
            $pro_img  =  $upload->retorno; 
           
            // gravo no banco de dados
            $gravar = new ProdutosImages();
            $gravar->Insert($pro_img, $pro_id);
            
            
            
            
        endif;

    
    
    
endif;


// verifica se passou o POST de apagar as fotos 
if(isset($_POST['fotos_apagar'])):
    
    //var_dump($_POST['fotos_apagar']);
    
    $apagar = new ProdutosImages();

    // varrendo o array que veio do post apagar 
    foreach ($_POST['fotos_apagar'] as $foto):
        
       /// apagando do banco 
        $apagar->Deletar($foto);
    
   
    // apagando a foto da pasta
    $filename = Rotas::get_SiteRAIZ() .'/'. Rotas::get_ImagePasta() .$foto ;
    @unlink($filename);
        
        
    endforeach;

   echo '<div class="alert alert-success">Foto(s) apagada(s) com sucesso!</div>';
    
    
endif;


        
// objeto da classe imagens produtos
$img = new ProdutosImages($pro_id);
// buscando as imagens pelo ID do produto vindo do post
$img->GetImagesPRO($_POST['pro_id']);


// passando variaveis para o template
$smarty->assign('IMAGES', $img->GetItens());
$smarty->assign('PRO', $pro_id);

// chamo o temnplate 
$smarty->display('adm_produtos_img.tpl');

