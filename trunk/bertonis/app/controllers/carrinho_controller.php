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

    public function index($nome = null) {
        pr($nome);
        //obtem o id da sessão
        $uid = $_SESSION["id_usuario"]; // atribuir a $uid o id da sessão do usuario
        //busca todos os campos com o uid correspondente
        //$cart = $this->carrinho->all(array("uid" => $uid));
        $produtosCarrinho = array("conditions" => array(
            "uid" => $uid
            )
        );

        $cart = $this->carrinho->all($produtosCarrinho);
        //pr($cart);
        foreach ($cart as $ca){
            $idProd[] = $ca["product_id"];          
        }
        $this->set("nomesP", $this->produtos->all(array("conditions" => array("cod" => $idProd))));
        //pr($idProd);
        $this->set("QuantidadeP", $this->produtos->count(array("conditions" => array("cod" => $idProd, "nome" => $nome))));
        //print_r($idProd);        
        
//        $nomeProduto = array("conditions" => array(
//            "cod" => $idProd
//            )
//        );

        //$nomesProd = $this->prudutos->fetch("SELECT nome FROM produtos WHERE cod = '" . $idProd . "'");
        //$nomesProd = $this->produtos->all($nomeProdutos);
        //pr($nomesProd);
        
        
        $this->set("carrinho", $cart);
        $this->set("produtos", $nomesProd);
        $this->set("total_preco", $this->carrinho->getTotalPrice($uid));
        $this->set("uid", $uid);

//        $quantidadeP = $this->carrinho->count(array(
//	    "conditions" => array("uid" => $uid)
//	));
//        $this->set("quantidade", $quantidadeP);
        //$this->redirect("/carrinho/addProdutos/". $id);
    }

    //finaliza a compra do cliente
    public function finalizaCompra($uid = null) {
        //armazenar os campos correspondentes da tabela de vendas
    }

    // armazena um novo produto no carrinho
    public function addProdutos($product_id = null, $nome_produto = null) {
        //pr($product_id);
        //obtem o id da sessão
        $uid = $_SESSION["id_usuario"];  // atribuir a $uid o id da sessão do usuario
        //define o id do usuario e o id do produto para ser salvo
        $data = array(
            "uid" => $uid,
            "product_id" => $product_id
            //"nome" => $nome_produto
        );

        // sava os dados definidos        
        $this->carrinho->save($data);

        // redireciona a view
        $this->redirect("/produtos/paginacao");
    }

    //destroi um carrinho
    public function deletaProduto($idProduto = null) {
        
        $uid = $_SESSION["id_usuario"];
        // deleta os produtos do carrinho definido pelo cart_id
        //$tuplaProduto = $this->carrinho->all(array("uid" => $uid, "product_id" => $idProduto));
        $tuplaProduto = $this->carrinho->fetch("SELECT id, uid, product_id FROM carrinho WHERE
                                product_id = '" . $idProduto . "' and uid = '" . $uid . "'");
        //pr($tuplaProduto);
        foreach ($tuplaProduto as $dados){
            $this->carrinho->delete($dados["id"]);
        }

        //$this->Users->query("DELETE FROM users WHERE approved = 0");

        // redireciona a view
        //$this->redirect("/carrinho");
        $this->redirect("/produtos/paginacao");
    }

    
}

?>
