<?php

/**
 * descricao esta classe trata de várias coisas sobre URL
 * @author adrianosites.com.br
 */
class Rotas {

    /**     * * @var string - define a pasta controller  */
    private static $pasta_controller = 'controller';

    /**     *  * @var string - define a pasta de view  */
    private static $pasta_view = 'view';
    private static $pasta_ADM = 'adm';

    /**
     * @var array : recebe os parametros da URL
     */
    public static $pag;

    /**
     * Trata paginas e parametros da URL
     */
    static function get_Pagina() {
        // verifico se passou parametro na URL
        if (isset($_GET['pag'])):

            $pagina = $_GET['pag'];

            // separa a URL pela barra e gera os parametros  
            self::$pag = explode('/', $pagina);

            $barra = DIRECTORY_SEPARATOR;

            $pagina = self::$pasta_controller . $barra . self::$pag[0] . '.php';
            // verifico se existe pagina com nome passado na URL
            if (file_exists($pagina)):
                
                include $pagina;
            // se nao existe o aquivo mostra erro
            else:
                echo 'Arquivo não encontrado :' . $pagina;
                include 'erro.php';

            endif;
        // se não passou nada pela URL
        else:
            include 'home.php';

        endif;
    }

    static function ImageLink($img, $largura, $altura) {

        // $imagem = self::get_ImageURL() .'thumb.php?src='
        //        .$img .'&w='.$largura.'&h='.$altura.'&zc=1'; 

        $imagem = self::get_ImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }

         /**
     * 
     * @return string: URL home do site 
     */
    static function get_SiteHOME(){
        
        return Config::SITE_URL .'/'.Config::SITE_PASTA;
    }
    /**
     * 
     * @return string : pasta raiz do meu sistema 
     */
    static function get_SiteRAIZ(){
        
        return $_SERVER['DOCUMENT_ROOT'] .'/'. Config::SITE_PASTA;
    }
    /**
     * 
     * @return string - URL do template do site, css, js
     */
    static function get_SiteTEMA(){
        return self::get_SiteHOME() .'/'.self::$pasta_view ;

    }
    /**
     * @return string - pagina carrinho
     */
    static function pag_Carrinho(){
        
        return self::get_SiteHOME() .'/carrinho' ;
    }
    /**
     * 
     * @return string - pagina manipulaÃ§Ã£o do carrinho
     */
    static function pag_CarrinhoAlterar(){
        
        return self::get_SiteHOME() .'/carrinho_alterar' ;
    }
    
    /**
     * 
     * @return string - pagina de produtos
     */
      static function pag_Produtos(){
        
        return self::get_SiteHOME() .'/produtos' ;
    }
    /**
     * 
     * @return string  detalhe do produto
     */
      static function pag_ProdutosInfo(){
        
        return self::get_SiteHOME() .'/produtos_info' ;
    }
    /**
     * 
     * @return string  - pagina de login
     */
      static function pag_ClienteLogin(){
        
        return self::get_SiteHOME() .'/login' ;
    }
    /**
     * 
     * @return string pagina de logoff
     */
    static function pag_Logoff(){
        
         return self::get_SiteHOME() .'/logoff' ;
    }

    /**
     * 
     * @return string tela de recuperaÃ§Ã£o de senha
     */
    static function pag_ClienteRecovery(){
        
        return self::get_SiteHOME() . '/clientes_recovery';
    }
   /**
    * 
    * @return string tela pedidos do cliente
    */
    static function pag_CLientePedidos(){
        
      return self::get_SiteHOME() . '/clientes_pedidos';   
    }
    
    /**
     * 
     * @return string tela de itens do cliente
     */
      static function pag_CLienteItens(){
        
      return self::get_SiteHOME() . '/clientes_itens';   
    }
    
    
    /**
     * 
     * @return pagina dados do cliente
     */
    static function pag_CLienteDados(){
        
      return self::get_SiteHOME() . '/clientes_dados';   
    }
    
    /**
     * 
     * @return tela de clientes senha 
     */
    static function pag_CLienteSenha(){
        
      return self::get_SiteHOME() . '/clientes_senha';   
    }

        /**
     * 
     * @return string - pagina da conta do clientes
     */
      static function pag_ClienteConta(){
        
        return self::get_SiteHOME() .'/minhaconta' ;
    }
    /**
     * 
     * @return string tela de cadastro
     */
    static function pag_ClienteCadastro(){
        
          return self::get_SiteHOME() .'/cadastro' ;
    }


    /**
     * 
     * @return string - pagina de confirmar pedido
     */
      static function pag_PedidoConfirmar(){
        
        return self::get_SiteHOME() .'/pedido_confirmar' ;
    }
    /**
     * 
     * @return string - pagina de finalizar pedido
     */
      static function pag_PedidoFinalizar(){
        
        return self::get_SiteHOME() .'/pedido_finalizar' ;
    }
    
    /**
     * 
     * @return string tela de retorno apos pagamento ou nÃ£o 
     */
      static function pag_PedidoRetorno(){
        
        return self::get_SiteHOME() .'/pedido_retorno' ;
    }
    /**
     * 
     * @return string pagina de erro no pagamento
     */
   static function pag_PedidoRetornoERRO(){
        
        return self::get_SiteHOME() .'/pedido_retorno_erro' ;
    }
    
    
  /**
   * 
   * @return string pagina de contato
   */
    static function  pag_Contato(){
        
        return self::get_SiteHOME().'/contato';
    }
    /**
   * 
   * @return string pagina de contato
   */
    static function  pag_Pesquisa(){
        
        return self::get_SiteHOME().'/pesquisa';
    }
    /**
   * 
   * @return string pagina de contato
   */
    static function pag_Termos_e_condicoes(){
        
        return self::get_SiteHOME().'/termos_e_condicoes';
    }
    /**
   * 
   * @return string pagina de contato
   */
    static function pag_Politica_de_Devolucao(){
        
        return self::get_SiteHOME().'/politica_de_devolucao';
    }
    /**
   * 
   * @return string pagina de contato
   */
    static function pag_Politica_de_Privacidae(){
        
        return self::get_SiteHOME().'/politica_de_privacidade';
    }
    /**
   * 
   * @return string pagina de contato
   */
    static function pag_Sistema_Cobranca(){
        
        return self::get_SiteHOME().'/sistema_cobranca';
    }
    /**
   * 
   * @return string pagina de contato
   */
    static function pag_Perguntas_Frequentes(){
        
        return self::get_SiteHOME().'/perguntas_frequentes';
    }
    
    /**
     * 
     * @return string pasta fisica da imagem
     */
    static function get_ImagePasta(){
        
        return 'media/images/';
    }

        /**
     * 
     * @return string com a URL da imagem
     */
    static function get_ImageURL(){
        
        return self::get_SiteHOME() .'/' . self::get_ImagePasta();
    }
    /**
     * 
     * @return string com a pasta de controller
     */
    static function get_Pasta_Controller(){
        return self::$pasta_controller;
    } 
    /**
     * 
     * @param int tempo em segundos
     * @param string $pagina que eu quero ir
    
     */
    static function Redirecionar($tempo,$pagina){
        
     $url = '<meta http-equiv="refresh" content="'.$tempo.'; url='.$pagina.'">';
     echo $url;
        
    }
    
    /// ****** REFERENTE AS TELAS DA PARTE ADMINISTRATIVA  DO SITE ************ /// 
    /**
     * 
     * @return string pasta adm do site
     */
    static function get_SiteADM(){
        
       return self::get_SiteHOME() .'/'.self::$pasta_ADM;
        
    }
    /**
     * 
     * @return string tela de produtos da adm
     */
    static function pag_ProdutosADM(){
        
        return self::get_SiteADM() .'/adm_produtos';
    }
   
    
    /**
     * 
     * @return STRING TELA de add novo produtos
     */
    static function pag_ProdutosNovoADM(){
        
        return self::get_SiteADM() .'/adm_produtos_novo';
    }
   
    
    /**
     * 
     * @return string tela editar produtos 
     */
    static function pag_ProdutosEditarADM(){
        
        return self::get_SiteADM() .'/adm_produtos_editar';
    }
   
    
    /**
     * 
     * @return string tela imagens extras da ADM 
     */
    static function pag_ProdutosImgADM(){
        
        return self::get_SiteADM() .'/adm_produtos_img';
    }
   
    
    /**
     * 
     * @return string tela deletar produto
     */
    static function pag_ProdutosDeletarADM(){
        
        return self::get_SiteADM() .'/adm_produtos_deletar';
    }
   
    
    /**
     * 
     * @return string tela de clientes 
     */
    static function pag_ClientesADM(){
        
        return self::get_SiteADM() .'/adm_clientes';
    }
   
    
    /**
     * 
     * @return string editar clientes
     */
    static function pag_ClientesEditarADM(){
        
        return self::get_SiteADM() .'/adm_clientes_editar';
    }
   
    
    /**
     * 
     * @return string tela listar pedidos 
     */
    static function pag_PedidosADM(){
        
        return self::get_SiteADM() .'/adm_pedidos';
    }
   
    
    /**
     * 
     * @return string listar itens de um pedido 
     */
    static function pag_ItensADM(){
        
        return self::get_SiteADM() .'/adm_itens';
    }
   
    /**
     * 
     * @return string tela de categorias
     */
    static function pag_CategoriasADM(){
        
        return self::get_SiteADM() .'/adm_categorias';
    }
    

}
