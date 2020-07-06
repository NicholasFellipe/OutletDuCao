<h4 class="text-center">Dados do pedido</h4>

<!-- informações sobre o pedido -->
<section class="container" id="cart_items">
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed" >
                <thead>
                    <tr class="cart_info">
                        <td class="description"><b>Data:</b> {$ITENS.1.ped_data}</td>
                        <td class="description"><b>Hora:</b> {$ITENS.1.ped_hora}</td>
                        <td class="description"><b>Ref:</b> {$ITENS.1.ped_ref}</td>
                        <td class="description"><b>Status:</b> {$ITENS.1.ped_pag_status}</td>
                    </tr>  
                </thead>
            </table>
        </div>
    </center>
</section>
<!-- listagem dos itens --->
<section class="container" id="cart_items">
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>   
                    <tr class="cart_menu">
                        <td class="description"></td>
                        <td class="description">Item</td>
                        <td class="description">Valor Uni</td>
                        <td class="description">Quantidade</td>
                        <td class="description">SubTotal</td>
                    </tr>
                </thead>   
                {foreach from=$ITENS item=P}
                    <tr>
                        <td class="description"><picture><img src="{$P.item_img}" alt=""> </picture></td>
                        <td class="description"> {$P.item_nome}</td>
                        <td class="description"> {$P.item_valor}</td>
                        <td class="description"> {$P.item_qtd}</td>
                        <td class="description"> {$P.item_sub}</td>
                    </tr>
                {/foreach}
            </table>
        </div>
    </center>
</section>
<section class="container" id="cart_items">
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed" >
                <thead>
                    <tr class="cart_info">
                        <td class="description"> <b>Frete:</b> R$ {$ITENS.1.ped_frete_valor}</td>
                        <td class="description"> <b>Total:</b> R$ {$TOTAL}</td>
                        <td class="description"> <b>Valor Final:</b> R$ {$ITENS.1.ped_frete_valor+$TOTAL}</td>
                    </tr>  
                </thead>
            </table>
        </div>
    </center>
</section>  
{if $ITENS.1.ped_pag_status =='NAO'}          
    <!--  modos de pagamento e outras informações --> 
    <section class="container">
        <h3 class="text-center"> Formas de pagamento </h3>     
        <div class="col-md-4">
        </div>
        <!-- botao de pagamento  -->
        <div class="col-md-4">
            <button class="btn btn-primary btn-lg btn-block" onclick="
                    PagSeguroLightbox({
                        code: '{$PS_COD}'
                    }, {
                        success: function (transactionCode) {
                            alert('Transação efetiva - ' + transactionCode);
                            window.location = '{$PAG_RETORNO}/{$REF}';
                                        },
                                        abort: function () {
                                            alert('Erro no processo de pagamento');
                                            window.location = '{$PAG_ERRO}/{$REF}';
                                                        }
                                                    });

                    ">
                Pagar Agora via PagSeguro</button>
            <script type="text/javascript" src="{$PS_SCRIPT}"></script>
        </div>
        <div class="col-md-4">
        </div>
    </section>
    {*   fim do IF do pagamento *}
{/if}
<section class='container'>
    <br>
    <center>              
        <img src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/todos_estatico_550_100.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto.">                                      
    </center>
    <br>
</section>