<h2> Pagina de registro </h2>

<?php


echo $form->create();
echo $form->input("username");
echo $form->input("password");
echo $form->input("permission", array('label'=> 'Permissao', 'div'=>null));
echo $form->close("Registrar");



?>