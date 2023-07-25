<?php

/**
 * Os namespaces são utilizados para ter certeza da classe que está sendo utilizado, caso tenha mais de uma classe/arquivo com o mesmo nome.
 */

 require 'classes/produto.php';
 require 'models/produto.php';

 $produto = new \classes\Produto(); //este é um dos jeitos de específicar o namespace, na declaração do objeto
 $produto->mostrarDetalhes();

 echo "<br>";

 use models\Produto as productModels; // O jeito mais comum de se usar namespaces, deste modo pode-se atribuir apelido
 $produto = new productModels();
 $produto->mostrarDetalhes();