<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class UsersController extends AppController{
    
     public $layout = "cadastro";
	 
     public $components = array("Auth");

     public function index_admin() {
        
        $this->set("usuario", $_SESSION["username"]);
        $this->set("permissao", $_SESSION['permission']);

     }

     public function index_cliente() {

        $this->set("usuario", $_SESSION["username"]);
        $this->set("permissao", $_SESSION['permission']);

     }

     public function index_funcionario() {

        $this->set("usuario", $_SESSION["username"]);
        $this->set("permissao", $_SESSION['permission']);
     }

     public function register(){
         if(!empty ($this->data)):

            $this->Users->save($this->data);
            //$this->redirect("/users/login");

        endif;
     }

}

?>
