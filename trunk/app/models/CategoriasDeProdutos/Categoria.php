<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author Luan
 */

include 'SubCategoria.php';

class Categoria {
    /** Nome da categoria
     *
     * @var <String> $nome
     */
    private $nome;

    /** Array de subcategorias associados a essa categora
     *
     * @var <array<subCategoria>> $subCategorias
     */
    private $subCategorias;

     /** Construtor - define o codigo da categoria
     *
     * @param <String> $nome
     * @param <ArrayList<SubCategoria>> $subCategorias
     */
    public function  __construct($nome, $subCategorias) {
        $this->subCategorias = array();

    }

     /** Retorna nome da categoria
     *
     * @return <String> $nome
     */
    public function getNome(){

    }

     /** Define o novo nome da categoria
     *
     * @param <String> $nome - Nome da Categoria
     * @return void
     */
    public function setNome($nome){

    }

     /** Retorna a ArrayList de subCategorias da categoria
     *
     * @return <ArrayList<SubCategorias>> $subCategorias
     */
    public function getSubCategorias(){

    }

     /** Faz uma busca na ArrayList de subCategorias da categoria
     *
     * @param <String> $nomeSubCategoria - Nome referente a uma SubCaegoria da Categoria
     * @return <SubCategoria> $subCategoria - retorna uma subcategoria que possui o nome passado no parametro $nomeSubCategoria
     */
    public function findVendas($nomeSubCategoria){

    }

     /** Adiciona uma SubCategoria a ArrayList de subcategorias da categoria
     *
     * @param <SubCategoria> $subCategoria - Nova SubCategoria a ser associada a Categoria
     * @return void
     */
    public function adicionarSubcategoria($SubCategoria){

    }

     /** Deleta uma SubCategoria da ArrayList de subcategorias da categoria
     *
     * @param <String> $SubCategoria - SubCategoria a ser retirada da ArrayList de subcategorias da categoria
     * @return void
     */
    public function deletarSubCategoria($SubCategoria){

    }
}
?>
