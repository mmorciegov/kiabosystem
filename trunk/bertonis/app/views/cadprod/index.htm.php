<div class="CADASTROPROD">

<div class="form_cad"><?php

		echo $form->create();
		echo $form->input("subcategorias_idSubcategoria",array("label" => "Código da Sub :<br>"));
		echo $form->input("descricao",array("label" => "Descrição :<br>"));
		echo $form->input("nome",array("label" => "Nome do Produto:<br>"));
		echo $form->input("quantidade",array("label" => "Quantidade :<br>"));
		echo $form->input("preco",array("label" => "Preço :<br>"));
		echo $form->input("promocional",array("label" => "Em Promoção :<br>"));
		echo $form->input('foto', array('type' => 'file', 'label' => 'Imagem:'));
		echo $form->close("Cadastrar");

	?></div>
	
</div>