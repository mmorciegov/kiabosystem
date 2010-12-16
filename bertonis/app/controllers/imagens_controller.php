<?php
class ImagensController extends AppController{
	
	public $layout = "none";
	public $components = array("Upload");
    public function index()	{

         if ($this->data):
                // Upload da imagem
                if(!empty($_FILES)):
				$this->UploadComponent->path = "/images/";
				$file = $this->UploadComponent->files["foto"];
				$tipo = strtolower(end(explode('.', $_FILES['foto']['name'])));
				$name = sha1(uniqid(date('dmyHis'))) . '.' . $tipo;
                $upload = $this->UploadComponent->upload($file, null, $name);
				$this->data['foto'] = $name;
                endif;
    			$this->Imagens->save($this->data);
				// Mensagem de Sucesso
				
			else:
			    // Mensagem de erro
		endif;
		
	}
	
	 public function exibe(){
		 
		 $this->set("imagens",$this->Imagens->All());
		 
		 }	
	
	
}
?> 