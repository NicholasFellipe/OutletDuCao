<?php

/**
 * descricao Categorias
 *
 * @author adrianosites.com.br
 */
class Categorias extends Conexao{
    
      
    protected $cate_id,
             $cate_nome,
             $cate_slug;
    
    
    function __construct() {
        parent::__construct();
    }
    /**
     * retorna a sql da consulta de categorias 
     */
    function GetCategorias(){
        
        $query = "SELECT * FROM {$this->prefix}categorias";
        $this->ExecuteSQL($query);
                
        $this->GetLista();
    }
    
    
    
      /**
     * retorna o array com os itens da tabela
     */
    private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
         'cate_id'    => $lista['cate_id'] ,  
         'cate_nome'  => $lista['cate_nome'] ,  
         'cate_slug'  => $lista['cate_slug'] ,  
         'cate_link'  => Rotas::pag_Produtos().'/'.$lista['cate_id'].'/'.$lista['cate_slug']  ,  
         'cate_link_adm'  => Rotas::pag_ProdutosADM().'/'.$lista['cate_id'].'/'.$lista['cate_slug']  ,              
        );
        
            $i++;
        
        endwhile;     
    }
    /**
     * 
     * @param STRING $cate_nome nome da categoria 
     * @return boolean
     */
     function Inserir($cate_nome){
        
        // trato os campos
        $this->setCate_nome($cate_nome);
        $this->setCate_slug($cate_nome);
        
        // monto a SQL
        $query = " INSERT INTO {$this->prefix}categorias (cate_nome, cate_slug )";
        $query.= " VALUES (:cate_nome, :cate_slug )";
        // passo so parametros
        $params = array(':cate_nome' => $this->getCate_nome(),
                        ':cate_slug' => $this->getCate_slug(),
                      
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }
    /**
     * 
     * @param INT $id da categoria
     * @param string $nome categoria
     */
    function Editar($cate_id,$cate_nome){
        
        // trato os campos
        $this->setCate_nome($cate_nome);
        $this->setCate_slug($cate_nome);
        
        // monto a SQL
        $query = " UPDATE {$this->prefix}categorias ";
        $query.= " SET cate_nome = :cate_nome, cate_slug = :cate_slug ";
        $query.= " WHERE cate_id = :cate_id ";
        // passo so parametros
        $params = array(':cate_nome' => $this->getCate_nome(),
                        ':cate_slug' => $this->getCate_slug(),
                        ':cate_id'   => (int)$cate_id,
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }
    /**
     * 
     * @param INT $cate_id id da categoria
     */
    function Apagar($cate_id){
        
          // verifico se  tenho itens antes de apagar a categoria
          $pro = new Produtos();
          $pro->GetProdutosCate($cate_id);
          
        if( $pro->TotalDados() > 0):
              echo '<div class="container"><div class="alert alert-danger text-center" > Esta categoria tem: ';
              echo $pro->TotalDados();
              echo ' produtos. Não pode ser apagada, para apagar precisa primeiro apagar os produtos dela </div></div>';
     
              // se nao tiver produtos nela  eu apago 
         else:
            
                 // monto a SQL
        $query = " DELETE FROM {$this->prefix}categorias";
        $query.= " WHERE cate_id = :id";
        
        // passo os parametros
        $params = array(':id' => (int)$cate_id);
        // executo a SQL
    
        $this->ExecuteSQL($query, $params);
        
        endif;      
    }
            
    
    function getCate_nome() {
        return $this->cate_nome;
    }

    function getCate_slug() {
        return $this->cate_slug;
    }

    function setCate_nome($cate_nome) {
       
        $this->cate_nome = filter_var($cate_nome, FILTER_SANITIZE_STRING);
    }

    function setCate_slug($cate_slug) {    
        $this->cate_slug = Sistema::GetSlug($cate_slug);
    }  
}
