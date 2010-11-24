<h2> Edita produtos!! </h2>
<?php
echo $form->create();
echo $form->input("cod");
echo $form->input("subcategorias_idSubcategoria");
echo $form->input("descricao");
echo $form->input("nome");
echo $form->input("quantidade");
echo $form->input("preco");
echo $form->input("promocional");

echo $form->close("EditaProduto");
?>
