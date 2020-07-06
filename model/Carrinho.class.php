<?php

/**
 * descricao Carrinho
 *
 * @author adrianosites.com.br
 */
class Carrinho {

    /**
     *
     * @var float : armazena o valor total dos itens do carrinho
     */
    private $total_Valor;

    /**
     *
     * @var float peso total dos itens
     */
    private $total_Peso, $total_Autura, $total_Largura, $total_Comprimento;

    /**
     *
     * @var array: todos os itens do carrinho
     */
    private $itens = array();

    function GetCarrinho($sessao = NULL) {
        $i = 1;
        $sub = 1.00;
        $peso = 0;
        foreach ($_SESSION['PRO'] as $lista):
            // calculo o subtotal do item
            $sub = ($lista['VALOR_US'] * $lista['QTD']);
            $this->total_Valor += $sub;
            // calcula peso
            $peso = $lista['PESO'] * $lista['QTD'];
            $this->total_Peso += $peso;
            //´gero meu arrai dos itens
            $this->itens[$i] = array(
                'pro_id' => $lista['ID'],
                'pro_nome' => $lista['NOME'],
                'pro_valor' => $lista['VALOR'], // 1.000,99
                'pro_valor_us' => $lista['VALOR_US'], // 1000.99
                'pro_peso' => $lista['PESO'],
                'pro_qtd' => $lista['QTD'],
                'pro_img' => $lista['IMG'],
                'pro_link' => $lista['LINK'],
                'pro_subTotal' => Sistema::MoedaBR($sub),
                'pro_subTotal_us' => $sub
            );
            $i++;
        endforeach;
        if (count($this->itens) > 0):
            return $this->itens;
        else:
            echo '<div class="container"><h4 class="alert alert-danger text-center"> Sem produtos no carrinho</h4></div>';
            Rotas::Redirecionar(1, Rotas::pag_Produtos());
        endif;
    }

    /**
     * 
     * @param type $sessao
     * @return Array retorna todos os dados do carrinho em numero 
     */
    function GetCarrinhoIcone($sessao = NULL) {
        $i = 1;
        $sub = 1.00;
        $peso = 0;
        if (isset($_SESSION['PRO'])):


            foreach ($_SESSION['PRO'] as $lista):
                // calculo o subtotal do item
                $sub = ($lista['VALOR_US'] * $lista['QTD']);
                $this->total_Valor += $sub;
                // calcula peso
                $peso = $lista['PESO'] * $lista['QTD'];
                $this->total_Peso += $peso;
                //´gero meu arrai dos itens
                $this->itens[$i] = array(
                    'pro_id' => $lista['ID'],
                    'pro_nome' => $lista['NOME'],
                    'pro_valor' => $lista['VALOR'], // 1.000,99
                    'pro_valor_us' => $lista['VALOR_US'], // 1000.99
                    'pro_peso' => $lista['PESO'],
                    'pro_qtd' => $lista['QTD'],
                    'pro_img' => $lista['IMG'],
                    'pro_link' => $lista['LINK'],
                    'pro_subTotal' => Sistema::MoedaBR($sub),
                    'pro_subTotal_us' => $sub
                );
                $i++;
            endforeach;
        endif;
        if (count($this->itens) > 0):
            return $this->itens;
        else:
        //echo '<div class="container"><h4 class="alert alert-danger text-center"> Sem produtos no carrinho</h4></div>';
        //  Rotas::Redirecionar(1, Rotas::pag_Produtos());
        endif;
    }

    /**
     * 
     * @param type $sessao
     * @return array irá fazer um calculo dinamico do calculo do Frete
     */
    function GetCarrinhoCEP($sessao = NULL) {
        $i = 1;
        $peso = 0;
        $altura = 0;
        $largura = 0;
        $comprimento = 0;
        foreach ($_SESSION['PRO'] as $lista):
            // calcula peso
            $peso = $lista['PESO'] * $lista['QTD'];
            $altura = $lista['ALTURA'] * $lista['QTD'];
            $largura = $lista['LARGURA'] * $lista['QTD'];
            $comprimento = $lista['COMPRIMENTO'] * $lista['QTD'];
            $this->total_Peso += $peso;
            $this->total_Autura+=$altura;
            $this->total_Largura+=$largura;
            $this->total_Comprimento+=$comprimento;
            //´gero meu arrai dos itens
            $this->itens[$i] = array(
                'pro_id' => $lista['ID'],
                'pro_nome' => $lista['NOME'],
                'pro_valor_us' => $lista['VALOR_US'], // 1000.99
                'pro_peso' => $lista['PESO'],
                'pro_qtd' => $lista['QTD'],
                'pro_altura' => $altura,
                'pro_largura' => $largura,
                'pro_comprimento' => $comprimento
            );
            $i++;
        endforeach;
        if (count($this->itens) > 0):
            return $this->itens;
        endif;
    }

    /**
     * 
     * @return float : total do carrinho
     */
    function GetTotal() {
        return $this->total_Valor;
    }

    /**
     * 
     * @return float com o peso 
     */
    function GetPeso() {
        return $this->total_Peso;
    }

    function CarrinhoADD($id) {
        //objeto produtos
        $produtos = new Produtos();
        // metodo que pega o produtos pelo ID
        $produtos->GetProdutosID($id);
        // pegando informações do produtos
        foreach ($produtos->GetItens() as $pro):
            $ID = $pro['pro_id'];
            $NOME = $pro['pro_nome'];
            $VALOR_US = $pro['pro_valor_us'];
            $VALOR = $pro['pro_valor'];
            $PESO = $pro['pro_peso'];
            $ALTURA = $pro['pro_altura'];
            $LARGURA = $pro['pro_largura'];
            $COMPRIMENTO = $pro['pro_comprimento'];
            $QTD = 1;
            $IMG = $pro['pro_img_p'];
            $LINK = Rotas::pag_ProdutosInfo() . '/' . $ID . '/' . $pro['pro_slug'];
            $ACAO = $_POST['acao'];
        endforeach;
        switch ($ACAO):
            // insere itens no carrinho
            case 'add':
                // verifico se nao tem ainda o produto se não tem gravo novo             
                if (!isset($_SESSION['PRO'][$ID]['ID'])):
                    $_SESSION['PRO'][$ID]['ID'] = $ID;
                    $_SESSION['PRO'][$ID]['NOME'] = $NOME;
                    $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
                    $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
                    $_SESSION['PRO'][$ID]['PESO'] = $PESO;
                    $_SESSION['PRO'][$ID]['ALTURA'] = $ALTURA;
                    $_SESSION['PRO'][$ID]['LARGURA'] = $LARGURA;
                    $_SESSION['PRO'][$ID]['COMPRIMENTO'] = $COMPRIMENTO;
                    $_SESSION['PRO'][$ID]['QTD'] = $QTD;
                    $_SESSION['PRO'][$ID]['IMG'] = $IMG;
                    $_SESSION['PRO'][$ID]['LINK'] = $LINK;
                // se ja tem aumento a QTD
                else:
                    $_SESSION['PRO'][$ID]['QTD'] += $QTD;
                endif;
                echo '<div class="container"><h4 class="alert alert-success text-center">Produto Inserido!</h4></div>';
                Rotas::Redirecionar(1, Rotas::pag_Carrinho());
                break;

            // caso seja para deletar o item do carrinho
            case 'del':
                $this->CarrinhoDEL($id);
                echo '<div class="container"><h4 class="alert alert-success text-center">Produto Removido!</h4></div>';
                Rotas::Redirecionar(1, Rotas::pag_Carrinho());
                break;
            // caso seja para limpar  o carrinho todo
            case 'limpar':
                $this->CarrinhoLimpar();
                echo '<div class="container"><h4 class="alert alert-success text-center">Produtos Removidos!</h4></div>';
                Rotas::Redirecionar(1, Rotas::pag_Produtos());
                break;
//            Remove QUANTIDADE de 1 por 1 Itens do Carrinho, se zerar exclui o item do carrinho
            case 'remover':
                $_SESSION['PRO'][$ID]['QTD'] -= $QTD;

                if ($_SESSION['PRO'][$ID]['QTD'] == 0):
                    $this->CarrinhoDEL($id);
                    echo '<div class="container"><h4 class="alert alert-success text-center">Produto Removido!</h4></div>';
                else:
                     echo '<div class="container"><h4 class="alert alert-success text-center">Quantidade Diminuida!</h4></div>';
                    endif;
               
                Rotas::Redirecionar(1, Rotas::pag_Carrinho());
                break;
        endswitch;
    }

//    Adiciona produto ao Carrinho e volta para a página anterior
    function CarrinhoUnid($id) {
        //objeto produtos
        $produtos = new Produtos();
        // metodo que pega o produtos pelo ID
        $produtos->GetProdutosID($id);
        // pegando informações do produtos
        foreach ($produtos->GetItens() as $pro):
            $ID = $pro['pro_id'];
            $NOME = $pro['pro_nome'];
            $VALOR_US = $pro['pro_valor_us'];
            $VALOR = $pro['pro_valor'];
            $PESO = $pro['pro_peso'];
            $ALTURA = $pro['pro_altura'];
            $LARGURA = $pro['pro_largura'];
            $COMPRIMENTO = $pro['pro_comprimento'];
            $QTD = 1;
            $IMG = $pro['pro_img_p'];
            $LINK = Rotas::pag_ProdutosInfo() . '/' . $ID . '/' . $pro['pro_slug'];
            $ACAO = $_POST['acao'];
        endforeach;
        switch ($ACAO):
            // caso seja para inserir

            case 'addcarrinho':
                // verifico se nao tem ainda o produto se não tem gravo novo             
                if (!isset($_SESSION['PRO'][$ID]['ID'])):
                    $_SESSION['PRO'][$ID]['ID'] = $ID;
                    $_SESSION['PRO'][$ID]['NOME'] = $NOME;
                    $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
                    $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
                    $_SESSION['PRO'][$ID]['PESO'] = $PESO;
                    $_SESSION['PRO'][$ID]['ALTURA'] = $ALTURA;
                    $_SESSION['PRO'][$ID]['LARGURA'] = $LARGURA;
                    $_SESSION['PRO'][$ID]['COMPRIMENTO'] = $COMPRIMENTO;
                    $_SESSION['PRO'][$ID]['QTD'] = $QTD;
                    $_SESSION['PRO'][$ID]['IMG'] = $IMG;
                    $_SESSION['PRO'][$ID]['LINK'] = $LINK;
                // se ja tem aumento a QTD
                else:
                    $_SESSION['PRO'][$ID]['QTD'] += $QTD;
                endif;
                echo '<div class="container"><h4 class="alert alert-success text-center">Produto Inserido!</h4></div>';
                echo '<script>window.history.back();</script>';
                break;
            case 'addqtd':
                // verifico se nao tem ainda o produto se não tem gravo novo             
                if (!isset($_SESSION['PRO'][$ID]['ID'])):
                    $_SESSION['PRO'][$ID]['ID'] = $ID;
                    $_SESSION['PRO'][$ID]['NOME'] = $NOME;
                    $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
                    $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
                    $_SESSION['PRO'][$ID]['PESO'] = $PESO;
                    $_SESSION['PRO'][$ID]['ALTURA'] = $ALTURA;
                    $_SESSION['PRO'][$ID]['LARGURA'] = $LARGURA;
                    $_SESSION['PRO'][$ID]['COMPRIMENTO'] = $COMPRIMENTO;
                    $_SESSION['PRO'][$ID]['QTD'] = $QTD;
                    $_SESSION['PRO'][$ID]['IMG'] = $IMG;
                    $_SESSION['PRO'][$ID]['LINK'] = $LINK;
                // se ja tem aumento a QTD
                else:
                    $_SESSION['PRO'][$ID]['QTD'] += $QTD;
                endif;
                echo '<div class="container"><h4 class="alert alert-success text-center">Quantidade Aumentada!</h4></div>';
                Rotas::Redirecionar(1, Rotas::pag_Carrinho());
                break;


        endswitch;
    }

    /**
     * 
     * @param int produto e remove
     */
    private function CarrinhoDEL($id) {
        unset($_SESSION['PRO'][$id]);
    }

    /**
     * lompo o carrinho todo
     */
    private function CarrinhoLimpar() {
        unset($_SESSION['PRO']);
    }

}
