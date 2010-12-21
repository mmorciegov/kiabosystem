<?php echo $menu;?>

<div class="frame_prods">

<div class="frame_prods_in">
<table>
	<?php echo $produtos;?>
</table> 
</div>
</div>

<div class="frame_pagig">   
<?php $pagination->model("Produtos");
       echo $pagination->previous("Anterior");
	   echo " ".$pagination->next("Proximo"); 
?>
</div>

