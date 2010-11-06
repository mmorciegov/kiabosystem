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
 * @link Repositorio <http://kiabosystem.googlecode.com/svn/trunk/Model>
 * @ref Venda
 */
class Venda {
    private $codigoDeVenda;
    private $codigoDeCliente;
    private $listaDeProdutos;
    private $pagamentoCartao;
    private $pagamentoBoleto;
    private $dataCompra;
    private $valor;
    private $quantidadeDeParcelas;

    /** Contrutor - inicia a varavel $produtos com um array
     */
    public function  __construct() {
        $this->listaDeProdutos = array();
    }

    /** Cadastra uma venda de um determinado cliente
     *
     * @param <String> $cliente $cliente identifica o cliente que esta realizando a venda\n
     * @param <Array<Produtos>> $produtos $produtos definido pelo tipo array que contem os produtos do cliente
     * @param <int> $pagamento $pagamento define o tipo de pagamento
     * @param <int> $parcelas $parcelas eh do tipo int e define a quantidades de parcelas
     */
    public function cadastrarVenda($cliente, $produtos, $pagamento, $parcelas){


    }

    /** Retorna o codigo da venda
     *
     * @return <String> $codigoDeVenda retorna uma string com o codigo da venda
     */
    public function getCodigoVenda(){

    }

    /** Retorna o codigo do cliente
     *
     * @return <String> $codigoDoCliente retorna uma string com o codigo do cliente
     */
    public function getCodigoCliente(){

    }

    /** Retorna a lista de produtos do cliente
     *
     * @return <Array<Produtos>> $listaDeProdutos retorna um Array com todos os produtos da venda
     */
    public function getProdutos(){

    }

    /** Adiciona novo produto na lista de produtos do cliente
     *
     * @param <Produto> $novoProduto novo produto a ser incerido na lista de produtos
     */
    public function addProduto($novoProduto){

    }

    /** Busca um produto pelo codigo do produto
     *
     * @param <int> $codigoDoProduto codigo do produto a ser pesquisado
     * @return <Produto> $produto retorna o produto caso encontrado
     */
    public function findProduto($codigoDoProduto){

    }

    /** Retorna a quantidades de parcelas da venda
     *
     * @return <int> $quantParcelas retorna um int que informa a quantidade de parcelas
     */
    public function getQuantParcelas(){

    }

    /** Define nova quantidade de parcela da venda
     *
     * @param <int> $novaQuantParcela
     */
    public function setQuantParcelas($novaQuantParcela){

    }


    /** Retorna o pagamento do cartao
     *
     * @return <Cartao> $cartao
     */
    public function getPagamentoCartao(){

    }

    /** Define novo pagamento
     *
     * @param <Cartao> $cartao
     */
    public function setPagamentoCartao($cartao){

    }


    /** Retorna o pagamento do boleto
     *
     * @return <Boleto> $boleto
     */
    public function getPagamentoBoleto(){

    }

    /** Define novo pagamento
     *
     * @param <Boleto> $boleto
     */
    public function setPagamentoBoleto($boleto){

    }

}
?>
