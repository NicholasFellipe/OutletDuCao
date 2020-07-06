{foreach from=$PRO item=P}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <section>
        <style>
            .zoom { overflow: hidden;}.zoom img { max-width: 100%;-moz-transition: all 0.3s; -webkit-transition: all 0.3s;transition: all 0.3s;}.zoom:hover img { -moz-transform: scale(1.5);-webkit-transform: scale(1.5);transform: scale(1.5);}</style>
        <div class="container">
            <div class="row">
                <!--MENU LATERAL-->
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Categorias</h2>
                        <div class="panel-group category-products" id="accordian">{*<!--category-productsr-->*}
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
                <div class="col-sm-9 padding-right">
                    <div class="product-details">{*--product-details-->*}
                        <div class="col-sm-5">
                            <div class="view-product zoom">
                                <img src="{$P.pro_img_g}" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <br>   
                           {*-- Wrapper for slides -->*}
                            {foreach from=$IMAGES item=I}
                                <div class="col-lg-4 zoom">  
                                   <picture> <img src="{$I.img_nome}" alt="" class="img-thumbnail"></picture>
                                </div>
                            {/foreach}
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">{*<!--/product-information-->*}
                               <picture> <img src="images/product-details/new.jpg" class="newarrival" alt="" /></picture>
                                <h2>{$P.cate_nome}/{$P.pro_nome}</h2>
                                <p>Ref: {$P.pro_ref}</p>
                                <span>
                                    <span>R$ {$P.pro_valor}</span>
                                    <picture><img src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/todos_animado_125_150.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto."></picture>
                                    {if $P.pro_estoque >0}
                                        <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                                            <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                            <input type="hidden" name="acao" value="add">

                                            <button  class=" btn btn-primary check_out btn-block"> <i class=" fa fa-shopping-cart"></i> Comprar</button>
                                        </form> 
                                    {else}
                                        <form name="carrinho" method="post" action="#" >
                                            <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                            <input type="hidden" name="acao" value="add">
                                            <button  class=" btn btn-primary check_out btn-block disabled">Comprar</button>
                                        </form> 
                                    {/if}
                                </span>
                                {if $P.pro_estoque >0}

                                    <p><b>Pronta Entrega </b>{$P.pro_estoque} Unidades</p>

                                {else}
                                    <p><b>Indisponivel </b>{$P.pro_estoque} Unidades</p>
                                {/if}
                                Compartilhar: <i class="fa fa-share"></i>
                                
                                <a href="https://api.whatsapp.com/send?text=Veja esse produdo: {$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">      
                                <button class="btn btn-primary">
                                    <i class="fa fa-whatsapp "></i> WhatsApp </button>
                                  </a>
                            </div>{*<!--/product-information-->*}
                        </div>
                    </div>{*<!--/product-details-->*}
                    <div class="category-tab shop-details-tab">{*<!--category-tab-->*}
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#reviews" data-toggle="tab">Detalhes do produto</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="reviews" >
                                <div class="col-sm-12">
                                    {*<ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>*}
                                    <p> {$P.pro_desc} </p>
                                </div>
                            </div>

                        </div>
                    </div>{*<!--/category-tab-->*}
                {/foreach}
            </div>
        </div>
    </div>
</section>