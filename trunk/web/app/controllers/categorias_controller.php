<?php 
class CategoriasController extends AppController{
	
public $uses = array("Categorias", "Subcategorias");
	
	function index(){
		
		$this->set("categorias",$this->Categorias->All());
		$this->set("subcategorias",$this->Subcategorias->All());
	
	}
		
	function read($id = null){

	
		$this->set("categoria", $this->Categorias->findById($id));
	
	}
	
	function edit($id = null){
		
		if (!empty($this->data)) :
			$this->data["idCategoria"] = $id;
		endif;
		
		$this->set("categoria", $this->Categorias->findById($id));
	}
	
	function delete($id = null){
		
		$this->autoRender = false;	
		$this->Categorias->delete($id);
		$this->redirect("/categorias/");
	
	}
	
	function add(){
		$this->setAction("edit");
	}
	
}

?>