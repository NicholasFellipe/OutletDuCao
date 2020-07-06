
<section class="container" id="cart_items">

    <h4 class="text-center">Meus Pedidos</h4>

    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>    
                    <tr class="cart_menu">
                        <td class="description">Data</td>
                        <td class="description">Hora</td>
                        <td class="description">Ref</td>

                        <td class="description">Status</td>
                        <td></td>
                    </tr>
                </thead>
                {foreach from=$PEDIDOS item=P}
                    <tr>

                        <td class="description" >{$P.ped_data}</td>
                        <td class="description">{$P.ped_hora}</td>
                        <td class="description">{$P.ped_ref}</td>


                        {if $P.ped_pag_status == 'NAO'} 
                            <td class="description" style="width: 15%"><span class="label label-danger">{$P.ped_pag_status}</span></td>
                            {elseif $P.ped_pag_status == 'Pago'}
                            <td class="description" style="width: 15%"><span class="label label-success">{$P.ped_pag_status}</span></td>
                            {else}
                            <td class="description" style="width: 15%">{$P.ped_pag_status}</td>
                        {/if}

                    <form name="itens" method="post" action="{$PAG_ITENS}">

                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                        <td class="description" style="width: 10%"><button class="btn btn-primary"><i class="fa fa-list"></i> Detalhes</button></td>

                    </form>    

                    </tr>
                {/foreach}

            </table>
        </div>
    </center>


</section>
