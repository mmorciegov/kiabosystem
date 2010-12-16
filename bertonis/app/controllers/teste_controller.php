<?php 

class TesteController extends AppController{
	
	function index(){
		
	$data = array(
		"nome" => "admin",
    	"idade" => 26
    );
	
    $this->Teste->save($this->data);					
		
		}
	
	
}

?>