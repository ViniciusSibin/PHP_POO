<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(2);
$produto->setnome('Notebook DATACOM');
$produto->setDescricao('i9, 32gb');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete($produto->getId());

foreach($produtoDao->read() as $produto){
    echo $produto['nome'] . "<br>" . $produto['descricao'] . "<hr>";
}