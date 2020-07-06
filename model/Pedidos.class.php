<?php

/**
 * descricao Pedidos
 *
 * @author adrianosites.com.br
 */
class Pedidos extends Conexao{
    
    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param INT $cliente para filtrar pedidos 
     */
    function GetPedidosCliente($cliente=null){
        
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query.= " ON p.ped_cliente = c.cli_id";
        
          if($cliente != NULL):
               $cli = (int)$cliente;
               $query .= " WHERE ped_cliente = {$cli}";
          endif;
      
                
        $this->ExecuteSQL($query);
        
        $this->GetLista();
    }
    
     /**
      * 
      * @param type $ref do pedido 
      */
      function GetPedidosREF($ref){
        
          // monto a SQL
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query.= " ON p.ped_cliente = c.cli_id";        
        $query .= " WHERE ped_ref = :ref";
        
        // passando parametros
        $params = array(':ref'=>$ref);
       // executando a SQL                      
        $this->ExecuteSQL($query,$params);
        // trazendo a listagem 
        $this->GetLista();
    }
    
    
    
    /**
     * 
     * @param type $data_ini
     * @param type $data_fim  buscar por datas 
     */
     function GetPedidosDATA($data_ini,$data_fim){
        
         // montando a SQL
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query.= " ON p.ped_cliente = c.cli_id";
        
        $query.= " WHERE ped_data between :data_ini AND :data_fim";
          
       // passando os parametros  
        $params = array(':data_ini'=>$data_ini, ':data_fim'=>$data_fim);
        
        // executando a SQL
        $this->ExecuteSQL($query,$params);
        
        $this->GetLista();
    }
    
    /**
     * 
     * @param string $ped_cod a ser apagado 
     */
    function  Apagar($ped_cod){
        
        // apagando o PEDIDO  
        
        // monto a minha SQL de apagar o pedido 
        $query =  " DELETE FROM {$this->prefix}pedidos WHERE ped_cod = :ped_cod";        
        // parametros
        $params = array(':ped_cod'=>$ped_cod);
        // executo a minha SQL
        $this->ExecuteSQL($query, $params);
        
        /// apos apagar o pedido apaga ITENS DO PEDIDO  
        
                    // monto a minha SQL de apagar os items 
                 $query =  " DELETE FROM {$this->prefix}pedidos_itens WHERE item_ped_cod = :ped_cod";

                 // parametros
                 $params = array(':ped_cod'=>$ped_cod);
                 // executo a minha SQL
                 if($this->ExecuteSQL($query, $params)):
                     return TRUE;
                 endif;
        
    }


    
      /**
     * retorna o array com os itens da tabela
     */
    private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
                'ped_id'    => $lista['ped_id'],
                'ped_data'  => Sistema::Fdata($lista['ped_data']),
                'ped_data_us'  => $lista['ped_data'],
                'ped_hora'   => $lista['ped_hora'],
                'ped_cliente' => $lista['ped_cliente'],
                'ped_cod'   => $lista['ped_cod'],
                'ped_ref'     => $lista['ped_ref'],
                'ped_pag_status' => $lista['ped_pag_status'],
                'ped_pag_forma'   => $lista['ped_pag_forma'],
                'ped_pag_tipo'    => $lista['ped_pag_tipo'],
                'ped_pag_codigo'   => $lista['ped_pag_codigo'],
                'ped_frete_valor' => $lista['ped_frete_valor'],
                'ped_frete_tipo'  => $lista['ped_frete_tipo'],
                'cli_nome'  => $lista['cli_nome'],
                'cli_sobrenome'  => $lista['cli_sobrenome'],
                'cli_email'  => $lista['cli_email']
            );
        
        
            $i++;
        
        endwhile;
        
        
    }




    /**
     *  metodo para inserir o pedido no banco 
     * @param iNT    $cliente
     * @param string $cod
     * @param string $ref
     * @param float  $freteValor
     * @param string $freteTipo
     */
    function PedidoGravar($cliente,$cod,$ref,$freteValor=null,$freteTipo=null){
        
        $retorno = false;
        
     $query  = "INSERT INTO ".$this->prefix."pedidos ";   
     $query .= "(ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_frete_valor, ped_frete_tipo)"; 
     $query .= " VALUES ";
     $query .= "(:data, :hora, :cliente, :cod, :ref, :frete_valor, :frete_tipo)";
        
     $params = array(
            ':data' => Sistema::DataAtualUS(),
            ':hora' => Sistema::HoraAtual(),
            ':cliente'=> (int)$cliente,
            ':cod' => $cod,
            ':ref' => $ref,
            ':frete_valor'=>$freteValor,
            ':frete_tipo' =>$freteTipo    
     );
     
   //  echo $query .'<br><br>';
     // gravo o pedido
     $this->ExecuteSQL($query,$params);
     // gravo os itens deste pedido 
     $this->ItensGravar($cod);
     
      $retorno = TRUE;
      
      return $retorno;
      
        
    }
    /**
     *  grava os itens do pedido
     * @param string $codpedido
     */
    private function ItensGravar($codpedido){
        
        $carrinho =  new Carrinho();       
      
        foreach ($carrinho->GetCarrinho() as $item):
        
        $query  = "INSERT INTO ".$this->prefix."pedidos_itens ";
        $query .= "(item_produto, item_valor, item_qtd, item_ped_cod)";
        $query .= "VALUES  (:produto,:valor,:qtd,:cod)";
                
                $params = array(
                ':produto' => $item['pro_id'],
                ':valor'   => $item['pro_valor_us'],
                ':qtd'     => (int)$item['pro_qtd'],
                ':cod'     =>  $codpedido  
                );
            
     // echo $query . '<br>';       
                
                $this->ExecuteSQL($query, $params);
                
                
        endforeach;
        
        
        
    }
    /**
     * limpar sessão do pedido e itens do carrinho
     */
    function LimparSessoes(){
       
        unset($_SESSION['PRO']);
        unset($_SESSION['PED']['pedido']);
        unset($_SESSION['PED']['ref']);
        
        
    }
    
    
}
