<?php
/**
 *  HomeController é o controlador padrão do Spaghetti, já definido com algumas
 *  configurações para que você possa ver a tela inicial do Spaghetti, e já começar
 *  a desenvolver sem nenhuma tela de erro.
 */

class HomeController extends AppController {
    /**
     * Para que você não receba o erro de Model não existente, o HomeController
     * está configurado para não usar modelo algum. Basta remover a linha abaixo
     * e ele passará a se comportar da forma que você espera.
     */
    public $uses = array("Users");    
    
    
    public function index() {

       if(!empty($this->data)){

            $this->data["password"] = Security::hash($this->data["password"], "sha1", true);

            $result_admin = $this->Users->all(array(
                'conditions'=>array(
                'username'=>htmlspecialchars($this->data['username']),
                'password'=>$this->data['password'],
                'permission'=>'admin')
            ));            

            $result_cliente = $this->Users->all(array(
                'conditions'=>array(
                'username'=>htmlspecialchars($this->data['username']),
                'password'=>$this->data['password'],
                'permission'=>'cliente')
            ));

            $result_funcionario = $this->Users->all(array(
                'conditions'=>array(
                'username'=>htmlspecialchars($this->data['username']),
                'password'=>$this->data['password'],
                'permission'=>'funcionario')
            ));

            
            if(sizeof($result_admin)){
                
                $_SESSION['loged'] = 1;
                $_SESSION['permission'] = 'admin';   
				$_SESSION['username'] = $this->data['username'];             
                $this->redirect("/users/index_admin");


            }elseif(sizeof($result_cliente)){

                $_SESSION['loged'] = 1;
                $_SESSION['permission'] = 'cliente';
				$_SESSION['username'] = $this->data['username'];
                $this->redirect("/users/index_cliente");

            }elseif(sizeof($result_funcionario)){

                $_SESSION['loged'] = 1;
                $_SESSION['permission'] = 'funcionario';
				$_SESSION['username'] = $this->data['username'];
                $this->redirect("/users/index_funcionario");

            }else{
                 pr("Usuario ou senha incorretos. Tente novamente");
                 $this->set("errorMessage", "Usuario ou senha incorretos. Tente novamente");               

            }
           
        }
         
    }

    public function logout(){
        session_destroy();
        $this->redirect("/home/");
    }    
}

?>
