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
    private $endereco;
    private $telefone;
    private $cpf;
    private $email;
    private $codigoCliente;
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
      * @param <ArrayList<Venda>> $listaDeVendas
     * @param <String> $codigoCliente
     */
    public function   __construct($nome, $login, $senha, $permissoes, $endereco, $telefone, $cpf, $email, $listaDeVendas, $codigoCliente) {
        parent::__construct($nome, $login, $senha, $permissoes);
        $this->listaDeVendas = array();
    }

      /** Retorna o endereco do cliente
     *
     * @return <String> $endereco
     */
    public function getEndereco(){

    }

     /** Define o novo endereco do cliente
     *
     * @param <String> $endereco - Endereço do cliente
     * @return void
     */
    public function setEndereco($endereco){

    }

     /** Retorna o telefone do cliente
     *
     * @return <String> $telefone
     */
    public function getTelefone(){

    }

     /** Define o novo telefone do cliente
     *
     * @param <String> $telefone - Telefone do cliente
     * @return void
     */
    public function setTelefone($telefone){

    }

     /** Retorna o email do cliente
     *
     * @return <String> $email
     */
    public function getEmail(){

    }

     /** Define o novo email do cliente
     *
     * @param <String> $email - email do cliente
     * @return void
     */
    public function setEmail($email){

    }

     /** Verifica se o CPF do cliente é um CPF valido. Se for, retorna true
     *
     * @return <boolean>
     */
    public function verificarCPF(){

    }

     /** Retorna o codigo do cliente
     *
     * @return <String> $codigoCliente
     */
    public function getCodigoCliente(){

    }

     /** Define o novo codigo do cliente
     *
     * @param <String> $codigoCliente - Codigo referente ao cliente
     * @return void
     */
    public function setCodigoCliente($codigoCliente){

    }

     /** Retorna a ArrayList de vendas do cliente
     *
     * @return <ArrayList<Venda>> $listaDeVendas
     */
    public function getVendas(){

    }

     /** Faz uma busca na ArrayList de vendas do cliente
     *
     * @param <String> $codigoVenda - Codigo referente a uma venda realizada pelo cliente
     * @return <Venda> $venda - retorna uma venda referente ao cliente com o codigo da venda passada como parametro
     */
    public function findVendas($codigoVenda){

    }

     /** Adiciona uma venda a ArrayList de vendas do cliente
     *
     * @param <Venda> $venda - Nova venda a ser associada ao cliente
     * @return void
     */
    public function addVenda($venda){

    }

     /** Deleta uma venda da ArrayList de vendas do cliente
     *
     * @param <Venda> $venda - venda a ser retirada da ArrayList de vendas do cliente
     * @return void
     */
    public function deleteVenda($venda){

    }

     /** Retorna o CPF do cliente
     *
     * @return <String> $cpf
     */
    public function getCpfCliente(){

    }

}
?>
