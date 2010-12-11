<div class="CADASTROPROD">
<div class="form_cad">

<?php

echo $form->create();
echo $form->input("subcategorias_idSubcategoria");
echo $form->input("descricao");
echo $form->input("nome");
echo $form->input("quantidade");
echo $form->input("preco");
echo $form->input("promocional");

echo $form->close("NovoProduto");
?></div></div>
