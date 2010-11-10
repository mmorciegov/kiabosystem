<?php

/**
 * Função de busca de Endereço pelo CEP
 * - Desenvolvido Felipe Olivaes para ajaxbox.com.br
 * - Utilizando WebService de CEP da republicavirtual.com.br
 *
 * Adaptada por Rafael Tosta, sendo resposavel por transformar essa funcao
 * para orientacao a objetos
 * 
 */
class BuscaCEPOnline {

    private $cidade;
    private $uf;
    private $tipoLogradouro;
    private $logradouro;
    private $bairro;

    public function busca_cep($cep) {

        
        $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep=' . urlencode($cep) . '&formato=query_string');

        if (!$resultado) {

            $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";
        }

        parse_str($resultado, $retorno);

        $this->salvaInformacao($retorno);
    }

    private function salvaInformacao($retorno) {

        $this->cidade = $retorno['cidade'];
        $this->uf = $retorno['uf'];

        switch ($retorno['resultado']) {

            case '1':

                $this->tipoLogradouro = $retorno['tipo_logradouro'];
                $this->logradouro = $retorno['logradouro'];
                $this->bairro = $retorno['bairro'];

                break;

            default: //caso o retorno é 0

                $texto = "Fala ao buscar cep!";

                break;
        }

    }

    public function imprime(){
         echo 'Bairro: '.$this->bairro . ' ,Cidade: '.$this->cidade;
    }

}
?>
