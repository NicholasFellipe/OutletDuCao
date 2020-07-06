<?php

/**
 * descricao Clientes
 *
 * @author adrianosites.com.br
 */
class Clientes extends Conexao {

    private $cli_usuario, $cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_cpf, $cli_ddd, $cli_fone,
            $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep,
            $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha;

    /**
     * chamando o construtor da classe pai
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * busca todos os clientes 
     */
    function GetClientes() {
        $query = " SELECT * FROM {$this->prefix}clientes ";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param INT $id id do cliente 
     */
    function GetClientesID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_id = :id ";
        // passo parametros
        $params = array(':id' => (int) $id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
    }

    /**
     * fazendo a listagem dos dados retornados 
     */
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cli_id' => $lista['cli_id'],
                'cli_usuario' => $lista['cli_usuario'],
                'cli_nome' => $lista['cli_nome'],
                'cli_sobrenome' => $lista['cli_sobrenome'],
                'cli_endereco' => $lista['cli_endereco'],
                'cli_numero' => $lista['cli_numero'],
                'cli_bairro' => $lista['cli_bairro'],
                'cli_cidade' => $lista['cli_cidade'],
                'cli_uf' => $lista['cli_uf'],
                
                'cli_cpf' => $lista['cli_cpf'],
                'cli_cep' => $lista['cli_cep'],
                'cli_ddd' => $lista['cli_ddd'],
                'cli_fone' => $lista['cli_fone'],
                'cli_celular' => $lista['cli_celular'],
                'cli_email' => $lista['cli_email'],
                'cli_pass' => $lista['cli_pass'],
                'cli_data_nasc' => $lista['cli_data_nasc'],
                'cli_hora_cad' => $lista['cli_hora_cad'],
                'cli_data_cad' => Sistema::Fdata($lista['cli_data_cad']),
            );
            $i++;
        endwhile;
    }

    /**
     * prepara os campos para iserir ou atualizar
     */
    function Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha) {
        $this->setCli_nome($cli_nome);
        $this->setCli_sobrenome($cli_sobrenome);
        $this->setCli_data_nasc($cli_data_nasc);
        $this->setCli_cpf($cli_cpf);
        $this->setCli_ddd($cli_ddd);
        $this->setCli_fone($cli_fone);
        $this->setCli_celular($cli_celular);
        $this->setCli_endereco($cli_endereco);
        $this->setCli_numero($cli_numero);
        $this->setCli_bairro($cli_bairro);
        $this->setCli_cidade($cli_cidade);
        $this->setCli_uf($cli_uf);
        $this->setCli_cep($cli_cep);
        $this->setCli_email($cli_email);
        $this->setCli_data_cad($cli_data_cad);
        $this->setCli_hora_cad($cli_hora_cad);
        $this->setCli_senha($cli_senha);
    }

    /**
     * insere o novo cliente no banco 
     */
    function Inserir() {
        // verifica se o email já esta cadstrado 
        if ($this->GetClienteEmail($this->getCli_email()) > 0):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Este Email já esta cadastrado! ';
            Sistema::VoltarPagina();
            echo '</div></div>';
            exit();
        endif;
        // caso passou na verificação grava no banco
        $query = " INSERT INTO {$this->prefix}clientes (cli_usuario,cli_nome, cli_sobrenome,cli_data_nasc, ";
        $query .=" cli_cpf, cli_ddd,cli_fone,cli_celular ,cli_endereco ,cli_numero,cli_bairro ,";
        $query .=" cli_cidade ,cli_uf ,cli_cep ,cli_email ,cli_data_cad, cli_hora_cad, cli_pass)";
        $query .=" VALUES ";
        $query .=" (:cli_usuario,:cli_nome, :cli_sobrenome,:cli_data_nasc,";
        $query .=" :cli_cpf, :cli_ddd,:cli_fone,:cli_celular ,:cli_endereco ,:cli_numero,:cli_bairro ,";
        $query .=" :cli_cidade ,:cli_uf ,:cli_cep ,:cli_email ,:cli_data_cad, :cli_hora_cad, :cli_senha)";
        $params = array(
            ':cli_usuario' => $this->getCli_usuario(),
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_cpf' => $this->getCli_cpf(),
            ':cli_ddd' => $this->getCli_ddd(),
            ':cli_fone' => $this->getCli_fone(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_endereco' => $this->getCli_endereco(),
            ':cli_numero' => $this->getCli_numero(),
            ':cli_bairro' => $this->getCli_bairro(),
            ':cli_cidade' => $this->getCli_cidade(),
            ':cli_uf' => $this->getCli_uf(),
            ':cli_cep' => $this->getCli_cep(),
            ':cli_email' => $this->getCli_email(),
            ':cli_data_cad' => $this->getCli_data_cad(),
            ':cli_hora_cad' => $this->getCli_hora_cad(),
            ':cli_senha' => $this->getCli_senha()
        );
        //  echo $query;                
        $this->ExecuteSQL($query, $params);
    }

    /**
     * ALTERAR cliente no banco 
     */
    function Alterar($id) {
        // verifico se ja tem este CPF no banco
        if ($this->GetClienteCPF($this->getCli_cpf()) > 0 && $this->getCli_cpf() != $_SESSION['CLI']['cli_cpf']):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Este CPF já esta cadastrado ';
            Sistema::VoltarPagina();
            echo '</div></div>';
            exit();
        endif;
        // verifica se o email já esta cadstrado 
        if ($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() != $_SESSION['CLI']['cli_email']):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Este Email já esta cadastrado ';
            Sistema::VoltarPagina();
            echo '</div></div>';
            exit();
        endif;
        // caso passou na verificação grava no banco
        $query = " UPDATE {$this->prefix}clientes SET cli_usuario=:cli_usuario, cli_nome=:cli_nome, cli_sobrenome=:cli_sobrenome,cli_data_nasc=:cli_data_nasc,";
        $query .=" cli_cpf=:cli_cpf, cli_ddd=:cli_ddd,cli_fone=:cli_fone,cli_celular=:cli_celular ,cli_endereco=:cli_endereco ,cli_numero=:cli_numero,cli_bairro=:cli_bairro ,";
        $query .=" cli_cidade=:cli_cidade ,cli_uf=:cli_uf ,cli_cep=:cli_cep ,cli_email=:cli_email ,cli_data_cad=:cli_data_cad, cli_hora_cad=:cli_hora_cad, cli_pass=:cli_senha ";
        $query .=" WHERE  cli_id = :cli_id";
        $params = array(
            ':cli_usuario' => $this->getCli_usuario(),
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_cpf' => $this->getCli_cpf(),
            ':cli_ddd' => $this->getCli_ddd(),
            ':cli_fone' => $this->getCli_fone(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_endereco' => $this->getCli_endereco(),
            ':cli_numero' => $this->getCli_numero(),
            ':cli_bairro' => $this->getCli_bairro(),
            ':cli_cidade' => $this->getCli_cidade(),
            ':cli_uf' => $this->getCli_uf(),
            ':cli_cep' => $this->getCli_cep(),
            ':cli_email' => $this->getCli_email(),
            ':cli_data_cad' => $this->getCli_data_cad(),
            ':cli_hora_cad' => $this->getCli_hora_cad(),
            ':cli_senha' => $this->getCli_senha(),
            ':cli_id' => (int) $id
        );
        //  echo $query;
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    /**
     * ALTERAR cliente no banco na ADM
     */
    function AlterarADM($id) {
        // verifico se ja tem este CPF no banco
        if ($this->GetClienteCPF($this->getCli_cpf()) > 0 && $this->getCli_cpf() != $_REQUEST['cli_cpf']):
            echo '<div class="alert alert-danger text-center" id="erro_mostrar"> Este CPF já esta cadastrado ';
            Sistema::VoltarPagina();
            echo '</div></div>';
            exit();
        endif;
        // verifica se o email já esta cadstrado 
        if ($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() != $_REQUEST['cli_email']):
            echo '<div class="alert alert-danger text-center " id="erro_mostrar"> Este Email já esta cadastrado ';
            Sistema::VoltarPagina();
            echo '</div></div>';
            exit();
        endif;


        // caso passou na verificação grava no banco

        $query = " UPDATE {$this->prefix}clientes SET cli_usuario=:cli_usuario, cli_nome=:cli_nome, cli_sobrenome=:cli_sobrenome,cli_data_nasc=:cli_data_nasc,";
        $query .=" cli_cpf=:cli_cpf, cli_ddd=:cli_ddd,cli_fone=:cli_fone,cli_celular=:cli_celular ,cli_endereco=:cli_endereco ,cli_numero=:cli_numero,cli_bairro=:cli_bairro ,";
        $query .=" cli_cidade=:cli_cidade ,cli_uf=:cli_uf ,cli_cep=:cli_cep ,cli_email=:cli_email  ";
        $query .=" WHERE  cli_id = :cli_id";
        $params = array(
            ':cli_usuario' => $this->getCli_usuario(),
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_cpf' => $this->getCli_cpf(),
            ':cli_ddd' => $this->getCli_ddd(),
            ':cli_fone' => $this->getCli_fone(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_endereco' => $this->getCli_endereco(),
            ':cli_numero' => $this->getCli_numero(),
            ':cli_bairro' => $this->getCli_bairro(),
            ':cli_cidade' => $this->getCli_cidade(),
            ':cli_uf' => $this->getCli_uf(),
            ':cli_cep' => $this->getCli_cep(),
            ':cli_email' => $this->getCli_email(),
            ':cli_id' => (int) $id
        );
        //  echo $query;
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    /**
     * 
     * @param string $cpf
     * @return INT total de dados
     */
    function GetClienteCPF($cpf) {
        $query = "SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_cpf = :cpf ";
        $params = array(':cpf' => $cpf);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    /**
     * 
     * @param string $email
     * @return int total de dados
     */
    function GetClienteEmail($email) {
        $query = "SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_email= :email ";
        $params = array(':email' => $email);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    /**
     * 
     * @param string $senha
     * @param string $email
     */
    function SenhaUpdate($senha, $email) {
        $query = "UPDATE {$this->prefix}clientes SET cli_pass = :senha";
        $query .= " WHERE cli_email = :email ";
        $this->setCli_senha($senha);
        $this->setCli_email($email);
        $params = array(':senha' => $this->getCli_senha(), ':email' => $this->getCli_email());
        $this->ExecuteSQL($query, $params);
    }

// GETTERS retornando os dados do cliente 
    function getCli_usuario() {
        return $this->cli_usuario;
    }

    function setCli_usuario($cli_usuario) {
        $this->cli_usuario = $cli_usuario;
    }

    function getCli_nome() {
        return $this->cli_nome;
    }

    function getCli_sobrenome() {
        return $this->cli_sobrenome;
    }

    function getCli_data_nasc() {
        return $this->cli_data_nasc;
    }

    function getCli_cpf() {


        return $this->cli_cpf;
    }

    function getCli_ddd() {
        return $this->cli_ddd;
    }

    function getCli_fone() {
        return $this->cli_fone;
    }

    function getCli_celular() {
        return $this->cli_celular;
    }

    function getCli_endereco() {
        return $this->cli_endereco;
    }

    function getCli_numero() {

        return $this->cli_numero;
    }

    function getCli_bairro() {
        return $this->cli_bairro;
    }

    function getCli_cidade() {
        return $this->cli_cidade;
    }

    function getCli_uf() {
        return $this->cli_uf;
    }

    function getCli_cep() {
        return $this->cli_cep;
    }

    function getCli_email() {
        return $this->cli_email;
    }

    function getCli_data_cad() {
        return $this->cli_data_cad;
    }

    function getCli_hora_cad() {
        return $this->cli_hora_cad;
    }

    function getCli_senha() {
        return $this->cli_senha;
    }

    //  Começa os SETTERS dos dados do cliente 

    function setCli_nome($cli_nome) {
        if (strlen($cli_nome) < 3):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Digite seu nome ';
            Sistema::VoltarPagina();
            echo '</div></div>';
        else:

            $this->cli_nome = $cli_nome;
        endif;
    }

    function setCli_sobrenome($cli_sobrenome) {
        if (strlen($cli_sobrenome) < 3):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Digite seu sobrenome ';
            Sistema::VoltarPagina();
            echo '</div></div>';
       else:
            $this->cli_sobrenome = $cli_sobrenome;
        endif;
    }

    function setCli_data_nasc($cli_data_nasc) {
        $this->cli_data_nasc = $cli_data_nasc;
    }

    function setCli_cpf($cli_cpf) {
        if(!Sistema::ValidarCPF($cli_cpf)):           
              echo '<div class="alert alert-danger " id="erro_mostrar"> CPF incorreto ';
               Sistema::VoltarPagina();
                echo '</div>';
            exit();  
       else:        
          $this->cli_cpf = $cli_cpf;   
        endif;
        $this->cli_cpf = $cli_cpf;
    }

    function setCli_ddd($cli_ddd) {
        $ddd = filter_var($cli_ddd, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($ddd) != 2):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> DDD incorreto ';
            Sistema::VoltarPagina();
            echo '</div></div>';
        else:
            $this->cli_ddd = $cli_ddd;
        endif;
    }

    function setCli_fone($cli_fone) {
        $this->cli_fone = $cli_fone;
    }

    function setCli_celular($cli_celular) {
        $this->cli_celular = $cli_celular;
    }

    function setCli_endereco($cli_endereco) {
        $this->cli_endereco = $cli_endereco;
    }

    function setCli_numero($cli_numero) {
        $this->cli_numero = $cli_numero;
    }

    function setCli_bairro($cli_bairro) {
        $this->cli_bairro = $cli_bairro;
    }

    function setCli_cidade($cli_cidade) {
        $this->cli_cidade = $cli_cidade;
    }

    function setCli_uf($cli_uf) {
        $uf = filter_var($cli_uf, FILTER_SANITIZE_STRING);
        if (strlen($uf) != 2): // 11111
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> UF incorreto ';
            Sistema::VoltarPagina();
            echo '</div></div>';
        else:
            $this->cli_uf = $cli_uf;
        endif;
    }

    function setCli_cep($cli_cep) {
        $cep = filter_var($cli_cep, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($cep) != 8):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> CEP incorreto ';
            Sistema::VoltarPagina();
            echo '</div></div>';
        else:
            $this->cli_cep = $cli_cep;
        endif;
    }

    function setCli_email($cli_email) {
        if (!filter_var($cli_email, FILTER_VALIDATE_EMAIL)):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Email incorreto ';
            Sistema::VoltarPagina();
            echo '</div></div>';
            exit();
        else:
            $this->cli_email = $cli_email;
        endif;
    }

    function setCli_data_cad($cli_data_cad) {
        $this->cli_data_cad = $cli_data_cad;
    }

    function setCli_hora_cad($cli_hora_cad) {
        $this->cli_hora_cad = $cli_hora_cad;
    }

    function setCli_senha($cli_senha) {
        $this->cli_senha = Sistema::Criptografia($cli_senha);
        // 123 => md5 = 18513ba35987a447b98f075bd226a1fc
    }

}
