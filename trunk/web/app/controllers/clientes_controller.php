<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of produtos_controller
 *
 * @author Marcelo
 */
class ClientesController extends AppController {

	function index(){
		//public $layout = "clientes";
		$this->set("clientes", $this->Clientes->All());
	}
	function read($id = null){
		$this->set("cliente", $this->Clientes->findById($id));
	}
	function edit($id = null){
		if (!empty($this->data)) :
			$this->data["Usuarios_id_usuario"] = $id;
			pr($this->data);
			//$this->Clientes->save($this->data);
        endif;
		$this->set("cliente", $this->Clientes->findById($id));
	}
	function delete($id = null){
		$this->autoRender = false;	
		$this->Clientes->delete($id);
		$this->redirect("/clientes/");
	}
	function add(){
		$this->setAction("edit");
	}
}

?>
