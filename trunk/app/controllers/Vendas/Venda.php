<?php

/*
 * Classe Venda - Responsavel por realizar as operacoes necessarias \n
 * para uma operacao de venda de produtos.
 */

/**
 * Descrição da Classe Venda
 *
 * @author Rafael Tosta Santos <rafa.ecomp@gmail.com>
 * @date 01/11/2010
 * @version 1.0
 * @group UEFS - Engenharia da Computacao
 * @see Projeto de Graduação para a disciplina de Engenharia de Software 2010.2
 * @link Repositorio <http://kiabosystem.googlecode.com/svn/trunk/app/controllers/Vendas>
 * @ref Venda
 */
class Venda {
    /** Atributos utilizado por essa classe */

    /** Armazena o codigo da venda
     *
     * @var <String> $codigoDeVenda
     */
    private $codigoDeVenda;
    /** Armazena o codigo do cliente
     *
     * @var <String> $codigoDeCliente
     */
    private $codigoDeCliente;
    /** Armazena um objeto do tipo Cartao ou Boleto
     *
     * @var <?> $pagamento
     */
    private $pagamento;
    /** Armazena a data da compra
     *
     * @var <String> $dataCompra
     */
    private $dataCompra;
    /** Armazena o valor da compra
     *
     * @var <float> $valor
     */
    private $valor;
    /** Armazena a quantidade de parcelas
     *
     * @var <int> $quantidadeDeParcelas
     */
    private $quantidadeDeParcelas;
    /** Armazena uma lista de produtos
     *
     * @param <Produto> $listaDeProdutos
     */
    private $listaDeProdutos;
    /** Informa se a venda foi paga ou nao. Se true foi pagam caso contrario ainda nao foi paga
     *
     * @var <boolean> $vendaPaga 
     */
    private $vendaPaga;

    /** Contrutor - inicia a varavel $produtos com um array
     */
    public function __construct($listaDeProdutos) {
        $this->listaDeProdutos = array();
    }

    /** Informa se a venda esta paga ou nao
     *
     * @return <boolean> $estado
     */
    public function getSituacaoVenda() {
        $this->vendaPaga;
    }

    /** Define a situacao da venda
     *
     * @param <boolean> $estado
     */
    public function setSituacaoVenda($estado) {
        $this->vendaPaga = $estado;
    }

    /** Retorna o codigo da venda
     *
     * @return <String> $codigoDeVenda retorna uma string com o codigo da venda
     */
    public function getCodigoVenda() {
        return $this->codigoDeVenda;
    }

    /** Retorna o codigo do cliente
     *
     * @return <String> $codigoDoCliente retorna uma string com o codigo do cliente
     */
    public function getCodigoCliente() {
        return $this->codigoDeCliente;
    }

    /** Retorna a lista de produtos do cliente
     *
     * @return <Array<Produtos>> $listaDeProdutos retorna um Array com todos os produtos da venda
     */
    public function getProdutos() {
        return $this->listaDeProdutos;
    }

    /** Adiciona novo produto na lista de produtos do cliente
     *
     * @param <Produto> $novoProduto novo produto a ser incerido na lista de produtos
     */
    public function addProduto($novoProduto) {
        // adiciona novo produto na lista de produtos
        $this->listaDeProdutos = array_unshift($novoProduto);
    }

    /** Busca um produto pelo codigo do produto
     *
     * @param <int> $codigoDoProduto codigo do produto a ser pesquisado
     * @return <Produto> $produto retorna o produto caso encontrado
     */
    public function findProduto($codigoDoProduto) {
        
    }

    /** Retorna a quantidades de parcelas da venda
     *
     * @return <int> $quantParcelas retorna um int que informa a quantidade de parcelas
     */
    public function getQuantParcelas() {
        return $this->quantidadeDeParcelas;
    }

    /** Define nova quantidade de parcela da venda
     *
     * @param <int> $novaQuantParcela
     */
    public function setQuantParcelas($novaQuantParcela) {
        $this->quantidadeDeParcelas = $novaQuantParcela;
    }

    /** Define novo pagamento
     *
     * @param <Cartao> $cartao
     */
    public function setPagamento($cartao) {
        $this->pagamento = $cartao;
    }

    /** Define novo pagamento
     *
     * @param <Boleto> $boleto
     */
    public function setPagamento($boleto) {
        $this->pagamento = $boleto;
    }

}

?>
