<section id="cart_items">
    <div class="container">	
        <div class="review-payment">
            <h2>Revisão & Pagamento</h2>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Preço</td>
                        <td class="quantity">Quantidade</td>
                        <td class="total">Total</td>  
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$PRO item=P}
                        <tr class="cart_info">
                            <td class="cart_product">
                    <picture> <a href=""><img src="{$P.pro_img}" alt="{$P.pro_nome}"></a></picture>
                    </td>
                    <td class="cart_description">
                        <h4> {$P.pro_nome}</h4>
                        <!--<p>Ref: {$P.pro_ref}</p>-->
                    </td>
                    <td class="cart_price">
                        <p>{$P.pro_valor}</p>
                    </td>
                    <td class="cart_quantity">
                        <p> {$P.pro_qtd} </p>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">{$P.pro_subTotal}</p>
                    </td> 
                    </tr>
                {/foreach}
                <tr>
                   
                        <table class="table table-condensed total-result">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="description"><h3 class="text-center"><i class="fa fa-paper-plane"></i> Dados para entrega</h3></td>
                                    <td class="price"><h3 class="text-center"><i class="fa fa-paper-plane"></i> SubTotal</h3></td>
                                </tr>
                            </thead>
                            <tr class="cart_info">
                                <td class="description">
                                    
                                    <h4><p>Nome: {$NOME_DO_CLIENTE}</p></h4>
                                    <h4><p>Endereço: {$ENDERECO_DO_CLIENTE}</p></h4>
                                    <h4><p>Número: {$NUMERO_DO_CLIENTE}</p></h4>
                                    <h4><p>Bairro: {$BAIRRO_DO_CLIENTE}</p></h4>
                                    <h4><p>Cidade: {$CIDADE_DO_CLIENTE} </p></h4>
                                    <h4><p>Estado: {$UF_DO_CLIENTE}</p></h4>
                                    <h4><p>CEP: {$CEP_DO_CLIENTE}</p></h4>
                                    
                                </td> 
                                <td class="price text-success">
                                    <h4><p>Total: R$ {$TOTAL}</p></h4>
                                    <h4><p>Frete: R$ {$FRETE}</p></h4>
                                    <h4><p><span>Valor Final R$ {$TOTAL_FRETE}</span></p></h4>
                                </td>

                            </tr>

                        </table>
                <h3><p class="alert alert-warning">* Endereço do seu cadastro, se tiver algo errado favor alterar!</p></h3>
                    </td>




                </tr>




                </tbody>
            </table>
        </div>
        <div class="payment-options">
            <span>
                <div class="col-md-4 pull-left">
                    <a href="{$PAG_CARRINHO}" class="btn btn-default check_out" title=""><i class="fa fa-backward"></i> Voltar ao Carrinho</a>
                </div>
            </span>
            <span>
                <div class="col-md-4 pull-right">

                    <a href="{$PAG_FINALIZAR}" class="btn btn-default check_out" title=""> <i class="fa fa-check"></i> Finalizar</a> 
                </div>
            </span>

        </div>
    </div>
</section> <!--/#cart_items-->

<!-- botoes e opções de cima -->

<br>

