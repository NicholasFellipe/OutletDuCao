<?php
/* Smarty version 3.1.33, created on 2019-05-09 22:03:49
  from '/home1/agnald39/outletducao/view/contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd4cdf5a62731_79643489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38b868cf181ffe84554d0bf68b7c87c76f93326c' => 
    array (
      0 => '/home1/agnald39/outletducao/view/contato.tpl',
      1 => 1556058990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd4cdf5a62731_79643489 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contate <strong>Nos</strong></h2>  
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Entrar em contato</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="cadcliente" class="contact-form row" name="cadcliente" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="cli_nome" class="form-control" required="required" placeholder="Seu Nome">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="cli_email" class="form-control" required="required" placeholder="Seu Email">
				            </div>
				           				            <div class="form-group col-md-12">
				                <textarea name="conteudo" name="conteudo" required="required" class="form-control" rows="8" placeholder="Sua Dúvida/Mensagem Aqui"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Enviar">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Informações de Contato</h2>
	    				<address>
	    					<p>Outlet Du Cão</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@outletducao.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Nossas Mídias Sociais</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/Outlet-Du-C%C3%A3o-2250623565155782/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/outletducao/"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page--><?php }
}
