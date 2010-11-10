'<?php
/*
 * Classe Cartao - Responsavel por definir pagamentos realizados por Cartao.
 * Ela eh uma subclasse de FormaPagamento.
 */

/**
 * Descrição da Classe Cartao
 *
 * @author Luan ... < email de luan >
 * @date 01/11/2010
 * @version 1.0
 * @group UEFS - Engenharia da Computacao
 * @see Projeto de Graduação para a disciplina de Engenharia de Software 2010.2
 * @link Repositorio <http://kiabosystem.googlecode.com/svn/trunk/app/controllers/FormasDePagamento>
 * @ref Cartao
 */
include 'FormaPagamento.php';

class Cartao extends FormaDePagamento {

    /** Nome do titular do cartao
     *
     * @var <String> $nomeTitular
     */
    private $nomeTitular;
    /** Data de validade do cartao
     *
     * @var <String> $validade
     */
    private $validade;
    /** Numero do cartao
     *
     * @var <String> $numeroDoCartao
     */
    private $numeroDoCartao;
    /** Digito verificador do cartao
     *
     * @var <String> $digitoVerificador
     */
    private $digitoVerificador;
    /** CPF do titular do cartao
     *
     * @var <String> $cpfTitular
     */
    private $cpfTitular;
    /** Telefone do titular do cartao
     *
     * @var <String> $telefoneTitular
     */
    private $telefoneTitular;
    /** Senha do cartao
     *
     * @var <String> $senhaDoCartao
     */
    private $senhaDoCartao;

    /** Construtor - inicia as variaveis com os valores disponibilizados
     *
     * @param <int> $codigo
     * @param <String> $nomeTitular
     * @param <String> $validade
     * @param <String> $numeroDoCartao
     * @param <String> $digitoVerificador
     * @param <String> $cpfTitular
     * @param <String> $telefoneTitular
     * @param <String> $senhaDoCartao
     */
    public function __construct($codigo, $nomeTitular, $validade, $numeroDoCartao, $digitoVerificador, $cpfTitular, $telefoneTitular, $senhaDoCartao) {
        parent::__construct($codigo);
    }

    /** Retorna o nome do titular do cartao
     *
     * @return <String> $nomeTitular
     */
    public function getNomeTitular() {
        
    }

    /** Define o novo nome do titular do cartao
     *
     * @param <String> $nomeTitular - Nome do titular do cartao
     * @return void
     */
    public function setNomeTitular($nomeTitular) {
        
    }

    /** Retorna a validade do cartao
     *
     * @return <String> $validade
     */
    public function getValidade() {
        
    }

    /** Define a nova validade do cartao
     *
     * @param <String> $validade - validade do cartao
     * @return void
     */
    public function setValidade($validade) {
        
    }

    /** Retorna o numero do cartao
     *
     * @return <String> $numeroDoCartao
     */
    public function getNumero() {
        
    }

    /** Define a nova validade do cartao
     *
     * @param <String> $numeroDoCartao - numero do cartao
     * @return void
     */
    public function setNumero($numeroDoCartao) {
        
    }

    /** Retorna o digito verificador do cartao
     *
     * @return <String> $digitoVerificador
     */
    public function getDigitoVerificador() {
        
    }

    /** Define o novo digito verificador do cartao
     *
     * @param <String> $digitoVerificador - digito verificador do cartao
     * @return void
     */
    public function setDigitoVerificador($digitoVerificador) {
        
    }

    /** Retorna o telefone do titular do cartao
     *
     * @return <String> $telefoneTitular
     */
    public function getTelefoneTitular() {
        
    }

    /** Define o novo telefone do titular do cartao
     *
     * @param <String> $telefoneTitular - Telefone do titular do cartao
     * @return void
     */
    public function setTelefoneTitular($telefoneTitular) {
        
    }

    /** Retorna a senha do cartao
     *
     * @return <String> $senhaDoCartao
     */
    public function getSenha() {
        
    }

    /** Define a nova senha do cartao
     *
     * @param <String> $senhaDoCartao - senha do cartao
     * @return void
     */
    public function setSenha($senhaDoCartao) {
        
    }

    /** Verifica se o CPF do titular do cartao é um CPF valido. Se for, retorna true
     *
     * @return <boolean>
     */
    public function verificarCPF() {
        
    }

    /** Retorna o CPF do titular do cartao
     *
     * @return <String> $cpfTitular
     */
    public function getCpfTitular() {

    }

}
?>
