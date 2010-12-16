
<?php echo $produtos;?>       
<?php $pagination->model("Produtos");
       echo $pagination->previous("Anterior");
		echo " ".$pagination->next("Proximo"); 
?>

