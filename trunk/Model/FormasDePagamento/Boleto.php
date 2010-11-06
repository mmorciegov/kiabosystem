<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Boleto
 *
 * @author Rafael
 */
class Boleto extends FormaPagamento {
    private $nomeDoCliente;
    private $data;
    private $vencimento;


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
