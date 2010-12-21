<div class="CADASTRO"><br><br><br><br>

<?php
	echo $form->create();
	
	echo $form->input("pgto", array("label"=>"Forma de Pagamento: ","type"=> "select", "options" => array(1=>"A vista",2=>"Cartao de Credito",3=>"Boleto")));
	
	echo $form->input("num_parcelas", array("label"=>"Numero de Parcelas: ","type"=> "select", "options" => array("1"=>"1x","2"=>"2x","3"=>"3x","4"=>"4x","5"=>"5x","6"=>"6x","7"=>"7x","8"=>"8x","9"=>"9x","10"=>"10x","11"=>"11x","12"=>"12x")));
	
	echo $form->close("Confirmar Compra");
	
?>

</div>