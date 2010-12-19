<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
<head><meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /></head>
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

<!--In�cio do bloco #GERAL -->
<div id="GERAL">
<?php echo $this->contentForLayout ?>
<!--In�cio do bloco #TOPO -->
	<div id="TOPO"><div id="logotipo"><?php echo $html->image("logo.png",array("topo"),array("class"=>"logotipo"));?></div>
    
	

	  <div class="tag_form_senha"></div>
          <?php echo $this->element("formulario_de_login"); ?>
      
      <div class="botao_login"></div>
	</div><!--Fim do bloco #TOPO -->
  
    <!--In�cio do #MENU topo-->
    <ul id="MENU">
        <li><a ><?php echo $html->image("home_icon.png",array("home"),array("class"=>"style_topo"));?> <?php echo $html->link("Home", "/home");?></a></li>
        <li><a> <?php echo $html->image("castro_icon.png",array("cadastro"),array("class"=>"style_topo"));?><?php echo $html->link("Cadastro", "/cadastro");?></a></li>
        <li><a><?php echo $html->image("log_icon.png",array("log"),array("class"=>"style_topo"));?> Login</a></li>
        <li><a><?php echo $html->image("sac_img.png",array("sac"),array("class"=>"style_topo"));?>SAC</a></li>
    </ul> <!--Fim do #MENU -->
    
    <!--In�cio do bloco #BBUSCA -->
<div id="BBUSCA">
<div class="BUSCA">
		<select  name="dep" title="Departamento">
					<option selected="selected">Selecione categoria</option>
					<option value="1">Automotivo</option>
					<option value="2">Beleza e Sa&uacute;de</option>
					<option value="3">Brinquedos</option>
					<option value="4">CDs</option>
					<option value="5">C&acirc;meras e Filmadoras</option>
					<option value="6">Celulares e Telefones</option>                    
					<option value="7">DVDs e Blu-Ray</option>
					<option value="8">Eletrodom&eacute;sticos</option>
					<option value="9">Eletr&ocirc;nicos</option>
					<option value="10">Eletroport&aacute;teis</option>
					<option value="11">Esporte e Lazer</option>
					<option value="12">Futebol</option>
					<option value="13">Games</option>
					<option value="14">Inform&aacute;tica</option>
					<option value="15">Inform&aacute;tica e Acess&oacute;rios</option>                    
					<option value="16">Inst. Musicais</option>
					<option value="17">Livros</option>                   
		</select>
	</div>
    
    <form name="frmBusca" method="post" action="?a=buscar" >
           <input name="Produto" type="text" class="BPRODUTO" id="bProduto" />
            <div class="botao_busca">       
                <input name="busca" type="submit" value="Buscar" />
                <div class="carrinho"><div  class="label_car"><b><a href="/bertonis/carrinho/index">Produtos</a></b></div></div>
            </div>
    </form>       
    

</div><!--Fim do bloco #BBUSCA -->
   
    <!--In�cio do bloco #CONTEUDO -->
<div id="CONTEUDO"> 
    
		<!--In�cio da Barra Lateral esquerda -->
	<div class="BARRA"><div class="MARCADOR_BARRA_CAT"></div>
	</div> <!--Fim da Barra Lateral esquerda -->
        
        	<!--In�cio da Barra Lateral direita -->

<div class="BARRAD"> <div class="MARCADOR_BARRA_SUG"></div></div>
	 <!--Fim da Barra Lateral direita -->
        
  </div><!--Fim do bloco #CONTEUDO -->

	<!--In�cio do bloco #RODAPE -->
	<div id="RODAPE" align="center"> Copyright NTC Solitions</div><!--Fim do bloco #RODAPE -->

</div><!--Fim do bloco #GERAL -->

</body>
</html>


<?php
$conn = @mysql_connect("localhost", "root", "") or die("Não foi possível a conexão com o Banco");
$db = @mysql_select_db("bertoni", $conn) or die("Não foi possível selecionar o Banco");
// Recuperamos a ação enviada pelo formulário
$a = $_GET['a'];

// Verificamos se a ação é de busca
if ($a == "buscar") {

	// Pegamos a palavra
	$palavra = trim($_POST['Produto']);

	// Verificamos no banco de dados produtos equivalente a palavra digitada
        //$tuplaProduto = $this->produtos->fetch("SELECT * FROM produtos WHERE nome LIKE '%".$palavra."%' ORDER BY nome");

	$sql = mysql_query("SELECT * FROM produtos WHERE nome LIKE '%".$palavra."%' ORDER BY nome");

	// Descobrimos o total de registros encontrados
	$numRegistros = mysql_num_rows($sql);

	// Se houver pelo menos um registro, exibe-o
	if ($numRegistros != 0) {
		// Exibe os produtos e seus respectivos preços
		while ($produto = mysql_fetch_object($sql)) {
			echo $produto->nome . " (R$ ".$produto->preco.") <br />";
		}
	// Se não houver registros
	} else {
		echo "Nenhum produto foi encontrado com a palavra ".$palavra."";
	}
}

?>