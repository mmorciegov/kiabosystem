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

    public function cadastraproduto() {
        if (!empty($this->data)) :
            $this->Produtos->save($this->data);
            $this->redirect("/produtos/imprimeprodutos");
        endif;
    }

    public function imprimeprodutos() {

        $this->set("produtos", $this->Produtos->all());
        
    }

    public function editaproduto(){
        $this->produtos->update($param,$this->data);
    }

    public function deleteproduto(){
        $this->produtos->delete($this->data);
    }



}

?>
