              <!-- plugin editor tinymce----------->
   <script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center"> Adicionar novo produto </h4>
<hr>
  

<!-- comeÃ§a os campos para form produto    --->
<section class="row" id="camposproduto">
                                           <!--  enctype="multipart/form-data"  --->
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
        
        <div class="col-md-6">
            <label>Produto</label>
            <input type="text" name="pro_nome" id="pro_nome" maxlength="40" class="form-control"  required >
            
        </div>
        
        
        
        <div class="col-md-4">
            <label>Catogoria</label>
         
            <select name="pro_categoria" id="pro_categoria" class="form-control" required>
              
                <option value=""> Escolha </option>                           
                    {foreach from=$CATEGORIAS item=C}                    
                <option value="{$C.cate_id}">{$C.cate_nome}</option>                                        
                    {/foreach}                
            </select>
            
            
        </div>
        
        
        
        
        <div class="col-md-2">
            <label>Ativo</label>
            <select name="pro_ativo" id="pro_cativo" class="form-control" required>
              
                <option value=""> Escolha </option>
                <option value="NAO"> NÃ£o </option>
                <option value="SIM"> Sim </option>
                
            </select>
            
            
        </div>
        
        
        
        
        
           <div class="col-md-3">
            <label>Modelo/Marca</label>
            <input type="text" name="pro_modelo" id="pro_modelo" class="form-control"  >
            
        </div>
        
        
           <div class="col-md-2">
            <label>Referencia</label>
            <input type="text" name="pro_ref" id="pro_ref" class="form-control"  >
            
        </div>
        
        
        
           <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="pro_valor" id="pro_valor" class="form-control" required >
            
        </div>
        
        
        
           <div class="col-md-2">
            <label>Estoque</label>
            <input type="text" name="pro_estoque" id="pro_estoque" class="form-control" required >
            
          </div>
        
        
        
           <div class="col-md-2">
            <label>Peso</label>
            <input type="text" name="pro_peso" id="pro_peso" class="form-control" required >
            
          </div>
        
        
           <div class="col-md-2">
            <label>Altura</label>
            <input type="text" name="pro_altura" id="pro_altura" class="form-control" required >
            
          </div>
        
        
           <div class="col-md-2">
            <label>Largura</label>
            <input type="text" name="pro_largura" id="pro_largura" class="form-control" required >
            
          </div>
        
        
           <div class="col-md-2">
            <label>Comprimento</label>
            <input type="text" name="pro_comprimento" id="pro_comprimento" class="form-control" required >
            
          </div>
         <div class="col-md-12">
             <center>
       <picture><img src="{$GET_SITE_HOME}/media/images/calculo.jpg" alt=""  /></picture>
         </center>
         </div>
        <div class="col-md-12">
            
            <div class="col-md-3">
                
            </div>
            
            <div class="col-md-6">
            
                 <hr>
                 <label>Imagem Principal</label>
                 <input type="file" name="pro_img" class="form-control " id="pro_img">
            </div>
            
            <div class="col-md-3">
                
             
            
            </div>
            

            
        </div>
        
        
        
           <div class="col-md-12">
            <label>DescriÃ§Ã£o</label>
           
            <textarea name="pro_desc" id="pro_desc" rows="5" class="form-control" ></textarea>

              <script> 
              tinymce.init({ selector:'textarea'  });
              </script> 
          
          
      
            
         
          
          </div>
        
           <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="pro_slug" id="pro_slug"   class="form-control" >
            
          </div>
        
        <!-- botÃ£o gravar --->
    
      
            
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br>
                <button class="btn btn-primary btn-block " name="btn_gravar"><i class="fa fa-check"></i> Gravar </button>
            </div>

            <div class="col-md-4">

            </div>

    
     
        
        
    </form>
    
    
    
    
</section>

<br>
<br>
<br>
<br>
 