<h4 class="text-center"> Gerenciar Pedidos </h4>
<hr>

<section id="cart_items">
    <div class="container">
        <!---  faz  uma busca entre datas --->
        <label> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">
            <div class="col-md-3">            
                <input type="date" name="data_ini" required>
            </div> 
            <div class="col-md-3"> 
                <input type="date" name="data_fim" required>
            </div> 
            <div class="col-md-3"> 
                <button class="btn btn-primary"> Buscar </button>
            </div> 
            <div class="col-md-3">    
            </div> 
        </form>
    </div>
</section>
<br>
<section id="cart_items">
    <div class="container">
        <!--- faz  uma busca  por texto ---> 
        <label> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">  
            <div class="col-md-3">
                <input type="text" name="txt_ref" class="" required>   
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary"> Buscar </button>   
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </form>
    </div>
</section>
<hr>
<section id="cart_items">   
   
        <center>
            <div class="table-responsive cart_info">
                <table class="table table-bordered ">  
                    <thead> 
                        <tr class="cart_menu">
                            <td class="description">Cliente</td>
                            <td class="description">Data</td>
                            <td class="description">Hora</td>
                            <td class="description">Ref</td>
                            <td class="description">Status</td>
                            <td class="description"></td>
                            <td class="description"></td>
                            <td class="description">Email</td>

                        </tr>
                    </thead>
                    {foreach from=$PEDIDOS item=P}
                        <tr> 
                            <td class="description">{$P.cli_nome} {$P.cli_sobrenome}</td>
                            <td class="description">{$P.ped_data}</td>
                            <td class="description">{$P.ped_hora}</td>
                            <td class="description">{$P.ped_ref}</td>
                            {if $P.ped_pag_status == 'NAO'} 
                                <td ><span class="label label-danger">{$P.ped_pag_status}</span></td>
                                {else}
                                <td>{$P.ped_pag_status}</td>
                            {/if}
                            <td class="description">
                                <!---- formulario que vai para itens do pedido ---->
                                <form name="itens" method="post" action="{$PAG_ITENS}">
                                    <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                                    <button class="btn btn-primary"><i class=" fa fa-list"></i> Detalhes</button>
                                </form> 
                            </td>
                            <td class="description">
                                <form name="deletar" method="post" action="">
                                    <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                                    <button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="fa fa-trash-o"></i> </button>
                                </form>
                            </td> 
                            <td  class="description">{$P.cli_email}</td> 
                        </tr>
                    {/foreach}
                </table>
            </div>
        </center>  
   
</section>
