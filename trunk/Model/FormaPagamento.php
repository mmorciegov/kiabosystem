<?php
/*
 * Classe FormaPagamento - Responsavel por definir a forma de pagamento de \n
 * uma venda. Ela eh uma surper classe para tipos especificos de pagamentos.
 */

/**
 * Descrição da Classe FormaPagamento
 *
 * @author Rafael Tosta Santos <rafa.ecomp@gmail.com>
 * @date 01/11/2010
 * @version 1.0
 * @group UEFS - Engenharia da Computacao
 * @see Projeto de Graduação para a disciplina de Engenharia de Software 2010.2
 * @link Repositorio <http://kiabosystem.googlecode.com/svn/trunk/Model>
 * @ref Venda
 */


class FormaPagamento {
    private $codigo;


    /** Construtor
     *
     * @param <int> $codigo define o codigo da forma de pagamento
     */
    public function  __construct($codigo) {

    }

    /** Retorna o codigo do pagamento
     *
     * @return <int> $codigo
     */
    public function getCodigo(){

    }

    /** Define novo codigo de pagamento
     *
     * @param <int> $novoCodigo
     */
    public function setCodigo($novoCodigo){

    }

}
?>
