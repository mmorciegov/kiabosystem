<?php
	echo $form->create("/users/logar");        
	echo "<div class='form_usuario'>";
		echo $form->input("username", array('label'=>'Usuario', 'div'=>null));
	echo "</div>"; 
	echo "<div class='form_senha'>";
		echo $form->input("password", array('label'=>'Senha', 'div'=>null, 'type'=>'password'));
	echo "</div>"; 
	echo "<div class='form_logar'>";
		echo $form->close("login");
	echo "</div>";
        
?>
       