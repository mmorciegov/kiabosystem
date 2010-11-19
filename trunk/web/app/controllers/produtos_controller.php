<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of produtos_controller
 *
 * @author Rafael
 */
class ProdutosController extends AppController {

    function cadastraProduto() {
        if (!empty($this->data)) :
            $this->Produtos->save($this->data);
            $this->redirect("/produtos/novoProduto");
        endif;
    }

    function imprimeProdutos() {

        $this->set("produtos", $this->Users->all());
        
    }

}

?>
