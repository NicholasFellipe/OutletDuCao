<h4 class="text-center">Gerenciar Produtos</h4>
<hr>
<section class="row ">  
    <div class="col-md-4"> </div>
    <div class="col-md-4"> </div>
    <div class="col-md-4 text-right">
        <a href="{$PAG_PRODUTO_NOVO}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Novo Produto</a>
    </div>
</section>
<br>

<!--     exibe mensagem caso nao encontre produtos --->
{if $PRO_TOTAL < 1}
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
{/if}   
<!--  começa lista de produtos  ---->   
<section id="cart_items">  
    <div class="table-responsive cart_info">
        <table class="table table-bordered">
            <thead> 
                <tr class="cart_menu">     
                    <td class="description"  ></td> 
                    <td class="description"  >Produto</td> 
                    <td class="description" >Categoria</td> 
                    <td class="description">Preço</td> 
                    <td class="description"  >Editar</td>      
                    <td class="description" >Extras</td>      
                </tr>  
            </thead>
            {foreach from=$PRO item=P}
                <tr class="cart_info">
                    <td class="description">  <img src="{$P.pro_img_p}" alt="" > </td>
                    <td class="description"> {$P.pro_nome}</td>
                    <td class="description">{$P.cate_nome}</td>
                    <td class="description">R$ {$P.pro_valor}</td>
                    <td class="description">
                        <form name="proeditar" method="post" action="{$PAG_PRODUTO_EDITAR}">
                            <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                            <button class="btn btn-primary"> <i class="fa fa-refresh"></i> </button>
                        </form>  
                    </td>
                    <td class="description">
                        <form name="proimg" method="post" action="{$PAG_PRODUTO_IMG}">
                            <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                            <input type="hidden" name="pro_nome" id="pro_nome" value="{$P.pro_nome}">
                            <button class="btn btn-primary"> <i class="fa fa-file-image-o"></i> </button>
                        </form>  
                    </td>
                </tr>  
            {/foreach}
        </table> 
    </div>
</section> 
<!--  paginação inferior   -->  
<section id="pagincao" class="row">
    <center>
        {$PAGINAS}
    </center>
</section>
