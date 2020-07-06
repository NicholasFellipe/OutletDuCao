<h4 class="text-center">Dados do pedido</h4>
<!-- informações sobre o pedido -->
<section class="row" id="cart_items">
    <div class="table-responsive cart_info">
        <center>
            <table class="table table-bordered" style="width: 90%">
                <tr class="cart_info">
                    <td class="description"><b>Data:</b> {$ITENS.1.ped_data}</td>
                    <td class="description"><b>Hora:</b> {$ITENS.1.ped_hora}</td>
                    <td class="description"><b>Ref:</b> {$ITENS.1.ped_ref}</td>
                    <td class="description"><b>Status:</b> {$ITENS.1.ped_pag_status}</td>
                </tr>     
            </table>
        </center>  
    </div>
</section>
<!-- listagem dos itens --->
<section class="row" id="cart_items">
    <div class="table-responsive cart_info">
        <center>
            <table class="table table-bordered" style="width: 90%">    
                <tr class="cart_menu">
                    <td class="description"></td>
                    <td class="description">Item</td>
                    <td class="description">Valor Uni</td>
                    <td class="description">X</td>
                    <td class="description">Sub</td>
                </tr>
                {foreach from=$ITENS item=P}
                    <tr class="cart_info">  
                        <td class="description"><img src="{$P.item_img}" alt=""> </td>
                        <td class="description"> {$P.item_nome}</td>
                        <td class="description text-right"> {$P.item_valor}</td>
                        <td class="description text-center"> {$P.item_qtd}</td>
                        <td class="description text-right"> {$P.item_sub}</td>
                    </tr>
                {/foreach} 
            </table>
        </center> 
    </div>
</section>            
<section class="row" id="resumo">
    <center>
        <table class="table table-bordered" style="width: 90%">
            <tr class="cart_info">
                <td class=" description text-danger"> <b>Frete:</b> {$ITENS.1.ped_frete_valor}</td>
                <td class="description text-danger"> <b>Total:</b> {$TOTAL}</td>
                <td class="description text-danger"> <b>Final:</b> {$ITENS.1.ped_frete_valor+$TOTAL}</td>
            </tr>  
        </table>
    </center>
</section>


            
            
{*Envio do Codigo de Rastreamento para o cliente *}
<section class="row" id="cart_items">
    <div class="table-responsive cart_info">
        <center>
            <table class="table table-bordered" style="width: 90%">
                <tr class="cart_menu">
                    <td class="description text-center">Código de Rastreamento</td>
                </tr>
                <tr class="cart_info text-center"> 
                    <td class="description">
                        <form name="deletar" method="post" action="">
                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                            <!-- Small modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-paper-plane-o"></i> Enviar Código</button>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                     <form name="cadcliente" id="cadcliente" method="post" action="" > 
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Enviar Código de Rastreamento</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                           

                                                <p>{$ITENS.1.cli_email}</p>

                                                {*Nome - col-4*}
                                                <div class="form-group">
                                                    <label>Código de Rastreamento:</label>
                                                    <input type="text" name="cli_nome" class="" placeholder="Codigo de Rastreamento" minlength="3" required>
                                                </div> 
                                                {*Nome - col-4*}
                                                {*Email - col-4*}
                                                <div class="form-group">
                                                   
                                                    <input type="hidden" name="cli_email" class="" value="{$ITENS.1.cli_email}" placeholder="Email cliente" required>
                                                </div>
                                                {*Email - col-4*}
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <div class="form-group"> 
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-window-close-o"></i> Cancelar </button>
                                                <button type="submit" class="btn btn-primary"> <i class="fa fa-paper-plane-o"></i> Enviar Código</button>
                                            </div>
                                           
                                        </div>
                                    </div><!-- /.modal-content -->
                                     </form>
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </form> 
                    </td>
                </tr>


            </table>
        </center>  
    </div>
</section>
{*Envio do Codigo de Rastreamento para o cliente *}