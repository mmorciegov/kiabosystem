

<div class="CADASTRO">
	<div class="form_cad"><?php

		echo $form->create();
		//echo $form->input("Usuarios_id_usuario",array("label" => "Código do usuario :<br>"));
		echo $form->input("cep",array("label" => "CEP :<br>"));
		echo $form->input("mail",array("label" => "E-mail : <br>"));
		echo $form->input("numero_casa",array("label" => "N Casa :<br>"));
		echo $form->input("Complemento_endereco",array("label" => "Complemento :<br>"));
		echo $form->input("data_nascimento",array("label" => "Data de Nascimento :<br>"));
		echo $form->close("Cadastrar");


	?></div>
</div>