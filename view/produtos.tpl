{*<!--     exibe mensagem caso nao encontre produtos --->*}
{if $PRO_TOTAL < 1}
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4> 
{/if}  
<section>
    <div class="container">
        <div class="row">
            {*<!--MENU LATERAL-->*}
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Categorias</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{$PAG_PROD}">Todas as Categorias</a></h4>
                            </div>
                        </div>
                        {foreach from=$CATEGORIAS item=C}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{$C.cate_link}">{$C.cate_nome}</a></h4>
                                </div>
                            </div>
                        {/foreach}
                    </div>{*<!--/category-productsr-->*}
                </div>
            </div>
            {* <!--MENU LATERAL-->*}
            {*<!--CONTEUDO DA PAGINA-->*}
            <div class="col-sm-9 padding-right">
                {*<!--features_items-->*}
                <div class="features_items">
                    <h2 class="title text-center">Produtos</h2>
                    {*   define uma variavel i valendo 1  *}
                    {assign var=i value=1 } 
                    {foreach from=$PRO item=P}
                        {* verifico se i = 1 se for abro uma ROW *}
                        {if $i==1} 
                            <div class="row" id="pularliha">
                            {/if} 
                            {* <!--Produto aqui-->*}
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <picture> <img src="{$P.pro_img}" alt="{$P.pro_nome}" /></picture>
                                            <h2>R$ {$P.pro_valor}</h2>
                                            <p>{$P.pro_nome}</p>
                                            <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Ver o produto</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>R$ {$P.pro_valor}</h2>
                                                <p>{$P.pro_nome}</p>
                                                <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Ver o pruduto</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="acao" value="add">
                                                <button  class=" btn btn-default check_out btn-block"><i class="fa fa-shopping-cart"></i> Comprar </button>
                                            </form> 
                                            <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="acao" value="addcarrinho">


                                                <button  class=" btn btn-default check_out btn-block"><i class="fa fa-plus"></i> Adicionar ao Carrinho </button>
                                                
                                            </form> 
                                            {*<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>*}
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            {*  <!--Produto aqui-->*}
                            {*  verifico se o valor de i dividido por 3 retorna 0 se retornar fecho a div row e seto i como 0 *}
                            {if $i%3==0} 
                            </div>
                            {$i = 0} 
                        {/if}                  
                        {*  aumento o valor de i+1  *}
                        {$i = $i + 1}
                    {/foreach}
                </div>{*<!--features_items-->*}
                {$PAGINAS}
            </div>
            {*<!--CONTEUDO DA PAGINA-->*}
        </div>
    </div>
</section>