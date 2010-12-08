<?php

/**
 * Description of produtos_controller
 *
 * @author Rafael
 */
class ProdutosController extends AppController {
		

	public $uses = array ("Categorias", "Subcategorias", "Produtos");
	
    public function paginacao(){
			
			$layout = "default";
			
			$this->set("products", $this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 3
			)));
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
