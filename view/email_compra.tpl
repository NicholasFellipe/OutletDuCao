<h3> Olá {$NOME_CLIENTE} , obrigado pela sua compra em {$SITE_NOME} <br>
    <a href="{$SITE_HOME}"> {$SITE_HOME} </a>
</h3>
<section class="row">
    <h4>
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
        <a  href="{$PAG_MINHA_CONTA}" > Minha conta: {$PAG_MINHA_CONTA} </a>
    </h4>                              
</section>
<section class="row ">
    <center> 
        <div class="alert alert-success"> Itens do seu pedido </div> 
        <br>     
        <table class="table table-bordered" style="width: 95%;"> 
            {foreach from=$PRO item=P}
                <tr style="border: 1px solid #b2dba1">
              <!---- <td> <img src="{$P.pro_img}" alt=" {$P.pro_nome} "> </td> --->
                    <td>  {$P.pro_nome}  </td>
                    <td>  {$P.pro_valor} </td>
                    <td>  {$P.pro_qtd}   </td>
                    <td>  {$P.pro_subTotal} </td>  
                </tr>  
            {/foreach}  
        </table>
    </center>          
</section><!-- fim da listagem itens -->
<!-- botoes de baixo e valor total -->
<section class="row">                  
    <div class="col-md-4 text-right"></div>
    <div class="col-md-4 text-right"></div>
    <!-- botão de limpar-->
    <div class="col-md-4 text-right  text-danger bg-warning">

        <h4> Total : R$ {$TOTAL} </h4>
        <h4> Frete : R$ {$FRETE} </h4>
        <h4> Final : R$ {$TOTAL_FRETE} </h4>
    </div>   
</section>
<br>
