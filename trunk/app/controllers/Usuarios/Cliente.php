<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Luan
 */
class Cliente extends Usuario {

    /** Armazena o endereco do cliente
     *
     * @var <Sring> $endereco
     */
    private $endereco;
    /** Armazena o telefone do cliente
     *
     * @var <String> $telefone
     */
    private $telefone;
    /** Armazena o cpf do cliente
     *
     * @var <String> $cpf
     */
    private $cpf;
    /** Armazena o email do cliente
     *
     * @var <String> $email
     */
    private $email;
    /** Armazena o codigo do cliente
     *
     * @var <String> $codigoCLiente
     */
    private $codigoCliente;
    /** Armazena a lista de vendas do cliente
     *
     * @var <array<Venda>> $listaDeVendas
     */
    private $listaDeVendas;

    /** Construtor - inicia as variaveis com os valores disponibilizados
     *
     * @param <String> $nome
     * @param <String> $login
     * @param <String> $senha
     * @param <boolean[]> $permissoes
     * @param <String> $endereco
     * @param <String> $telefone
     * @param <String> $cpf
     * @param <String> $email
     * @param <array<Venda>> $listaDeVendas
     * @param <String> $codigoCliente
     */
    public function __construct($nome, $login, $senha, $permissoes, $endereco, $telefone, $cpf, $email, $listaDeVendas, $codigoCliente) {
        parent::__construct($nome, $login, $senha, $permissoes);
        $this->listaDeVendas = array();
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->listaDeVendas = $listaDeVendas;
        $this->codigoCliente = $codigoCliente;
    }

    /** Retorna o endereco do cliente
     *
     * @return <String> $endereco
     */
    public function getEndereco() {
        return $this->endereco;
    }

    /** Define o novo endereco do cliente
     *
     * @param <String> $endereco - Endereço do cliente
     */
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    /** Retorna o telefone do cliente
     *
     * @return <String> $telefone
     */
    public function getTelefone() {
        return $this->telefone;
    }

    /** Define o novo telefone do cliente
     *
     * @param <String> $telefone - Telefone do cliente
     * @return void
     */
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    /** Retorna o email do cliente
     *
     * @return <String> $email
     */
    public function getEmail() {
        return $this->email;
    }

    /** Define o novo email do cliente
     *
     * @param <String> $email - email do cliente
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /** Verifica se o CPF do cliente é um CPF valido. Se for, retorna true
     *
     * @var <String> $cpf
     * @return <boolean> $validaCPF
     */
    public function validarCPF($cpf) {
        // Verifiva se o número digitado contém todos os digitos
        $cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);

        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
            return false;
        } else {   // Calcula os números para verificar se o CPF é verdadeiro
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }

                $d = ((10 * $d) % 11) % 10;

                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }

    /** Retorna o codigo do cliente
     *
     * @return <String> $codigoCliente
     */
    public function getCodigoCliente() {
        return $this->codigoCliente;
    }

    /** Define o novo codigo do cliente
     *
     * @param <String> $codigoCliente - Codigo referente ao cliente
     */
    public function setCodigoCliente($codigoCliente) {
        $this->codigoCliente = $codigoCliente;
    }

    /** Retorna a ArrayList de vendas do cliente
     *
     * @return <array<Venda>> $listaDeVendas
     */
    public function getVendas() {
        return $this->listaDeVendas;
    }

    /** Faz uma busca na array de vendas do cliente
     *
     * @param <String> $codigoVenda - Codigo referente a uma venda realizada pelo cliente
     * @return <Venda> $venda - retorna uma venda referente ao cliente com o codigo da venda passada como parametro
     */
    public function findVendas($codigoVenda) {
        
    }

    /** Adiciona uma venda a array de vendas do cliente
     *
     * @param <Venda> $venda - Nova venda a ser associada ao cliente
     */
    public function addVenda($venda) {
        
    }

    /** Deleta uma venda da ArrayList de vendas do cliente
     *
     * @param <Venda> $venda - venda a ser retirada da ArrayList de vendas do cliente
     * @return void
     */
    public function deleteVenda($venda) {
        
    }

    /** Retorna o CPF do cliente
     *
     * @return <String> $cpf
     */
    public function getCpfCliente() {
        return $this->cpf;
    }
}

?>
