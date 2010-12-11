<div class="CADASTROPROD">

<div class="form_cad"><?php

		echo $form->create();
		echo $form->input("cod",array("label" => "Código do produto : "));
		echo $form->input("subcategorias_idSubcategoria",array("label" => "Código da Sub : "));
		echo $form->input("descricao",array("label" => "Descrição : "));
		echo $form->input("nome",array("label" => "Nome do Produto: "));
		echo $form->input("quantidade",array("label" => "Quantidade : "));
		echo $form->input("preco",array("label" => "Preço : "));
		echo $form->input("promocional",array("label" => "Em Promoção : "));
		echo $form->close("Cadastrar");

	?></div>
	
</div>