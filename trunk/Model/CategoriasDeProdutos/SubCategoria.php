<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubCategoria
 *
 * @author Luan
 */

include '../Vendas/Produto.php';

class SubCategoria {
    /** Nome da subCategoria
     *
     * @var <String> $nome
     */
    private $nome;

    /** Array de produto associados a essa subcategoria
     *
     * @var <array<Produtos>> $subCategorias
     */
    private $listaDeProdutos;

     /** Construtor - define o codigo da SubCategoria
     *
     * @param <String> $nome
     * @param <ArrayList<Produto>> $listaDeProdutos
     */
    public function  __construct($nome, $listaDeProdutos) {
        $this->listaDeProdutos = array();

    }

     /** Retorna nome da SubCategoria
     *
     * @return <String> $nome
     */
    public function getNome(){

    }

     /** Define o novo nome da SubCategoria
     *
     * @param <String> $nome - Nome da SubCategoria
     * @return void
     */
    public function setNome($nome){

    }

     /** Retorna a ArrayList de produtos da SubCategoria
     *
     * @return <ArrayList<Produto>> $listaDeProdutos
     */
    public function getProdutos(){

    }

     /** Faz uma busca na ArrayList de produtos da SubCategoria
     *
     * @param <String> $nomeProduto - Nome referente a um produto da SubCategoria
     * @return <Produto> $produto - retorna um produto que possui o nome passado no parametro $nomeProduto
     */
    public function findProduto($nomeProduto){

    }

     /** Adiciona um Produto a ArrayList de produtos da SubCategoria
     *
     * @param <Produto> $produto - Novo produto a ser associada a SubCategoria
     * @return void
     */
    public function adicionarProduto($produto){

    }

     /** Deleta um Produto da ArrayList de produtos da SubCategoria
     *
     * @param <Produto> $produto - Produto a ser retirado da ArrayList de produtos da SubCategoria
     * @return void
     */
    public function deletarProduto($produto){

    }
}
?>
