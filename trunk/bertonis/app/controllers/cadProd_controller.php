<?php

class CadprodController extends AppController {
  
    public $layout = "cadprod";
	
    public $uses = array("Produtos");
   
    public function index() {
		
		if(!empty($this->data)): // verificamos se há dados em $this->data
        	$this->Produtos->save($this->data); // salvamos o registro com os dados vindos do usuário
    	endif;

    }
}

?>
