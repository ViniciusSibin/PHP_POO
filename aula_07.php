<?php


class Pessoa {
    const nome = "Vinicius"; //A palavra-chave const é usada para declarar uma variável cujo valor é fixo e não pode ser alterado posteriormente

    public function exibirNome (){
        echo self::nome; //Quando é utilizado o self coleta a informação da classe atual
    }
}

class Vinicius extends Pessoa {
    const nome = "Sibin";

    public function exibirNome (){
        echo parent::nome; // Quando é utilizado parent coleta a informação da classe pai
    }
}


$vinicius = new Vinicius();
$vinicius->exibirNome();