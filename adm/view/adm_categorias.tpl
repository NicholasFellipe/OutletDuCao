<h4 class="text-center"> Gerenciar categorias </h4>
<hr>
<section id="cart_items">    
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>   
                    <tr class="cart_menu">
                        <td class="description">Nova Categoria</td>
                        <td class="description">Inserir</td>
                        <td class="description"></td>
                    </tr>
                </thead> 
                    <form name="categorias_editar" method="post" action="">
                        <tr class="cart_info">
                            <td class="description">
                                <input type="text" name="cate_nome" class="" placeholder="Insira aqui a nova categoria" required> 
                            </td>
                            <td class="description">
                               <button class="btn btn-primary" name="cate_nova" value="cate_nova"><i class="fa fa-check"></i> Inserir nova </button>
                            </td>
                            <td class="description">
                               
                            </td>
                        </tr>  
                    </form> 
            </table>
        </div>
    </center> 
</section>


<!-- section listar categorias -->

<section id="cart_items">    
    <center>
        <div class="table-responsive cart_info">
            <table class="table table-bordered">
                <thead>   
                    <tr class="cart_menu">
                        <td class="description">Categoria</td>
                        <td class="description" >Editar</td>
                        <td class="description" >Apagar</td>
                    </tr>
                </thead> 
                {foreach from=$CATEGORIAS item=C}
                    <form name="categorias_editar" method="post" action="">
                        <tr class="cart_info">
                            <td class="description">
                                <input type="text" name="cate_nome" value="{$C.cate_nome}" class="" required> 
                                <input type="hidden" name="cate_id" value="{$C.cate_id}">
                            </td>
                            <td class="description">
                                <button class="btn btn-primary" name="cate_editar" value="cate_editar"><i class="fa fa-refresh"></i> Editar</button>
                            </td>
                            <td class="description">
                                <button class="btn btn-danger" name="cate_apagar" value="cate_apagar"> <i class="fa fa-eraser"></i> Apagar</button>
                            </td>
                        </tr>  
                    </form> 
                {/foreach}   
            </table>
        </div>
    </center> 
   
</section>