<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#ABC4FF">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ABC4FF">
        <meta name="msapplication-navbutton-color" content="#ABC4FF">
        <meta name="description" content="Pet Shop - O primeiro e único Outlet Du Cão">
        <meta name="author" content="">
        <title>{$SITE_NOME} - O primeiro e único Outlet Du Cão</title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet">
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <link href="{$GET_TEMA}/tema/css/main.css" rel="stylesheet" >
        <link href="{$GET_TEMA}/tema/css/prettyPhoto.css" rel="stylesheet" >
        <link href="{$GET_TEMA}/tema/css/animate.css" rel="stylesheet" >
        <link href="{$GET_TEMA}/tema/css/responsive.css" rel="stylesheet" >       

        {*Inicio Imagens*}
        <link rel="shortcut icon" href="{$GET_SITE_HOME}/media/images/ico/favicon.ico">
        <link rel="apple-touch-icon" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-180x180.png" />

    </head>
    <body>     
        <header id="header">{*<!--header-->*}
            <div class="header_top">{*<!--header_top-->*}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="tel:+55012997284072"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                    <li><a href="mailto:sac@outletducao.com.br"><i class="fa fa-envelope"></i> sac@outletducao.com</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="https://www.facebook.com/Outlet-Du-C%C3%A3o-2250623565155782/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/outletducao/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>{*<!--/header_top-->*}

            <div class="header-middle">{*<!--header-middle-->*}
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 clearfix">
                            <div class="logo pull-left">
                                <a href="{$GET_SITE_HOME}"><picture><img src="{$GET_SITE_HOME}/media/images/home/logo.png" alt="" style="width: 139px;" /></picture></a>
                                <p>O primeiro e único Outlet Du Cão</p>
                            </div>
                        </div>
                        <div class="col-md-8 clearfix">
                            <div class="shop-menu clearfix pull-right">
                                <ul class="nav navbar-nav">
                                    {if $LOGADO == true}
                                        <li > Olá: {$USER}</li>
                                        <li><a href="{$PAG_CLIENTE_CONTA}"><i class="fa fa-user"></i> Minha Conta</a></li>
                                        <li><a href="{$PAG_CARRINHO}"><i class="fa fa-shopping-cart"></i> Meu Carrinho <span class="badge badge-light">
                                                    {if $QTD_CARRINHO>0}
                                                        {$QTD_CARRINHO}
                                                    {else}
                                                        0
                                                    {/if}
                                                </span>
                                            </a></li>
                                        <li><a href="{$PAG_PEDIDO_FINALIZADO}"><i class="fa fa-crosshairs"></i> Finalizar Pedido</a></li>
                                        <li> <a href="{$PAG_LOGOFF}" class="" onclick="signOut();"><i class=" fa  fa-sign-out"></i> Sair </a> </li>
                                        {else}
                                        <li><a href="{$PAG_CARRINHO}"><i class="fa fa-shopping-cart"></i> Meu Carrinho <span class="badge badge-light">
                                                    {if $QTD_CARRINHO>0}
                                                        {$QTD_CARRINHO}
                                                    {else}
                                                        0
                                                    {/if}
                                                </span></a></li>
                                        <li><a href="{$PAG_LOGIN}"><i class="fa fa-sign-in" data-onsuccess="onSignIn"></i> Fazer Login</a></li>
                                        {/if}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>{*<!--/header-middle-->*}

            <div class="header-bottom">{*<!--header-bottom-->*}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
                                        {foreach from=$CATEGORIAS item=C}
                                        <li><a href="{$C.cate_link}">{$C.cate_nome}</a></li>
                                        {/foreach}
                                </ul>
                            </div>
                        </div>
                        <div class=" col-sm-12 col-md-3">
                            <div class="search_box pull-right">
                                <form method="POST" action="{$PAG_PESQUISA}">
                                    <input type="text" name="pesquisar" placeholder="Pesquise um produto"/>
                                    <button class="btn btn-default check_out" type="submit" >  <i class="fa fa-search"></i> Pesquisar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>{*<!--/header-bottom-->*}
        </header>{*<!--/header-->*}
        {php}
        Rotas::get_Pagina();
        /////  var_dump(Rotas::$pag);
        {/php}
        {*ITENS RECOMENDADOS*}
        <section id="recomendados">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 padding-right">
                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">ITENS RECOMENDADOS</h2>
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    {foreach from=$PRO_REC item=P}
                                        <div class="item active">

                                            {*Só pode ter 3 por slide*}                                          
                                            <!--Produto aqui-->
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <picture>  <img src="{$P.pro_img}" alt="{$P.pro_nome}" /></picture>
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
                                                                <button  class=" btn btn-default check_out btn-block "><i class="fa fa-plus"></i> Adicionar ao Carrinho </button>
                                                            </form> 
                                                            {*<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>*}
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--Produto aqui-->
                                            {*Só pode ter 3 por slide*}

                                        </div>

                                    {/foreach}
                                </div>

                            </div>
                        </div><!--/recommended_items-->
                    </div>
                </div>
            </div>
        </section>
        {*ITENS RECOMENDADOS*}
        {*--Footer--*}
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="companyinfo">
                                <div class="logo pull-left">
                                    <a href="{$GET_SITE_HOME}"><picture><img src="{$GET_SITE_HOME}/media/images/home/logo.png" alt="" style="width: 139px;" /></picture></a>
                                </div><br><br><br>
                                <p>O primeiro e único Outlet Du Cão</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-widget">
                                <h2>Serviços</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    {* <li><a href="#">Ajuda Online</a></li>*}
                                    <li><a href="{$PAG_CONTATO}">Contato</a></li>
                                    <li><a href="{$PAG_LOGIN}">Meus Pedidos </a></li>
                                    <li><a href="{$PAG_FAQ}">Perguntas Frequentes FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-widget">
                                <h2>Politicas</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{$PAG_TERMOS_SITE}">Termos e Condições</a></li>
                                    <li><a href="{$PAG_POLITICA_PRIVACIDADE}">Política de Privacidade</a></li>
                                    <li><a href="{$PAG_POLITICA_DEVOLUCAO}">Política de Devolução </a></li>
                                    <li><a href="{$PAG_SISTEMA_COBRANCA}">Sistema de Cobrança</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-0">
                            <div class="single-widget">
                                <h2>Cadastre-se para receber novidades! </h2>
                                <form action="#" method="POST" class="searchform">
                                    <input type="email" name="email" id="email" placeholder="Insira seu email aqui" />
                                    <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                    <p>Receba atualizações mais recentes <br>do nosso site.</p>
                                    <input type="hidden" name="env" value="cad"  />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row text-center">
                        <picture> <img  class="img-thumbnail" src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/todos_animado_550_50.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto."></picture>
                    </div>
                </div>
            </div>
        </footer>
        {*--/Footer--*}

        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js"></script>
        <script src="{$GET_TEMA}/tema/js/cep_valor.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/main.js"></script>
        <script src="{$GET_TEMA}/tema/js/jquery.scrollUp.min.js"></script>
        <script src="{$GET_TEMA}/tema/js/jquery.prettyPhoto.js"></script>
        <script src="{$GET_TEMA}/tema/js/chatFacebok.js"></script>
        <script src="{$GET_TEMA}/tema/js/forcaSenha.js"></script>
        {*BUSCA CEP*}
        <script src="{$GET_TEMA}/tema/js/buscacep.js"></script>
        {*BUSCA CEP*}
        <script src="{$GET_TEMA}/tema/js/jquery.mask.min.js"></script>
        
        
        <div id="fb-root"></div>
        {*CHAT DO FACEBOOK*}
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="2250623565155782"
             theme_color="#ABC4FF">
        </div>
        {*CHAT DO FACEBOOK*}         
    </body>
</html>