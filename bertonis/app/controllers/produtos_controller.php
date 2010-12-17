<?php

/**
 * Description of produtos_controller
 *
 * @author Marcelo, Rafael
 */
class ProdutosController extends AppController {

	public $uses = array ("Categorias", "Subcategorias", "Produtos", "Imagens" );
	public $components = array("Upload");
	
	public $layout = "none";
	
	//função para mostrar imagem
	public function mostra($cod = null) {	
		$imagens = $this->Imagens->firstById($cod);
		//foreach ($imagens as $img){
			return	$html->imagens($imagens['foto']);
		//}
	}
	
	public function paginacao(){
		
		$itensGeral = "";
		$produtos =  $this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 2
			));
		
		$itensGeral .= "<div class='exi_PROMOCOES'>"; 
	    
		foreach($produtos as $item) {
			
			$itensGeral .= "<a href=/bertonis/produtos/exibeProduto/$item[cod]>"."<img src='/bertonis/images/".$item["foto"]."'><br>".$item["nome"]."</h3> - "." R$".$item["preco"] ." </a>"."<br>";
		}
		$itensGeral .= "</div><div class='PROMOCOES'></div>";
		$this->set("produtos", $itensGeral);
	}
	
	public function exibeProduto($id = null){
		$this->redirect("/carrinho/addProdutos/". $id);
		//rotinas de pegar os dados do cliente e exibí-los
		//$this->redirect("/carrinho/deletaProduto/". $id);
	}

	public function paginacaoPorSubcat($id = null){
			// para chamar essa funcao usa-se essa estrutura : $this->setAction("paginacaoPorSubcat", parametro);
			$itensGeral = "";
			$subcat = $this->Subcategorias->firstById($id);
			$produtos =  $this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 3,
				"conditions" => array("subcategorias_idSubcategoria" => $id)
			));
		
			$itensGeral .= "<div class='exi_PROMOCOES'>"; 
	    
			foreach($produtos as $item) {	
				$itensGeral .= "<b><a href=/bertonis/produtos/exibeProduto/$item[cod]></b>".$item["nome"]."</h3> - "." R$".$item["preco"] ." </a>"."<br>";
			}
			$itensGeral .= "</div><div class='PROMOCOES'></div>";
			$this->set("produtos", $itensGeral);
			
			
			
			/*
			$subcat = $this->Subcategorias->firstById($id);
			$this->set("subcategoria",$subcat);
			$this->set("products",$this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 3,
				"conditions" => array("subcategorias_idSubcategoria" => $id
			))));*/
	}

    public function cadastro() {		
        if (!empty($this->data)) :
            $this->Produtos->save($this->data);
            $this->redirect("/categorias");
        endif;
    }
	
	public function exibe(){
		
		 $this->set("produtos",$this->Produtos->All());
		
		}

    
}

?>
