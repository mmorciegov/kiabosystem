<div class="CADASTRO"><br><br><h1>CARRINHO!! </h1>


<br><h2><?php pr("Itens inseridos no carrinho:"); ?> </h2><br><br><br><br><br><br>

<h3><p><?php
//pr($nomesP);
foreach ($nomesP as $pro){
    echo "Produto: " . $pro["nome"]; ?> <?php echo "--> Quantidade: " . $QuantidadeP ?> <br>
<?php }

//print_r($carrinho);


?> </h3>


</div>



