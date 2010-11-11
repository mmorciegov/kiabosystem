<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php


       
        
      //  include '../Model/CategoriasDeProdutos/Categoria.php';
      //  include '../Model/CategoriasDeProdutos/SubCategoria.php';
        include '../Model/Vendas/Produto.php';
        
         //criando 50 caregorias
       // $arrayDeCategorias = array();
        //$arrayDeSubCategorias = array();
        
        $listaDeProdutos = array(1 => 'nomeP1', 2 => 'nomeP2');
        
      //  for ($i = 0; $i < 50; $i++) {
          //  for ($j = 0; $j < 20; $j++){
             //   for ($y = 0; $y < 5; $y++){
            //        $newProduto = new Produto("132", "Produto".$y, 500, "categoria1");
            //        $listaDeProdutos[''.$y] = $newProduto;
                   
           //        echo $listaDeProdutos[''.$y].'<br>';
            //  }

        //        $newSubCategoria = new SubCategoria("subCategoria".$j, $listaDeProdutos);
             //   array_unshift($arrayDeSubCategorias,$newSubCategoria);
         //   }
         //   $newCategoria = new Categoria("Categoria".$i, $subCategorias);
         //   array_unshift($arrayDeCategorias, $newCategoria);*/
       // }

//mostrando tudo teste
       

        /*    //teste para o sistema de cep
          include '../Model/BancoDeCepDoBrasil/BuscaCEPOnline.php';
          $busca = new BuscaCEPOnline();
          $busca->busca_cep('44033060');
          $busca->imprime(); */
        ?>
    </body>
</html>
