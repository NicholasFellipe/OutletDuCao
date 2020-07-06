<script>
    $(document).ready(function () {
        // validar frete
        $('#buscar_frete').click(function () {
            var CEP_CLIENTE = $('#cep_frete').val();
            var PESO_FRETE = $('#peso_frete').val();
            if (CEP_CLIENTE.length !== 8) {
                alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');
                $('#frete').addClass(' text-center text-danger');
                $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
                $('#cep_frete').focus();
            } else {
                $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
                $('#frete').addClass(' text-center text-danger');
                // carrego o combo com os bairros
                $('#frete').load('controller/frete.php?cepcliente=' + CEP_CLIENTE + '&pesofrete=' + PESO_FRETE);
            } // fim do IF digitei o CEP
        }); // fim do change
    }); // fim do ready
</script>
<section id="cart_items">
    <div class="container">      
        <a  href="{$PAG_PRODUTOS}">
            <button  class="btn btn-fefault cart">Comprar mais</button></a>  
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Descricao</td>
                        <td class="price">Preço</td>
                        <td class="quantity">Quantidade</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$PRO item=P}
                        <tr class="cart_info">
                            <td class="cart_product">
                    <picture><a href="{$P.pro_link}"><img src="{$P.pro_img}" alt="{$P.pro_nome}"></a></picture>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">{$P.pro_nome}</a></h4>
                    </td>
                    <td class="cart_price">
                        <h4>{$P.pro_valor}</h4>
                    </td>
                    <td class="cart_quantity">
                        <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                            <input type="hidden" name="pro_id" value="{$P.pro_id}">
                            <input type="hidden" name="acao" value="addqtd">
                            <button  class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </form> 
                        <h4> {$P.pro_qtd} </h4>
                        <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                            <input type="hidden" name="pro_id" value="{$P.pro_id}">
                            <input type="hidden" name="acao" value="remover">
                            <button  class="btn btn-primary"><i class="fa fa-minus"></i></button>   
                        </form>
                    </td>
                    <td class="cart_total">
                        <h4 class="cart_total_price">{$P.pro_subTotal}</h4>
                    </td>
                    <td class="cart_delete">
                        <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                            <input type="hidden" name="pro_id" value="{$P.pro_id}">    
                            <input type="hidden" name="acao" value="del">    
                            <button class="btn btn-primary check_out"><i class="fa fa-times"></i></button>
                        </form>
                    </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
<!-- botoes de baixo e valor total -->
<section class="row container" id="total">            
    <div class="col-md-4 text-right"></div>
    <div class="col-md-4 text-right"></div>   
    <!-- botão de limpar-->
    <div class="col-md-4 ">  
        <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
            <input type="hidden" name="acao" value="limpar">
            {*    SE NAO REMOVER TUDO ALTERAR O ID            *}
            <input type="hidden" name="pro_id" value="67">
            <button class="btn btn-primary btn-block"> <i class="fa fa-trash-o"></i> Limpar Tudo</button>
        </form>
    </div>
</section>
<br>
<section id="do_action">
    <div class="container"> 
        <div class="row">
            <section id="dadosfrete">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_info">
                            <li class="single_field">
                            </li>
                            <li class="single_field zip-field">
                                <label> CEP:</label>
                                {if $LOGADO == true}
                                    <input type="text" name="cep_frete"  id="cep_frete" value="{$CEP_DO_CLIENTE}" placeholder="digite seu cep" >
                                {else}
                                    <input type="text" name="cep_frete"  id="cep_frete" value="" placeholder="digite seu cep" >

                                {/if}
                                <!-- campos para tratar  do  frete --->
                                <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" class="form-control " readonly>
                                <input type="hidden" name="frete_valor" id="frete_valor " value="0">
                            </li>
                            <li class="single_field">
                                {* <span id="frete"></span>*}
                            </li>
                        </ul>
                        <button  class="btn btn-default check_out" id="buscar_frete"> <i class="fa fa-paper-plane-o"></i> Calcular Frete </button>
                    </div>
                </div>
            </section>
            <section id="confirmarpedido">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li> Sub Total Carrinho <span> R$ {$TOTAL}</span></li>         
                        </ul>
                        <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_CONFIRMAR}">           
                            <!--  mostrar retorno do frete --->
                            <span id="frete"></span>
                            <!-- botão finalzar -->
                            <button class="btn btn-default check_out" type="submit" >  <i class=" fa fa-check"></i> Confirmar Pedido </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section><!--/#do_action-->