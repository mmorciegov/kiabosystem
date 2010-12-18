

<div class="CADASTRO">
	<div class="form_cad"><?php

		echo $form->create();
		//echo $form->input("Usuarios_id_usuario",array("label" => "Código do usuario :<br>"));
                echo $form->input("nome",array("label" => "Nome :<br>"));
                echo $form->input("cpf",array("label" => "CPF :<br>"));
		echo $form->input("cep",array("label" => "CEP :<br>"));
		echo $form->input("email",array("label" => "E-mail : <br>"));
                echo $form->input("rua",array("label" => "Rua :<br>"));
		echo $form->input("ncasa",array("label" => "Número :<br>"));
                echo $form->input("bairro",array("label" => "Bairro :<br>"));
                echo $form->input("cidade",array("label" => "Cidade :<br>"));
                echo $form->input("estado",array("label" => "Estado :<br>"));
                echo $form->input("telefone",array("label" => "Telefone :<br>"));
		echo $form->input("data_nascimento",array("label" => "Data de Nascimento :<br>"));
                echo $form->input("username",array("label" => "Login :<br>"));
                echo $form->input("password",array("label" => "Senha :<br>"));
                //echo $form->input("password",array("label" => "Senha :<br>"));
		echo $form->close("Cadastrar");


	?></div>
</div>