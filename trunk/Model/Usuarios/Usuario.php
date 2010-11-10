<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Luan
 */
class Usuario {

    /** Armazena o nome do usuario
     *
     * @var <String> $nome
     */
    private $nome;
    /** Armazena o login do usuario
     *
     * @var <String> $login
     */
    private $login;
    /** Armazena a senha do usuario
     *
     * @var <String> senha
     */
    private $senha;
    /** Armazena as permissoes do usuario
     *
     * @var <array<boolean> $permissoes
     */
    private $permissoes;

    /** Construtor - define o codigo do usuário
     *
     * @param <String> $nome
     * @param <String> $login
     * @param <String> $senha
     * @param <array<booelan>> $permissoes
     */
    public function __construct($nome, $login, $senha, $permissoes) {
        $this->nome =  $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->permissoes = $permissoes;
    }

    /** Retorna o nome do usuario
     *
     * @return <String> $nome
     */
    public function getNome() {
        return $this->nome;
    }

    /** Define o novo nome do usuario
     *
     * @param <String> $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /** Retorna o login do usuario
     *
     * @return <String> $login
     */
    public function getLogin() {
        return $this->login;
        
    }

    /** Define o novo login do usuario
     *
     * @param <String> $login
     */
    public function setLogin($login) {
        $this->login = $login;
    }

    /** Retorna a senhan do usuario
     *
     * @return <String> $senha
     */
    public function getSenha() {
        return $this->senha;
    }

    /** Define a nova senha do usuario
     *
     * @param <String> $senha
     */
    public function setLogin($senha) {
        $this->senha = $senha;
    }

    /** Retorna as permissoes do usuario
     *
     * @return <array<boolean>> $permissoes
     */
    public function getPermissoes() {
        return $this->permissoes;
    }

    /** Define as novas permissoes do usuario
     *
     * @param <array<boolean>> $permissoes
     */
    public function setLogin($permissoes) {
        $this->permissoes = $permissoes;
    }
}

?>
