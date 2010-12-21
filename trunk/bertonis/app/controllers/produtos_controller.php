<?php

/**
 * Description of produtos_controller
 *
 * @author Marcelo, Rafael
 */
class ProdutosController extends AppController {

	public $uses = array ("Categorias", "Subcategorias", "Produtos", "Imagens" );
	public $components = array("Upload");
	
	//public $layout = "none";//TODO remover esta linha

	
	//fun��o para mostrar imagem
	public function mostra($cod = null) {	
		$imagens = $this->Imagens->firstById($cod);
		//foreach ($imagens as $img){
			return	$html->imagens($imagens['foto']);
		//}
	}
	
	public function paginacao(){
		$itensGeral = "";
		$produtos =  $this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 3
		));
		
		$itensGeral .= "<tr>"; 
		
		$cont = 0;//vari�vel que conta o n�mero de linhas da tabela
		foreach($produtos as $item) {
			$cont++;
			if($cont == 4){
				$itensGeral .= "</tr><tr>";
				$cont=0;
			}
			$itensGeral .= "<td align='center'><a href=/bertonis/produtos/exibeProduto/".$item["cod"]."><img src='/bertonis/images/".$item["foto"]."'><br>".$item["nome"]."</h3><br>R$".$item["preco"]." </a></td>";
		}
			
		$itensGeral .= "</tr>";
		
		$this->set("produtos", $itensGeral);	
	}
	
	//Este m�todo exibe o produto escolhido na tela
	
	public function exibeProduto($id = null){
				
		$itens = $this->Produtos->fetch("SELECT * FROM produtos WHERE cod = '".$id."' ");
		
		foreach	($itens as $item){
		
			$prod = "<img src='/bertonis/images/".$item["foto"]."'>"."<h2><b>Nome:</b></h2> ".$item["nome"].
                            "<br>"."<h2><b>Preço:</b></h2> ".$item["preco"]."<br>"."<b>Descrição:</b> ".$item["descricao"]."
                            <br><br><br><a href=/bertonis/carrinho/addProdutos/".$id."/".$item["preco"].">Adicionar ao carrinho</a>";                        
		}
		
		//monta a tela com os links
		
		//seta a vari�vel na view
		$this->set("produto", $prod);
		
		//$this->redirect("/carrinho/addProdutos/".$id);
		//rotinas de pegar os dados do produto e exib?-los
		//$this->redirect("/carrinho/deletaProduto/". $id);
	}
	
	

	public function paginacaoPorSubcat($id = null){
			// para chamar essa funcao usa-se essa estrutura : $this->setAction("paginacaoPorSubcat", parametro);
			$itensGeral = "";
			$subcat = $this->Subcategorias->firstById($id);
			$produtos =  $this->Produtos->paginate(array(
				"page" => $this->page(),
				"perPage" => 3,
				"conditions" => array("subcategorias_idSubcategoria" => $id)
			));
		
	    	$itensGeral .= "<tr>";
		
			$cont = 0;//vari�vel que conta o n�mero de linhas da tabela
			foreach($produtos as $item) {
				$cont++;
				if($cont == 4){
					$itensGeral .= "</tr><tr>";
					$cont=0;
				}
				$itensGeral .= "<td align='center'><a href=/bertonis/produtos/exibeProduto/".$item["cod"]."><img src='/bertonis/images/".$item["foto"]."'><br>".$item["nome"]."</h3><br>R$".$item["preco"]." </a></td>";
			}
			
			$itensGeral .= "</tr>";
			
			$this->set("produtos", $itensGeral);
	}


    public function cadastro() {		
        if (!empty($this->data)) :
            $this->Produtos->save($this->data);
            $this->redirect("/categorias");
        endif;
    }
	
	public function exibe(){
		
		 $this->set("produtos",$this->Produtos->All());
		
		}
		
		
    
    public function teste() {
		
		$helper = array("Html", "Pagination");
		
        $products = $this->Produtos->paginate(array(
                "perPage" => 2,
                "page" => $this->page()
        ));
        $this->set("products", $products);
    }


    
}

?>