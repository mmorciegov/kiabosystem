
<div class="frame_prods">
<table>
<?php echo $produtos;?>
</table> 
<div class="frame_pagig">
    
<?php $pagination->model("Produtos");
       echo $pagination->previous("Anterior");
	   echo " ".$pagination->next("Proximo"); 
?>

</div>
</div>

