<h4 class="text-center">Detalhes do cliente</h4>

<section class="form" id="cadastro">
    <div class="container">
        <div class="row">
            <div class="login-form">
                <form name="cadcliente" id="cadcliente" method="post" action="">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Nome:</label>
                            <input type="text" value="{$CLI_NOME}" name="cli_nome" class="" minlength="3" required>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Sobrenome:</label>
                            <input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" class=""  minlength="3" required>            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Data Nasc:</label>
                            <input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc" class="" required>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>RG:</label>
                            <input type="text" value="{$CLI_RG}" name="cli_rg" class="" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>CPF:</label>
                            <input type="text" value="{$CLI_CPF}" name="cli_cpf" class="" minlength="11" maxlength="11" required >   
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>DDD:</label>
                            <input type="number" value="{$CLI_DDD}" name="cli_ddd" class=""  min="10" max="99" required>     
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Fone:</label>
                            <input type="number" value="{$CLI_FONE}" name="cli_fone" class="" required>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Celular:</label>
                            <input type="number" value="{$CLI_CELULAR}" name="cli_celular" class="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5">
                            <label>Endereço:</label>
                            <input type="text" value="{$CLI_ENDERECO}" name="cli_endereco" class=""  minlength="3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-1">
                            <label>Numero:</label>
                            <input type="text" value="{$CLI_NUMERO}" name="cli_numero" class="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Bairro:</label>
                            <input type="text" value="{$CLI_BAIRRO}" name="cli_bairro" class="" minlength="3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Cidade:</label>
                            <input type="text" value="{$CLI_CIDADE}" name="cli_cidade" class="" minlength="3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-1">
                            <label>UF:</label>    
                            <input type="text" value="{$CLI_UF}"name="cli_uf" class="" maxlength="2" minlength="2" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>Cep:</label>
                            <input type="text" value="{$CLI_CEP}" name="cli_cep" class="" minlength="8" maxlength="8" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Email:</label>
                            <input type="email" value="{$CLI_EMAIL}" name="cli_email" class="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div> 
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-default check_out btn-block "> <i class="fa fa-check"></i> Salvar </button>
                            <input type="hidden" name="cli_id" value="{$CLI_ID}">    
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<br><br>