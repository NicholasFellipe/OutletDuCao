<html>
    <head>
        <link rel="stylesheet" href="../../view/tema/bootstrap-4/css/bootstrap.min.css" >
        <title></title>
    </head>
    <body>
        <h3>Olá, seu código de rastreamento é  <b style="color: red">{$NOME}</b> , referente ao pedido:</h3>
<br>
        <table border=1>
            <tr>
                <td><b>Data:</b> {$ITENS.1.ped_data}</td>
                <td><b>Hora:</b> {$ITENS.1.ped_hora}</td>
                <td><b>Ref:</b> {$ITENS.1.ped_ref}</td>
                <td><b>Status:</b> {$ITENS.1.ped_pag_status}</td>
            </tr>     
        </table>
<br>
        <table class="table table-bordered">    
            <tr>
                <td ></td>
                <td >Item</td>
                <td >Valor Uni</td>
                <td >X</td>
                <td >Sub</td>
            </tr>
            {foreach from=$ITENS item=P}
                <tr >  
                    <td><img src="{$P.item_img}" alt=""></td>
                    <td> {$P.item_nome}</td>
                    <td class=" text-right"> {$P.item_valor}</td>
                    <td class="text-center"> {$P.item_qtd}</td>
                    <td class="text-right"> {$P.item_sub}</td>
                </tr>
            {/foreach} 
        </table>
<br>   
    <table class="table table-bordered">
        <tr class="alert alert-success">
            <td class="text-danger"> <b>Frete: </b>R$ {$ITENS.1.ped_frete_valor}</td>
            <td class="text-danger"> <b>Total: </b>R$ {$TOTAL}</td>
            <td class="text-danger"> <b>Final: </b>R$ {$ITENS.1.ped_frete_valor+$TOTAL}</td>
        </tr>  
    </table>
<h3>Obrigado por comprar no {$SITE}</h3>
<br>
<h3>Para acessar o site e sua conta basta usar este endereço <a href="{$PAG_MINHA_CONTA}">{$PAG_MINHA_CONTA}</a></h3>

<script src="../../view/tema/bootstrap-4/jquery-slim.min.js" ></script>
<script src="../../view/tema/bootstrap-4/js/bootstrap.min.js"></script>

    </body>
</html>



