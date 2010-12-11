<?php


class UsersController extends AppController{


    public $uses = array("Users");

    public function index_admin() {

        $this->set("user", $_SESSION["username"]);

    }

    public function index_funcionario() {

        $this->set("user", $_SESSION["username"]);

    }

    public function index_cliente() {

        $this->set("user", $_SESSION["username"]);

    }

    public function login() {



    }

    public function logar(){

        $login = isset($_POST["username"]) ? addslashes(trim($_POST["username"])) : FALSE;

        $senha = $this->data["password"] = Security::hash($this->data["password"], "sha1", true);

        if(!$login || !$senha) {
            echo "Voce deve digitar sua senha e login!";
            exit;
        }

        $total = $this->Users->fetch("SELECT id, cpf, username, password, telefone,
                                    nome, permission FROM users WHERE username = '" . $login . "'");

            if($total){
                foreach ($total as $dados){
                    if($dados['password'] == $senha){
                             // TUDO OK! Agora, passa os dados para a sess�o e redireciona o usu�rio
                            $_SESSION["id_usuario"]   = $dados["id"];
                            $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
                            $_SESSION["permissao"]    = $dados["permission"];
                            $_SESSION["username"]     = $dados["username"];
                            //header("Location: index_admin.htm.php");
                            if($_SESSION['permissao'] == 'A'){
                                header("Location: index_admin.htm.php");
                            }elseif($_SESSION['permissao'] == 'F'){
                                header("Location: index_funcionario.htm.php");
                            }elseif($_SESSION['permissao'] == 'C'){
                                header("Location: index_cliente.htm.php");
                            }else{
                                echo "Vc n possui nenhuma permissao de acesso!";
                            }
                            exit;
                        }
                        // Senha invalida
                        else{
                             echo "Senha invalida!";
                        }
                }
             }else{
                    echo "Login fornecido inexistente!";
                    exit;
             }

    }

    public function logout() {
        session_start();
        session_destroy();
        $this->redirect("/home");

    }

    public function verificaPermissao(){
        if($_SESSION['permissao'] == 'A'){
            echo "Vc tem permissao de ADMINISTRADOR!";
        }
        if($_SESSION['permissao'] == 'F'){
            echo "Vc tem permissao de FUNCIONARIO!";
        }
        if($_SESSION['permissao'] == 'C'){
            echo "Vc tem permissao de CLIENTE!";
       }

    }


    public function registrar(){
        $login = isset($_POST["username"]) ? addslashes(trim($_POST["username"])) : FALSE;
        // Recupera a senha, a criptografando em MD5
        $senha = $this->data["password"] = Security::hash($this->data["password"], "sha1", true);

        $data = array("username" => $login, "password" => $senha);

            $this->Users->save($data);
            //$this->redirect("/home");



    }

}

?>
