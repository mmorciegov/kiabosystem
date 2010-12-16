
<?php
echo $form->create(null, array('id' => 'form', 'method' => 'file')); 
echo $form->input('foto', array('type' => 'file', 'label' => 'Imagem:'));
echo $form->close("Enviar");
?>


