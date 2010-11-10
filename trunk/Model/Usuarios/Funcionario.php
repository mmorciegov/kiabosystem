<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Luan
 */
class Funcionario extends Usuario {
    private $codigoFuncionario;

     /** Construtor - inicia as variaveis com os valores disponibilizados
     *
     * @param <String> $nome
     * @param <String> $login
     * @param <String> $senha
     * @param <boolean[]> $permissoes
     * @param <String> $codigoFuncionario
     */
    public function   __construct($nome, $login, $senha, $permissoes, $codigoFuncionario) {
        parent::__construct($nome, $login, $senha, $permissoes);
    }
    

     /** Retorna o código do funcionario
     *
     * @return <String> $codigoFuncionario
     */
    public function getCodigoFuncionario(){

    }

     /** Define o novo codigo do funcionario
     *
     * @param <String> $codigoFuncionario - Codigo associado ao funcionario
     * @return void
     */
    public function setCodigoFuncionario($codigoFuncionario){

    }
}
?>
