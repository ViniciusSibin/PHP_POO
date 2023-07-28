<?php

//Associação
//Acontece quanto um objeto "utiliza" outro, porém, sem que eles dependam um od outro.

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Vinicius Sibin";
$cliente->endereco = "Rua americo brasiliense, 973";

$pedido = new Pedido();
$pedido->numero = 1;
$pedido->cliente = $cliente;

$dados = array(
    'pedido' =>$pedido->numero,
    'cliente' => $pedido->cliente->nome,
    'endereço' => $pedido->cliente->endereco
);

var_dump($dados);
