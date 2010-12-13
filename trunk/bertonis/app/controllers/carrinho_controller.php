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
class CarrinhoController extends AppController{


    public $helpers = array("html", "form");

    // inicia uma sessão
    public function __construct() {
      //  session_start(); retirado pois a sessão vai ser definida pelo usuario
        parent::__construct();
    }

    public function index() {
        //obtem o id da sessão
        $uid = session_id(); // atribuir a $uid o id da sessão do usuario

        //busca todos os campos com o uid correspondente
        $cart = $this->carrinho->all(array("uid" => $uid));

        //define as variaveis a ser passada para a view
        $this->set("carrinho", $cart);
        $this->set("total_preco", $this->carrinho->getTotalPrice($uid));
        $this->set("uid", $uid);
    }

    //finaliza a compra do cliente
    public function finalizaCompra($uid = null){
        //armazenar os campos correspondentes da tabela de vendas
    }

    // armazena um novo produto no carrinho
    public function create($product_id = null) {
        //obtem o id da sessão
        $uid = session_id();  // atribuir a $uid o id da sessão do usuario

        //define o id do usuario e o id do produto para ser salvo
        $data = array(
            "uid" => $uid,
            "product_id" => $product_id
        );

        // sava os dados definidos
        $this->carrinho->create();
        $this->carrinho->save($data);

        // redireciona a view
        $this->redirect("/carrinho");
    }

    //destroi um carrinho
    public function destroy($cart_id = null) {
        $_SESSION['message'] = "Item removed.";

        // deleta os produtos do carrinho definido pelo cart_id
        $this->carrinho->delete($cart_id);

         // redireciona a view
        $this->redirect("/carrinho");
    }

    //atualiza os dados de uma sessão caso ela seja excluida
    public function checkout($uid=null) {
        session_regenerate_id();
    }
}
?>
