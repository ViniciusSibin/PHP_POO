<?php

class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome . " de " . $this->idade . " anos falou 'Olá'.<br>";
    }

    public function Andar(){
        echo "Andou<br>";
    }
}

//Instanciar classe Pessoa
$vinicius = new Pessoa();
$gabriel = new Pessoa();

//Preenchendo os atributos da classe pessoa
$vinicius->nome = "Vinicius Sibin";
$vinicius->idade = 24;

//Preenchendo os atributos do gabriel
$gabriel->nome = "Gabriel Alves Barreto";
$gabriel->idade = 19;

//Utilizando o método da classe pessoa
$vinicius->Falar();

$gabriel->Falar();



var_dump($vinicius);
var_dump($gabriel);