<?php 
class CategoriasController extends AppController{
	
public $uses = array("Categorias", "Subcategorias","Produtos", "carrinho");

	function index(){
		
	$menuGeral = "";

	$menu = $this->Categorias->all();
	$subcat = $this->Subcategorias->all();
	
	$menuGeral .= "<div class='Exibe_cat'>"; 
	
	
	foreach($menu as $item) {	
	
	
	$menuGeral .= "<b><a href=/bertonis/categorias/exibeCategoria/$item[idCategoria]>"."<h3>" . $item["nome"] ."</h3>"." </b></a>";
	
	foreach($subcat as $sub) {
		
		if($sub["categorias_idCategoria"] == $item["idCategoria"]){
			$menuGeral .= "<a href=/bertonis/produtos/paginacaoPorSubcat/$sub[idSubcategoria]>" . $sub["nome"] . "</a><br>";
		//$menuGeral .= "<a href=/bertonis/subcategorias/exibeSubcategoria/$sub[idSubcategoria]>" . $sub["nome"] . "</a><br>";	
		}
		
		}
	
	}
	
	$menuGeral .= "</div>";
	
	//====================================================================
	//TESTE PARA A EXIBI��O DE TUDO EM UMA TELA S�
	$this->set("menu", $menuGeral);
	
		$helper = array("Html", "Pagination");
		
        $products = $this->Produtos->paginate(array(
                "perPage" => 2,
                "page" => $this->page()
        ));
        $this->set("products", $products);
	//====================================================================


        //====================================================================
	//TESTE PARA A EXIBI��O DE TUDO EM UMA TELA S�

        $uid = $_SESSION["id_usuario"];
          $quantidadeP = $this->carrinho->count(array(
	    "conditions" => array("uid" => $uid)
	));
        $this->set("quantidade", $quantidadeP);

         //====================================================================

		
		//$this->set("categorias",$this->Categorias->All());
		//$this->set("subcategorias",$this->Subcategorias->All());
	
	}
	
	public function exibeCategoria($id = null){
		pr($id);
		//rotinas de pegar os dados da categoria e exib�-los
	}
		
	function read($id = null){

	
		$this->set("categoria", $this->Categorias->findById($id));
	
	}
	
	function edit($id = null){
		
		if (!empty($this->data)) :
			$this->data["idCategoria"] = $id;
		endif;
		
		$this->set("categoria", $this->Categorias->findById($id));
	}
	
	function delete($id = null){
		
		$this->autoRender = false;	
		$this->Categorias->delete($id);
		$this->redirect("/categorias/");
	
	}
	
	function add(){
		$this->setAction("edit");
	}
	
}

?>