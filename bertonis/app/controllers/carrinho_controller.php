<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of carrinho_controller
 *
 * @author Rafael
 */
class CarrinhoController extends AppController {

    public $helpers = array("html", "form");
    public $uses = array("carrinho", "produtos");

    // inicia uma sessão
    public function __construct() {
        //  session_start(); retirado pois a sessão vai ser definida pelo usuario
        parent::__construct();
    }

    public function index() {
        //obtem o id da sessão
        $uid = $_SESSION["id_usuario"]; // atribuir a $uid o id da sessão do usuario
        //busca todos os campos com o uid correspondente
        $cart = $this->carrinho->all(array("uid" => $uid));

//        foreach ($cart as $products){
//            $produtos[] = $products["product_id"];
//        }
        //define as variaveis a ser passada para a view
        $this->set("carrinho", $cart);
        //$this->set("prod", $produtos[]);
        $this->set("total_preco", $this->carrinho->getTotalPrice($uid));
        $this->set("uid", $uid);
    }

    //finaliza a compra do cliente
    public function finalizaCompra($uid = null) {
        //armazenar os campos correspondentes da tabela de vendas
    }

    // armazena um novo produto no carrinho
    public function addProdutos($product_id = null) {
        pr($product_id);
        //obtem o id da sessão
        $uid = $_SESSION["id_usuario"];  // atribuir a $uid o id da sessão do usuario
        //define o id do usuario e o id do produto para ser salvo
        $data = array(
            "uid" => $uid,
            "product_id" => $product_id
        );

        // sava os dados definidos        
        $this->carrinho->save($data);

        // redireciona a view
        $this->redirect("/produtos/paginacao");
    }

    //destroi um carrinho
    public function deletaProduto($idProduto = null) {
        //$_SESSION['message'] = "Item removed.";
        $uid = $_SESSION["id_usuario"];
        // deleta os produtos do carrinho definido pelo cart_id
        //$tuplaProduto = $this->carrinho->all(array("uid" => $uid, "product_id" => $idProduto));
        $tuplaProduto = $this->carrinho->fetch("SELECT id, uid, product_id FROM carrinho WHERE
                                product_id = '" . $idProduto . "' and uid = '" . $uid . "'");
        //pr($tuplaProduto);
        foreach ($tuplaProduto as $dados){
            $this->carrinho->delete($dados["id"]);
        }
        

        // redireciona a view
        //$this->redirect("/carrinho");
        $this->redirect("/produtos/paginacao");
    }

    
}

?>
