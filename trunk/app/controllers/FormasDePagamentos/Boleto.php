<?php
/*
 * Classe Boleto - Responsavel por definir pagamentos realizados por boletos bancarios.
 * Ela eh uma subclasse de FormaPagamento.
 */

/**
 * Descrição da Classe Boleto
 *
 * @author Rafael Tosta Santos <rafa.ecomp@gmail.com>
 * @date 01/11/2010
 * @version 1.0
 * @group UEFS - Engenharia da Computacao
 * @see Projeto de Graduação para a disciplina de Engenharia de Software 2010.2
 * @link Repositorio <http://kiabosystem.googlecode.com/svn/trunk/app/controllers/FormasDePagamento>
 * @ref Boleto
 */
class Boleto extends FormaPagamento {
    private $nomeDoCliente; /// Variavel que armazena o nome do cliente
    private $data; /// Variavel que armazena a data da compra
    private $vencimento; /// Variavel que armazena o vencimento de vencimento do boleto


    /** Construtor - inicia as variaveis com os valores disponibilizados
     *
     * @param <int> $codigo
     * @param <String> $nomeDoCliente
     * @param <String> $data
     * @param <String> $vencimento
     */
    public function   __construct($codigo, $nomeDoCliente, $data, $vencimento) {
        parent::__construct($codigo);
    }

    /** Retorna o nome do cliente
     *
     * @return <String> $nomeDoCliente
     */
    public function getNome() {

    }

    /** Define novo nome do cliente
     *
     * @param <String> $novoNome
     */
    public function setNome($novoNome) {

    }

    /** Retorna a data do pagamento
     *
     * @return <String> $data
     */
    public function getData() {

    }

    /** Define nova data de pagamento
     *
     * @param <String> $novaData
     */
    public function setData($novaData) {

    }

    /** Retorna o vencimento do pagamento
     *
     * @return <String> $vencimento
     */
    public function getVencimento() {

    }

    /** Define novo vencimento do pagamento
     *
     * @param <String> $novoVencimento
     */
    public function setVencimento($novoVencimento) {

    }


}
?>
