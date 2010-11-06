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
    private $nome;
    private $login;
    private $senha;
    private $permissoes;

     /** Construtor - define o codigo do usuário
     *
     * @param <String> $nome
     * @param <String> $login
      * @param <String> $senha
      * @param <boolena[]> $permissoes
     */
    public function  __construct($nome, $login, $senha, $permissoes) {

    }

     /** Retorna o nome do usuario
     *
     * @return <String> $nome
     */
    public function getNome(){

    }

     /** Define o novo nome do usuario
     *
     * @param <String> $nome
     * @return void
     */
    public function setNome($nome){

    }

     /** Retorna o login do usuario
     *
     * @return <String> $login
     */
    public function getLogin(){

    }

     /** Define o novo login do usuario
     *
     * @param <String> $login
     * @return void
     */
    public function setLogin($login){

    }

     /** Retorna a senhan do usuario
     *
     * @return <String> $senha
     */
    public function getSenha(){

    }

     /** Define a nova senha do usuario
     *
     * @param <String> $senha
     * @return void
     */
    public function setLogin($senha){

    }

     /** Retorna as permissoes do usuario
     *
     * @return <boolena[]> $permissoes
     */
    public function getPermissoes(){

    }

     /** Define as novas permissoes do usuario
     *
     * @param <boolean[]> $permissoes
     * @return void
     */
    public function setLogin($permissoes){

    }

}
?>
