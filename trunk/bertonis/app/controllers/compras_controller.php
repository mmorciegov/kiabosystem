<?php 
class ComprasController extends AppController {
	//public $uses = array("carrinho");
	public $helpers = array("html", "form");
	
	public function index($id_user = null, $valorTotal = null){
		//pr("o cod é: ".$id_user);
		//$this->redirect("/compras/addCompra/".$id_user);
		//perguntar ao usuário:
		//1- forma de pagamento e salvar em $pgto		
		//2- qtd de parcelas em $num_parcelas
		//mostrar os dados de entrega e valor total para confirmação
		//chamar addCompra
//            if (!empty($this->data)){
//                $this->Compras->save($this->data);
//                $this->redirect("/categorias");
//            }

        if (!empty($this->data)){
            $dadosCompra = array(
                    "clientes_Usuarios_id_usuario" => $id_user,
                    "valor" => $valorTotal,
                    "pgto" => $this->data["pgto"],
                    "num_parcelas" => $this->data["num_parcelas"]                
            );
            $this->Compras->save($dadosCompra);
            $this->redirect("/categorias");
        }


        //pr($dadosCompra);

        
        
		
	}
	public function addCompra($id_user = null, $valorTotal = null){
            //pr("id user: ".$id_user.", Pagamento: ".$pgto.", Numero de parcelas:".$num_parcelas);
            //pr($valorTotal);
            
            //$this->Compras->save($this->data);
            //$this->redirect("/categorias");
              
		
		//salvar compra no banco
		//criar tupla para tabela compra_has_produtos com os produtos do carrinho
	}
	public function editarCompra(){
	}
	public function buscarCompra($id = null){
	}
	public function exibirCompras(){}
   
}
?>