<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{$SITE_NOME} ADM - O primeiro e único Outlet Du Cão</title>
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet">
       <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{$GET_TEMA}/tema/css/prettyPhoto.css" rel="stylesheet">
        <link href="{$GET_TEMA}/tema/css/price-range.css" rel="stylesheet">
        <link href="{$GET_TEMA}/tema/css/animate.css" rel="stylesheet">
        <link href="{$GET_TEMA}/tema/css/main.css" rel="stylesheet">
        <link href="{$GET_TEMA}/tema/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->     
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
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
        <!-- começa a div topo -->
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> outletducao@outletducao.com</a></li>
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
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 clearfix">
                            <div class="logo pull-left">
                                <a href="{$GET_SITE_ADM}"><img src="{$GET_SITE_HOME}/media/images/home/logo.png" alt="" style="width: 139px;" /></a>
                                <p>O primeiro e único Outlet Du Cão</p>
                                <h5 > Olá: {$USER} Último Login: {$DATA} às {$HORA} </h5>
                            </div>
                        </div>
                        <div class="col-md-8 clearfix">
                            <div class="shop-menu clearfix pull-right">
                                <ul class="nav navbar-nav">
                                    {if $LOGADO == true}

                                      
                                        <li> <a href="{$PAG_SENHA}" class=" "><i class="fa fa-key"></i> Alterar Senha </a></li>
                                        <li> <a href="{$PAG_LOGOFF}" class=""><i class="fa fa-sign-out"></i> Sair </a> </li>

                                    {/if}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
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
                                    <li><a href="{$GET_SITE_ADM}"><i class=""></i> Home </a> </li>
                                    <li><a href="{$PAG_CATEGORIAS}"><i class=""></i> Categorias </a> </li>
                                    <li><a href="{$PAG_ADM_PRODUTOS}"><i class=""></i> Produtos </a> </li>
                                    <li><a href="{$PAG_ADM_CLIENTE}"><i class=""></i> Clientes </a> </li>
                                    <li><a href="{$PAG_ADM_PEDIDOS}"><i class=""></i> Pedidos </a> </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
        <section>
            <div class="container">
                <div class="row">

                    <!--MENU LATERAL-->
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Categorias</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">
                                        <h4 class="panel-title"> <a href="{$PAG_ADM_PRODUTOS}">Todos</a></h4>
                                    </div>
                                </div>

                                {foreach from=$CATEGORIAS item=C}
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="{$C.cate_link_adm}">{$C.cate_nome}</a></h4>
                                        </div>
                                    </div>
                                {/foreach}
                            </div><!--/category-productsr-->
                        </div>
                    </div>

                    <!--MENU LATERAL-->
                    <!--CONTEUDO DA PAGINA-->
                    <div class="col-sm-9 padding-right">
                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li><a href="{$GET_SITE_HOME}">Página inicial</a></li>
                                <li> Hoje é {$DATA} </li>
                            </ol>
                        </div>
                        <!--features_items-->
                        <div class="features_items">
                            {php}
                     Rotas::get_Pagina();
                    /////  var_dump(Rotas::$pag);
                            {/php}


                        </div><!--features_items-->

                    </div>
                    <!--CONTEUDO DA PAGINA-->
                </div>
            </div>
        </section>
        <!-- começa div rodape -->
        <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="companyinfo">
                                <div class="logo pull-left">
                                    <a href="{$GET_SITE_HOME}"><img src="{$GET_SITE_HOME}/media/images/home/logo.png" alt="" style="width: 139px;" /></a>
                                </div><br><br><br>
                                <p>O primeiro e único Outlet Du Cão</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row text-center">
                        <img src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/todos_animado_550_50.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto.">
                        {*<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                        *}
                    </div>
                </div>
            </div>

        </footer><!--/Footer-->
        <!-- jQuery JS -->
        {* <script src="{$GET_TEMA}/tema/js/jquery.js"></script>*}
        <!-- Your customer chat code -->
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js"></script>
        <script src="{$GET_TEMA}/tema/js/jquery.scrollUp.min.js"></script>
        <script src="{$GET_TEMA}/tema/js/price-range.js"></script>
        <script src="{$GET_TEMA}/tema/js/jquery.prettyPhoto.js"></script>
        <script src="{$GET_TEMA}/tema/js/main.js"></script>
    </body>
</html>
