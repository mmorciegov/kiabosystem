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
	//public $layout = "none";
    // inicia uma sessão
    public function __construct() {
        //  session_start(); retirado pois a sessão vai ser definida pelo usuario
        parent::__construct();
    }

    public function index() {
        
        //obtem o id da sessão
        $uid = $_SESSION["id_usuario"]; // atribuir a $uid o id da sessão do usuario
        pr($uid);
        $cart = $this->carrinho->fetch("SELECT DISTINCT (carrinho.product_id), carrinho.uid,carrinho.quantidade, produtos.nome
            FROM carrinho INNER JOIN produtos ON carrinho.product_id = produtos.cod
            WHERE carrinho.uid = '" . $uid . "'");

        //soma o valor total da compra do cliente
        $somaTotal =  $this->carrinho->fetch("SELECT SUM(total_parcial) as SOMA, uid
                        FROM carrinho WHERE uid = '" .$uid."' GROUP BY uid");

        $this->set("valorFinal", $somaTotal);

        foreach ($somaTotal as $soma){
            $fim = "<a href='/bertonis/compras/index/".$uid. "/". $soma["SOMA"]."'>Finalizar Compra</a>";
        }
		
		$this->set("link", $fim);
        
		$this->set("nomesP", $cart);		

        $quantidadeProdutos = $this->carrinho->fetch("SELECT DISTINCT (carrinho.product_id), carrinho.uid, produtos.nome
            FROM carrinho INNER JOIN produtos ON carrinho.product_id = produtos.cod
            WHERE carrinho.uid = '" . $uid . "'");

        $this->set("QuantidadeP", $this->produtos->count(array("conditions" => array("cod" => $idProd, "nome" => $nome))));       
        $this->set("carrinho", $cart);
        $this->set("produtos", $nomesProd);
        //$this->set("total_preco", $this->carrinho->getTotalPrice($uid));
        $this->set("uid", $uid);

    }

    //finaliza a compra do cliente
    public function finalizaCompra($uid = null) {
        //armazenar os campos correspondentes da tabela de vendas
        
    }

    // armazena um novo produto no carrinho
    public function addProdutos($product_id = null, $preco = null) {
        
        //obtem o id da sessão
        $uid = $_SESSION["id_usuario"];  // atribuir a $uid o id da sessão do usuario        
		//procura o item no carrinho
		$prod = $this->carrinho->fetch("SELECT DISTINCT (carrinho.product_id), carrinho.id, carrinho.uid,
                    carrinho.quantidade, produtos.preco FROM carrinho INNER JOIN produtos
                    ON carrinho.product_id = produtos.cod WHERE product_id = '" .$product_id."' && uid = '" .$uid."'");
		
		if($prod!=null){// se o produto já estiver no carrinho
			foreach($prod as $produto){
				$produto["quantidade"]++;
				$this->carrinho->delete($produto["id"]);                               
                                $totalParcial[] = $produto['quantidade'] * $produto['preco'];
			}
                        $totalMult = array_sum($totalParcial);
                        $this->carrinho->save(array("uid" => $produto["uid"],"product_id" => $produto["product_id"],
                            "quantidade" => $produto["quantidade"], "total_parcial" => $totalMult));

                }else{//caso produto ainda Não esteja no carrinho
				//define o id do usuario e o id do produto para ser salvo
                        $data = array(
            		"uid" => $uid,
            		"product_id" => $product_id,
			"quantidade" => 1,
                        "total_parcial" => $preco            		
        		);
                    
        		// sava os dados definidos        
        		$this->carrinho->save($data);
		}//fim do else
                
		// redireciona a view
        $this->redirect("/produtos/paginacao");
				
				
    }

    //destroi um carrinho
    public function deletaProduto($idProduto = null) {
        
        $uid = $_SESSION["id_usuario"];

        $tuplaProduto = $this->carrinho->fetch("SELECT id, uid, product_id FROM carrinho WHERE
                                product_id = '" . $idProduto . "' and uid = '" . $uid . "'");
        
		foreach ($tuplaProduto as $dados){
            $this->carrinho->delete($dados["id"]);
        }

        $this->redirect("/produtos/paginacao");
    }

    
}

?>
