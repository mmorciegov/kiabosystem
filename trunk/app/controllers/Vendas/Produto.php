<?php
/*
 * Classe Produto - Responsavel por armazenar as informacoes de produtos.
 */

/**
 * Descrição da Classe Produto
 *
 * @author Luan <...@gmail.com>
 * @date 09/11/2010
 * @version 1.0
 * @group UEFS - Engenharia da Computacao
 * @see Projeto de Graduação para a disciplina de Engenharia de Software 2010.2
 * @link Repositorio <http://kiabosystem.googlecode.com/svn/trunk/app/controllers/Vendas>
 * @ref Produto
 */

class Produto {

    /** Armazena o codigo do produto
     *
     * @var <String> $codigo
     */
    private $codigo;
    /** Armazena o nome do produto
     *
     * @var <String> $nome
     */
    private $nome;
    /** Armazena o valor do produto
     *
     * @var <float> $valor
     */
    private $valor;
    /** Armazena a categoria do produto
     *
     * @var <Categoria> $categoria
     */
    private $categoria;

    /** Construtor - define o codigo do produto
     *
     * @param <String> $codigo
     * @param <String> $nome
     * @param <float> $valor
     * @param <Categoria> $categoria
     */
    public function __construct($codigo, $nome, $valor, $categoria) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->categoria = $categoria;
    }

    /** Retorna o codigo do produto
     *
     * @return <String> $codigo
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /** Define o novo codigo do produto
     *
     * @param <String> $codigo - Codigo do produto
     * @return void
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    /** Retorna o nome do produto
     *
     * @return <String> $nome
     */
    public function getNome() {
        return $this->nome;
    }

    /** Define o novo nome do produto
     *
     * @param <String> $nome - nome do produto
     * @return void
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /** Retorna o valor do produto
     *
     * @return <float> $valor
     */
    public function getValor() {
        return $this->valor;
    }

    /** Define o novo valor do produto
     *
     * @param <float> $valor - valor do produto
     * @return void
     */
    public function setValor($valor) {
        $this->valor = $valor;
    }

    /** Retorna a categoria referente ao produto
     *
     * @return <Categoria> $categoria
     */
    public function getCategoria() {
        return $this->categoria;
    }

    /** Define a nova categoria referente ao produto
     *
     * @param <Categoria> $categoria - categoria referente ao produto
     * @return void
     */
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

}

?>
