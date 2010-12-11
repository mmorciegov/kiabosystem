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
	<div id="TOPO"><div id="logotipo"><?php echo $html->image("logo.png",array("topo"),array("class"=>"logotipo"));?></div>
    
	

	  <div class="tag_form_senha"></div>
      <?php echo $this->element("formulario_de_login"); ?>
      <div class="botao_login"></div>
	</div><!--Fim do bloco #TOPO -->
  
    <!--Início do #MENU topo-->
    <ul id="MENU">
        <li><a ><?php echo $html->image("home_icon.png",array("home"),array("class"=>"style_topo"));?> <?php echo $html->link("Home", "/home");?></a></li>
        <li><a> <?php echo $html->image("castro_icon.png",array("cadastro"),array("class"=>"style_topo"));?><?php echo $html->link("Cadastro", "/cadastro");?></a></li>
        <li><a><?php echo $html->image("log_icon.png",array("log"),array("class"=>"style_topo"));?> Login</a></li>
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
    <div class="carrinho"><div  class="label_car"><b><a href="carrinho.php">Vazio</a></b></div></div>
    </div>
    

</div><!--Fim do bloco #BBUSCA -->
   
    <!--Início do bloco #CONTEUDO -->
<div id="CONTEUDO"> 
    
		<!--Início da Barra Lateral esquerda -->
	<div class="BARRA"><div class="MARCADOR_BARRA_CAT"></div>
	<div class="Exibe_cat"></div></div> <!--Fim da Barra Lateral esquerda -->
        
        <div class="PROMOCOES"></div>
       <div class="EXI_PROMOCOES"></div> 
        
        
        	<!--Início da Barra Lateral direita -->

<div class="BARRAD"> <div class="MARCADOR_BARRA_SUG"></div></div>
	 <!--Fim da Barra Lateral direita -->
        
        
  </div><!--Fim do bloco #CONTEUDO -->

	<!--Início do bloco #RODAPE -->
	<div id="RODAPE" align="center"> Copyright NTC Solitions</div><!--Fim do bloco #RODAPE -->

</div><!--Fim do bloco #GERAL -->

</body>
</html>
