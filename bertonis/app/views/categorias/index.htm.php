<?php echo $menu;?>

  <div class="frame_prods">
	<div class='frame_prods_in'>
    
    <?php foreach($products as $product): ?>
    
	<a href=/bertonis/produtos/exibeProduto/$product[cod]>
		<?php echo $html->image($product["foto"]);?><div class="frame_texto_prod"><?php echo $product["nome"];?></div>
    </a>
    <?php endforeach ?>
    </div>
    </div>

<div class="frame_pagig">   
<?php $pagination->model("Produtos");
       echo $pagination->previous("Anterior");
	   echo " ".$pagination->next("Proximo"); 
?>
</div>

