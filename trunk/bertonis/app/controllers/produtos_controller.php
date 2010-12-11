<?php

/**
 * Description of produtos_controller
 *
 * @author Rafael
 */
class ProdutosController extends AppController {
		

	public $uses = array ("Categorias", "Subcategorias", "Produtos");
	

	
	public function paginacao(){
		$itensGeral = "";
		$produtos =  $this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 3
			));
		
		$itensGeral .= "<div class='exi_PROMOCOES'>"; 
	    
		foreach($produtos as $item) {	
			$itensGeral .= "<b><a href=/bertonis/produtos/exibeProduto/$item[cod]></b>".$item["nome"]."</h3> - "." R$".$item["preco"] ." </a>"."<br>";
		}
		$itensGeral .= "</div><div class='PROMOCOES'></div>";
		$this->set("produtos", $itensGeral);
	}
	
	public function exibeProduto($id = null){
		pr($id);
		//rotinas de pegar os dados do cliente e exibí-los
	}

	public function paginacaoPorSubcat($id){
		// para chamar essa funcao usa-se essa estrutura : $this->setAction("paginacaoPorSubcat", parametro);
			$subcat = $this->Subcategorias->firstById($id);
			$this->set("subcategoria",$subcat);
			$this->set("products",$this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 3,
				"conditions" => array("subcategorias_idSubcategoria" => $id
			))));
	}

    public function cadastro() {		
        if (!empty($this->data)) :
            $this->Produtos->save($this->data);
            $this->redirect("/categorias");
        endif;
    }

    
}

?>
