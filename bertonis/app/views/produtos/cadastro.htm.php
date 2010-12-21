<div class="CADASTROPROD">
<div class="form_cad">

<?php

echo $form->create();
echo $form->input("subcategorias_idSubcategoria",array("label" => "ID :<br>"));
echo $form->input("descricao", 
array("label" => "Descricao : <br>","type"=>"textarea", "id"=>"descricao"));
echo $form->input("nome",array("label" => "Nome :<br>"));
echo $form->input("quantidade",array("label" => "Quantidade :<br>"));
echo $form->input("preco",array("label" => "Preco :<br>"));
echo $form->input("promocional",array("label" => "Promocional :<br>"));
echo $form->input('foto', array('type' => 'file', 'label' => 'Imagem :<br>'))."<br>";
echo $form->close("Finalizar Cadastro")."<br>";
?></div></div>
