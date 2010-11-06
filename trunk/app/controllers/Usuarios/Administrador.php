<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author Luan
 */
class Administrador extends Usuario {
    private $codigoAdministrador;

     /** Construtor - inicia as variaveis com os valores disponibilizados
     *
     * @param <String> $nome
     * @param <String> $login
     * @param <String> $senha
     * @param <boolean[]> $permissoes
     * @param <String> $codigoAdministrador
     */
    public function   __construct($nome, $login, $senha, $permissoes, $codigoAdministrador) {
        parent::__construct($nome, $login, $senha, $permissoes);
    }


     /** Retorna o código do Administrador
     *
     * @return <String> $codigoAdministrador
     */
    public function getCodigoAdministrador(){

    }

     /** Define o novo codigo do Administrador
     *
     * @param <String> $codigoAdministrador - Codigo associado ao administrador
     * @return void
     */
    public function setCodigoAdministrador($codigoAdministrador){

    }
}
?>
