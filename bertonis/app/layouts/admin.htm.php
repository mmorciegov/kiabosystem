<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
<head></head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> NTC Solutions - Sua Loja Virtual </title>

<STYLE type="text/css"> 
	A:link {text-decoration:none;color:#0000cc;} 
	A:visited {text-decoration:none;color:#999999;} 
	A:active {text-decoration:none;color:#ff0000;} 
	A:hover {text-decoration:underline;color:#999999;} 
</STYLE>

<?php echo $html->stylesheet(array("style.css","stilo_topo.css","style_form.css","form_cad.css"));?>


<body >

<!--Início do bloco #GERAL -->
<div id="GERAL">
<?php echo $this->contentForLayout ?>
	<!--Início do bloco #TOPO -->
	<div id="TOPO"><div id="logotipo"><?php echo $html->image("logo.png",array("topo"),array("class"=>"logotipo"));?>
    
    <div class="label_status"><br>
	<div class="label_log"><h2><?php pr("Bem vindo " . $user); ?></h2></div>
	</div>
    
    </div>
	</div><!--Fim do bloco #TOPO -->
  
    <!--Início do #MENU topo-->
    <ul id="MENU">
    	<li><a><?php echo $html->image("home_icon.png",array("log"),array("class"=>"style_topo"));?> Home</a></li>
        <li><a ><?php echo $html->image("log_icon.png",array("/users/logout"),array("class"=>"style_topo"));?><?php echo $html->link("Logout", "/users/logout");?></a></li>
        <li><a><?php echo $html->image("sac_img.png",array("sac"),array("class"=>"style_topo"));?>SAC</a></li>
    </ul> <!--Fim do #MENU -->
    
    <!--Início do bloco #BBUSCA -->
<div id="BBUSCA">
<div class="BUSCA">
		<select  name="dep" title="Departamento">
					<option selected="selected">Selecione categoria</option>
					<option value="1">Automotivo</option>
					<option value="2">Beleza e Saúde</option>
					<option value="3">Brinquedos</option>
					<option value="4">CDs</option>
					<option value="5">Câmeras e Filmadoras</option>
					<option value="6">Celulares e Telefones</option>                    
					<option value="7">DVDs e Blu-Ray</option>
					<option value="8">Eletrodomésticos</option>
					<option value="9">Eletrônicos</option>
					<option value="10">Eletroportáteis</option>
					<option value="11">Esporte e Lazer</option>
					<option value="12">Futebol</option>
					<option value="13">Games</option>
					<option value="14">Informática</option>
					<option value="15">Informática e Acessórios</option>                    
					<option value="16">Inst. Musicais</option>
					<option value="17">Livros</option>                   
		</select>
	</div>
    <input name="Produto" type="text" class="BPRODUTO" id="bProduto" value="Busca" />
    <div class="botao_busca"><input name="busca" type="button" value="Buscar" />
   
    </div>
    

</div><!--Fim do bloco #BBUSCA -->
   
    <!--Início do bloco #CONTEUDO -->
<div id="CONTEUDO"> 
    
		<!--Início da Barra Lateral esquerda -->
	<div class="BARRA">
	</div> <!--Fim da Barra Lateral esquerda -->
       
        
        	<!--Início da Barra Lateral direita -->

<div class="BARRAD"> </div>
	 <!--Fim da Barra Lateral direita -->
        
        
  </div><!--Fim do bloco #CONTEUDO -->

	<!--Início do bloco #RODAPE -->
	<div id="RODAPE" align="center"> Copyright NTC Solitions</div><!--Fim do bloco #RODAPE -->

</div><!--Fim do bloco #GERAL -->

</body>
</html>
