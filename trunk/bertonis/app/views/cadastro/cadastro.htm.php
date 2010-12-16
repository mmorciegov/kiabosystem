<div class="CADASTRO">
	<div class="form_cad"><?php

		echo $form->create();
		echo $form->input("Usuarios_id_usuario",array("label" => "Código do usuario"));
		echo $form->input("cep",array("label" => "CEP: "));
		echo $form->input("email",array("label" => "E-mail: "));
		echo $form->input("numero_casa",array("label" => "N Casa: "));
		echo $form->input("Complemento_endereco",array("label" => "Complemento: "));
		echo $form->input("data_nascimento",array("label" => "Data de Nascimento: "));
		echo $form->close("Cadastrar");

	?></div>
</div>