<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of carrinho
 *
 * @author Rafael
 */
class Carrinho extends AppModel {
    public $table = "carrinho" ;
   
    public $belongsTo = array("produtos");

    public function getTotalPrice($uid=null) {

        //busca o carrinho pelo id do usuario
        $cart = $this->all(array("uid" => $uid));

        // recupera o preco dos produtos do carrinho buscado
        $prices = array();
        foreach ($cart as $item):
            $prices[] = $item['produtos']['preco'];
        endforeach;

        return array_sum($prices); //soma os preços e retorna
    }

}

?>
