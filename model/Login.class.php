<?php

/**
 * descricao Login
 *
 * @author adrianosites.com.br
 */
class Login extends Conexao {
    
    private $user,
            $senha;
    
    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param string $user
     * @param string $senha
     */
    function GetLogin($user,$senha){
        
        $this->setUser($user);
        $this->setSenha($senha);
        
        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_pass = :senha";
        
        $params = array(':email'=>  $this->getUser(),
                        ':senha'=>  $this->getSenha());
        
           $this->ExecuteSQL($query,$params);
           
           // caso o login seja efetivado com exito 
           if($this->TotalDados() > 0):
               
             $lista = $this->ListarDados();
               
             $_SESSION['CLI']['cli_id']        =  $lista['cli_id'];
             $_SESSION['CLI']['cli_nome']      =  $lista['cli_nome'];
             $_SESSION['CLI']['cli_sobrenome'] =  $lista['cli_sobrenome'];
             $_SESSION['CLI']['cli_endereco']  =  $lista['cli_endereco'];
             $_SESSION['CLI']['cli_numero']    =  $lista['cli_numero'];
             $_SESSION['CLI']['cli_bairro']    =  $lista['cli_bairro'];
             $_SESSION['CLI']['cli_cidade']    =  $lista['cli_cidade'];
             $_SESSION['CLI']['cli_uf']        =  $lista['cli_uf'];
             $_SESSION['CLI']['cli_ddd']       =  $lista['cli_ddd'];
             $_SESSION['CLI']['cli_cpf']       =  $lista['cli_cpf'];
             $_SESSION['CLI']['cli_cep']       =  $lista['cli_cep'];
             
             $_SESSION['CLI']['cli_fone']      =  $lista['cli_fone'];
             $_SESSION['CLI']['cli_email']     =  $lista['cli_email'];
             $_SESSION['CLI']['cli_celular']   =  $lista['cli_celular'];
             $_SESSION['CLI']['cli_data_nasc'] =  $lista['cli_data_nasc'];
             $_SESSION['CLI']['cli_hora_cad']  =  $lista['cli_hora_cad'];
             $_SESSION['CLI']['cli_data_cad']  =  $lista['cli_data_cad'];
             $_SESSION['CLI']['cli_pass']      =  $lista['cli_pass']; 
              
             // apos passar valores atualiza a página
             Rotas::Redirecionar(0,  Rotas::pag_ClienteLogin() );
             
           
       //    echo 'logado com sucesso ';    
               
           // caso o login seja incorreto 
           else:    
               
               
          echo '<div class="container"><h4 class="alert alert-danger text-center"> O login incorreto </h4></div>';  
                Rotas::Redirecionar(1,  Rotas::pag_ClienteLogin() );
           endif;

    }
    
    /**
     * 
     * @return Bolean se esta logado ou não 
     */
    static function Logado(){
        
        if(isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])):
            
            return TRUE;
        else:
            return FALSE;
            
        endif;
        
    }
    /**
     * mostra aviso para fazer login e o botão
     */
    static function AcessoNegado(){
        
         echo '<div class="container"><div class="alert alert-danger text-center"> <a href="'.Rotas::pag_ClienteLogin().'" class="btn btn-danger" > Login </a>  Acesso negado. Faça login</div></div>';
        
    }

    /**
     * faz logoff do usuario e volta para home
     */
    static function Logoff(){
        
        unset($_SESSION['CLI']);
        echo '<div class="container"><h4 class="alert alert-success text-center"> Saindo... </h4></div>';  
        Rotas::Redirecionar(2,  Rotas::get_SiteHOME());
        
    }
    /**
     * mostra  um bloco de menu para clientes logados
     */
    static function MenuCliente(){
        
     // verifo se não esta logado 
            if(!self::Logado()):

                self::AcessoNegado();
                Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
                              
                // caso nao redirecione  saiu  do bloco
                exit();
                            
            // caso esteja mostra a tela minha conta 
            else:
                
        $smarty = new Template();
        
        $smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
        $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
        $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
        $smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_CLientePedidos());
        $smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_CLienteDados());
        $smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_CLienteSenha());
        $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
        
        $smarty->display('menu_cliente.tpl');
        
              endif;
    }


    
     /**
      *  LOGIn do ADM 
      * @param type $user
      * @param type $senha
      */
     function GetLoginADM($user,$senha){
        
        $this->setUser($user);
        $this->setSenha($senha);
        
        $query = "SELECT * FROM {$this->prefix}user WHERE user_email = :email AND user_pw = :senha";
        
        $params = array(':email'=>  $this->getUser(),
                        ':senha'=>  $this->getSenha());
        
           $this->ExecuteSQL($query,$params);
           
           // caso o login seja efetivado com exito 
           if($this->TotalDados() > 0):
               
             $lista = $this->ListarDados();
               
             $_SESSION['ADM']['user_id']     =  $lista['user_id'];
             $_SESSION['ADM']['user_nome']   =  $lista['user_nome'];
             $_SESSION['ADM']['user_email']  =  $lista['user_email'];
             $_SESSION['ADM']['user_pw']     =  $lista['user_pw'];
             $_SESSION['ADM']['user_data']     = Sistema::DataAtualBR();
             $_SESSION['ADM']['user_hora']     = Sistema::HoraAtual();

             return TRUE;
           // caso o login seja incorreto 
           else:    
               
               
                echo '<div class="container"><h4 class="alert alert-danger text-center"> O login incorreto </h4></div>';  
                //  Rotas::Redirecionar(1,  Rotas::pag_ClienteLogin() );
           
                return FALSE;
           endif;

    }
     /**
      * 
      * @return boolean se o ADM está logado 
      */
     static function LogadoADM(){
        
        if(isset($_SESSION['ADM']['user_email']) && isset($_SESSION['ADM']['user_id'])):
            
            return TRUE;
        else:
            return FALSE;
            
        endif;
        
    }
    
     /**
      * LOGIN DO ADM
      */
      static function LogoffADM(){
        
        unset($_SESSION['ADM']);
        echo '<div class="container"><h4 class="alert alert-success text-center"> Saindo... </h4></div>';  
        Rotas::Redirecionar(2,  'login.php');
        
    }
    
    
    /**
     * 
     * @param string $user
     */
    private function setUser($user) {
        $this->user = $user;
    }
    /**
     * 
     * @param senha $senha
     */
    private function setSenha($senha) {

        $this->senha = Sistema::Criptografia($senha);
        
       
    }
    /**
     * 
     * @return string user
     */
    function getUser() {
        return $this->user;
    }
   /**
    * 
    * @return string senha
    */
    function getSenha() {
        return $this->senha;
    }    
}
