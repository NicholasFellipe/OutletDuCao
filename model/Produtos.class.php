<?php

/**
 * descricao Produtos
 *
 * @author adrianosites.com.br
 */
class Produtos extends Conexao {

    private $pro_nome, $pro_categoria, $pro_ativo, $pro_modelo, $pro_ref,
            $pro_valor, $pro_estoque, $pro_peso, $pro_altura, $pro_largura, $pro_comprimento,
            $pro_img, $pro_desc, $pro_slug;

    function __construct() {
        parent::__construct();
    }

    /**
     * Busca  todos os produtos sem filtrar
     */
    function GetProdutos() {
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query.= " ORDER BY pro_id DESC";
        $query .= $this->PaginacaoLinks("pro_id", $this->prefix . "produtos");
// echo $query;  
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  todos os produtos das categorias
     */
    function GetProdutosRecomendados() {
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id ORDER BY RAND() limit 4";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param INT id do produto
     */
    function GetProdutosID($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " AND pro_id = :id";
        $params = array(':id' => (int) $id);
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /**
     * 
     * @param INT  id da categoria
     */
    function GetProdutosCate($id) {


        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);


        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " AND pro_categoria = :id ";


        $query .= $this->PaginacaoLinks("pro_id", $this->prefix . "produtos WHERE pro_categoria=" . (int) $id);

        $params = array(':id' => (int) $id);


        $this->ExecuteSQL($query, $params);

        $this->GetLista();
    }

    /**
     * 
     * @param string $nome do produto para buscar
     */
    function GetProdutosNome($nome = null) {

        $nome = filter_var($nome, FILTER_SANITIZE_STRING);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " AND pro_nome LIKE :nome";



        $params = array(':nome' => '%' . $nome . '%');


        $this->ExecuteSQL($query, $params);

        $this->GetLista();
    }

    /**
     * 
     * @param string Resultado de pesquisa na pagina pesquisa
     */
    function GetPesquisa($pesquisa) {
        if (isset($_REQUEST['pesquisar']) && ($_REQUEST['pesquisar'] != NULL )):
            $BD_HOST = Config::BD_HOST;
            $BD_USER = Config::BD_USER;
            $BD_SENHA = Config::BD_SENHA;
            $BD_BANCO = Config::BD_BANCO;
            //Criar a conexao
            $conn = mysqli_connect($BD_HOST, $BD_USER, $BD_SENHA, $BD_BANCO);
            $pesquisar = $_POST['pesquisar'];
            $sql = "SELECT * FROM {$this->prefix}produtos WHERE pro_nome LIKE '%$pesquisar%' LIMIT 10";
            $sql = mysqli_query($conn, $sql);
            echo '<section>
    <div class="container">
        <div class="row">
          <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Categorias</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="' . Rotas::pag_Produtos() . '">Todas as Categorias</a></h4>
                                </div>
                            </div>
                     
                    </div><!--/category-productsr-->
                   </div>
            </div>
             <div class="col-sm-9 padding-right">
                <!--features_items-->
                <div class="features_items">
                    <h2 class="title text-center">Página de produtos</h2>';


            $i = 1;

            while ($rows_cursos = mysqli_fetch_array($sql)) {

                if ($i == 1):
                    echo '<div class="row" id="pularliha">';
                endif;
                echo ' <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="' . Rotas::ImageLink($rows_cursos['pro_img'], 180, 180) . '" alt="' . $rows_cursos['pro_nome'] . '" />
                                            <h2>R$ ' . $rows_cursos['pro_valor'] . '</h2>
                                            <p>' . $rows_cursos['pro_nome'] . '</p>
                                            <a href="' . Rotas::pag_ProdutosInfo() . '/' . $rows_cursos['pro_id'] . '/' . $rows_cursos['pro_slug'] . '" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Ver o produto</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>R$ ' . $rows_cursos['pro_valor'] . '</h2>
                                                <p>' . $rows_cursos['pro_nome'] . '</p>
                                                <a href="' . Rotas::pag_ProdutosInfo() . '/' . $rows_cursos['pro_id'] . '/' . $rows_cursos['pro_slug'] . '" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Ver o pruduto</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                         <ul class="nav nav-pills nav-justified">
                                            <form name="carrinho" method="post" action="' . Rotas::pag_CarrinhoAlterar() . '">
                                            <input type="hidden" name="pro_id" value="' . $rows_cursos['pro_id'] . '">
                                            <input type="hidden" name="acao" value="add">
                                            <button  class=" btn btn-default check_out btn-block"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</button>
                                        </form> 
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            ';

                if ($i % 3 == 0):

                    echo '</div>';
                    $i = 0;
                endif;

                $i = $i + 1;
            }
        else:
            echo '<div class="container"><h2 class="alert alert-danger text-center">Nada encontrado, pesquise novamente!</h2></div>';
            Rotas::Redirecionar(1, Rotas::pag_Produtos());
        endif;

        echo '</div>
                 </div>
                 </div>
                </div>
                </section>';
    }

    /**
     * retorna o array com os itens da tabela
     */
    private function GetLista() {

        $i = 1;
        while ($lista = $this->ListarDados()):

            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_desc' => $lista['pro_desc'],
                'pro_peso' => $lista['pro_peso'],
                'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
                'pro_valor_us' => $lista['pro_valor'],
                'pro_altura' => $lista['pro_altura'],
                'pro_largura' => $lista['pro_largura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img_atual' => $lista['pro_img'],
                'pro_img' => Rotas::ImageLink($lista['pro_img'], 180, 180),
                'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 70, 70),
                'pro_img_g' => Rotas::ImageLink($lista['pro_img'], 300, 300),
                'pro_slug' => $lista['pro_slug'],
                'pro_ref' => $lista['pro_ref'],
                'cate_nome' => $lista['cate_nome'],
                'cate_id' => $lista['cate_id'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_ativo' => $lista['pro_ativo'],
                'pro_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['pro_img'],
            );
            $i++;
        endwhile;
    }

    /**
     * 
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_modelo, $pro_ref, $pro_valor, $pro_estoque, $pro_peso, $pro_altura, $pro_largura, $pro_comprimento, $pro_img, $pro_desc, $pro_slug = null) {

        $this->setPro_nome($pro_nome);
        $this->setPro_categoria($pro_categoria);
        $this->setPro_ativo($pro_ativo);
        $this->setPro_modelo($pro_modelo);
        $this->setPro_ref($pro_ref);
        $this->setPro_valor($pro_valor);
        $this->setPro_estoque($pro_estoque);
        $this->setPro_peso($pro_peso);
        $this->setPro_altura($pro_altura);
        $this->setPro_largura($pro_largura);
        $this->setPro_comprimento($pro_comprimento);
        $this->setPro_img($pro_img);
        $this->setPro_desc($pro_desc);
        $this->setPro_slug($pro_nome);
    }

    /**
     * 
     *  insere os dados no banco apos terem sido preparados
     */
    function Inserir() {

        $query = "INSERT INTO {$this->prefix}produtos (pro_nome, pro_categoria, pro_ativo, pro_modelo, pro_ref,";
        $query.= " pro_valor, pro_estoque, pro_peso , pro_altura, pro_largura, pro_comprimento ,pro_img, pro_desc, pro_slug)";
        $query.= " VALUES ";
        $query.= " ( :pro_nome, :pro_categoria, :pro_ativo, :pro_modelo, :pro_ref, :pro_valor, :pro_estoque, :pro_peso ,";
        $query.= " :pro_altura, :pro_largura, :pro_comprimento ,:pro_img, :pro_desc, :pro_slug)";

        $params = array(
            ':pro_nome' => $this->getPro_nome(),
            ':pro_categoria' => $this->getPro_categoria(),
            ':pro_ativo' => $this->getPro_ativo(),
            ':pro_modelo' => $this->getPro_modelo(),
            ':pro_ref' => $this->getPro_ref(),
            ':pro_valor' => $this->getPro_valor(),
            ':pro_estoque' => $this->getPro_estoque(),
            ':pro_peso' => $this->getPro_peso(),
            ':pro_altura' => $this->getPro_altura(),
            ':pro_largura' => $this->getPro_largura(),
            ':pro_comprimento' => $this->getPro_comprimento(),
            ':pro_img' => $this->getPro_img(),
            ':pro_desc' => $this->getPro_desc(),
            ':pro_slug' => $this->getPro_slug(),
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     *  metodo que altera  um produto existente 
     */
    function Alterar($id) {
        $query = " UPDATE {$this->prefix}produtos SET pro_nome=:pro_nome, pro_categoria=:pro_categoria,";
        $query.= " pro_ativo=:pro_ativo, pro_modelo=:pro_modelo, pro_ref=:pro_ref,";
        $query.= " pro_valor=:pro_valor, pro_estoque=:pro_estoque, pro_peso=:pro_peso , ";
        $query.= " pro_altura=:pro_altura, pro_largura=:pro_largura,";
        $query.= " pro_comprimento=:pro_comprimento ,pro_img=:pro_img, pro_desc=:pro_desc, pro_slug=:pro_slug";
        $query.= " WHERE pro_id = :pro_id";
// $query.= " VALUES ";
// $query.= " ( :pro_nome, :pro_categoria, :pro_ativo, :pro_modelo, :pro_ref, :pro_valor, :pro_estoque, :pro_peso ,";
//  $query.= " :pro_altura, :pro_largura, :pro_comprimento ,:pro_img, :pro_desc, :pro_slug)";

        $params = array(
            ':pro_nome' => $this->getPro_nome(),
            ':pro_categoria' => $this->getPro_categoria(),
            ':pro_ativo' => $this->getPro_ativo(),
            ':pro_modelo' => $this->getPro_modelo(),
            ':pro_ref' => $this->getPro_ref(),
            ':pro_valor' => $this->getPro_valor(),
            ':pro_estoque' => $this->getPro_estoque(),
            ':pro_peso' => $this->getPro_peso(),
            ':pro_altura' => $this->getPro_altura(),
            ':pro_largura' => $this->getPro_largura(),
            ':pro_comprimento' => $this->getPro_comprimento(),
            ':pro_img' => $this->getPro_img(),
            ':pro_desc' => $this->getPro_desc(),
            ':pro_slug' => $this->getPro_slug(),
            ':pro_id' => (int) $id,
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * 
     * @param int $id do produto que vai apagar 
     */
    function Apagar($id) {
        $query = "DELETE FROM {$this->prefix}produtos";
        $query.= " WHERE pro_id= :id";
        $params = array(':id' => (int) $id);
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * ***************** CRIANDO GETTERS E SETTERS ***********
     */
    function getPro_nome() {
        return $this->pro_nome;
    }

    function getPro_categoria() {
        return $this->pro_categoria;
    }

    function getPro_ativo() {
        return $this->pro_ativo;
    }

    function getPro_modelo() {
        return $this->pro_modelo;
    }

    function getPro_ref() {
        return $this->pro_ref;
    }

    function getPro_valor() {
        return $this->pro_valor;
    }

    function getPro_estoque() {
        return $this->pro_estoque;
    }

    function getPro_peso() {
        return $this->pro_peso;
    }

    function getPro_altura() {
        return $this->pro_altura;
    }

    function getPro_largura() {
        return $this->pro_largura;
    }

    function getPro_comprimento() {
        return $this->pro_comprimento;
    }

    function getPro_img() {
        return $this->pro_img;
    }

    function getPro_desc() {
        return $this->pro_desc;
    }

    function getPro_slug() {
        return $this->pro_slug;
    }

    function setPro_nome($pro_nome) {
        $this->pro_nome = $pro_nome;
    }

    function setPro_categoria($pro_categoria) {
        $this->pro_categoria = $pro_categoria;
    }

    function setPro_ativo($pro_ativo) {
        $this->pro_ativo = $pro_ativo;
    }

    function setPro_modelo($pro_modelo) {
        $this->pro_modelo = $pro_modelo;
    }

    function setPro_ref($pro_ref) {
        $this->pro_ref = $pro_ref;
    }

    function setPro_valor($pro_valor) {
//1.335,99 => 1.33599
// procura a virgula e troca por ponto
        $pro_valor = str_replace('.', '', $pro_valor);
        $pro_valor = str_replace(',', '.', $pro_valor);

        $this->pro_valor = $pro_valor;
// echo $this->pro_valor;
    }

    function setPro_estoque($pro_estoque) {
        $this->pro_estoque = $pro_estoque;
    }

    function setPro_peso($pro_peso) {

///  1,600  => 1.600
        $this->pro_peso = str_replace(',', '.', $pro_peso);
    }

    function setPro_altura($pro_altura) {

        $this->pro_altura = $pro_altura;
    }

    function setPro_largura($pro_largura) {
        $this->pro_largura = $pro_largura;
    }

    function setPro_comprimento($pro_comprimento) {
        $this->pro_comprimento = $pro_comprimento;
    }

    function setPro_img($pro_img) {
        $this->pro_img = $pro_img;
    }

    function setPro_desc($pro_desc) {
        $this->pro_desc = $pro_desc;
    }

    function setPro_slug($pro_slug) {
        $this->pro_slug = Sistema::GetSlug($pro_slug);
    }

}
