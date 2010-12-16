<?php 
class SubcategoriasController extends AppController{

	function index(){
		$this->set("subcategorias",$this->Subcategorias->All());
	}
	public function exibeSubcategoria($id = null){
			pr($id);
			//rotinas de pegar os dados da subcategoria e exibí-los
	}
	
	}

?>