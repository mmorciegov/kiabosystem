<?php

class CadastroController extends AppController {
    public $layout = "cadastro";
    public $uses = array("Clientes");
	
	public function cadastro() {
   		if(!empty($this->data)): // verificamos se há dados em $this->data
        	$this->Clientes->save($this->data); // salvamos o registro com os dados vindos do usuário
    	endif;
	}

}

?>
