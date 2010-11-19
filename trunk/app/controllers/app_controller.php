<?php
/**
 *  AppController é o controller usado como base para todos os outros controllers
 *  da aplicação. Estando na biblioteca, é utilizado somente quando não há outro
 *  AppController definido pelo usuário.
 *
 *  @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 *  @copyright Copyright 2008-2009, Spaghetti* Framework (http://spaghettiphp.org/)
 *
 */

class AppController extends Controller {

      public $components = array("Auth");   //variavel de instancia (carregar um componente) -- componente ja esta sendo carregado

      public function beforeFilter(){ //sempre vai ser chamado e executado em todos os controllers , antes da execu��o da action

             $this->AuthComponent->deny("/users"); //negar os recursos da aplica��o que se quer proibir o acesso (exigir login) * -> bloqueia tudo
             $this->AuthComponent->allow();  //inverso do deny
             $this->AuthComponent->check();

      }

}

?>
