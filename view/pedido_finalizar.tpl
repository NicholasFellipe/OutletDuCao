<section id="cart_items">
    <div class="container">	
        <div class="review-payment">
            <h2 class="alert alert-success">Pedido Realizado com Sucesso!!!</h2>
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
                        <tr>
                            <td class="cart_product">
                               <picture> <a href=""><img src="{$P.pro_img}" alt="{$P.pro_nome}"></a></picture>
                            </td>
                            <td class="cart_description">
                                <h4><a href="{$P.pro_nome}  "> </a></h4>
                                {*<!--<p>Ref: {$P.pro_ref}</p>-->*}
                            </td>
                            <td class="cart_price">
                                <p>{$P.pro_valor}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{$P.pro_subTotal}</p>
                            </td>  
                        </tr>
                    {/foreach}
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Total</td>
                                    <td>R$ {$TOTAL}</td>
                                </tr>
                                <tr>
                                    <td>Frete</td>
                                    <td>R$ {$FRETE}</td>
                                </tr>

                                <tr>
                                    <td>Valor Final</td>
                                    <td><span>R$ {$TOTAL_FRETE}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
       {* <div class="payment-options">
            <span>
                 <div class="col-md-4 pull-left">
        <a href="{$PAG_CARRINHO}" class="btn btn-default check_out" title="">Voltar ao Carrinho</a>
    </div>
            </span>
            <span>
               <div class="col-md-4 pull-right">

        <a href="{$PAG_FINALIZAR}" class="btn btn-default check_out" title=""> <i class="glyphicon glyphicon-ok"></i> Finalizar</a> 

    </div>
            </span>
            
        </div>*}
    </div>
</section>{* <!--/#cart_items--> *}          
      {*  <!--  modos de pagamento e outras informações --> *}
        <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3> 
            <div class="col-md-4"></div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-block" onclick=" 
                   PagSeguroLightbox({
    code: '{$PS_COD}'
    }, {
    success : function(transactionCode) {
      alert('Transação efetiva - ' + transactionCode);
        window.location ='{$PAG_RETORNO}/{$REF}';
    },
    abort : function() {
       alert('Erro no processo de pagamento');
         window.location ='{$PAG_ERRO}/{$REF}';
    }
});  "> Pagar Agora via PagSeguro</button>
                  <picture> <img src="{$TEMA}/images/logo-pagseguro.png"  alt=""> </picture>
                   <script type="text/javascript" src="{$PS_SCRIPT}"></script>
                
            </div>
            <div class="col-md-4"></div>    
        </section>  