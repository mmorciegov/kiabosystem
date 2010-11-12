<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioModel
 *
 * @author Rafael
 */
include 'app_model.php';
include 'Usuarios/Usuario.php';

class UsuarioModel extends app_model {

    /** Essa variavel armazena nome da tabela do banco de dados
     *  associada a esse modelo.
     *
     * @var <String> $table
     */
    public $table = "usuarios";

    public function salvaDados(Usuario $usuario) {
        
    }

}

?>
