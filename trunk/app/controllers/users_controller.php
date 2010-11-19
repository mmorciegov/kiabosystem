<?php

class UsersController extends AppController{

    
    public function index(){

        $this->set("usuarios", $this->Users->all());
        
        
    }

    public function login(){

        $this->AuthComponent->login();
            
    }

    public function logout(){
        
        $this->AuthComponent->logout();
        
    }

    public function register(){
        if(!empty ($this->data)):
                    
            $this->Users->save($this->data);
            $this->redirect("/users/login");

        endif;

    }
}


?>
