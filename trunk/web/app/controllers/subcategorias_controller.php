<?php 
class SubcategoriasController extends AppController{

	function index(){
		$this->set("subcategorias",$this->Subcategorias->All());
	
		
		}
	
	}

?>