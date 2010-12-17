<div class="frame_prods">

<?php echo $produtos;?>  
<div class="frame_pagig">     
<?php $pagination->model("Produtos");
       echo $pagination->previous("Anterior");
	   echo " ".$pagination->next("Proximo"); 
?></div>
</div>

