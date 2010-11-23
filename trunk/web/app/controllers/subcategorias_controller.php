<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subcategorias_controller
 *
 * @author Rafael
 */
class SubcategoriasController extends AppController {

    public function novasubcategoria() {
        if (!empty($this->subcateroria->data)) :
            $this->subcateroria->save($this->data);
        endif;
    }

    public function imprimesubcategorias() {
        $this->set("subcategorias", $this->subcategorias->all());
    }

}

?>
