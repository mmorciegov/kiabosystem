<div class="CADASTRO"><br><br><h1>CARRINHO!! </h1>
    
    <?php pr("Itens inseridos no carrinho:"); ?>

    <table align='center' border="1">
    <tr>
    <td  align='center'>Nome:</td><td  align='center'>Quantidade:</td>
    </tr>
    <?php foreach ($nomesP as $pro){ ?>
    <tr>

            <?php echo "<td  align='center'>" . $pro["nome"]."</td ><td  align='center'></td>"; ?> <?php echo "<td  align='center'>" . $pro["quantidade"]."</td>" ?>

    </tr>
    <?php }?>
    </table>


    <br><br>

    <?php

    foreach ($valorFinal as $valor){
        echo "Preco total da compra: " . $valor["SOMA"];
    }

    ?>

    <br><br><?php echo $link; ?>

</div>



