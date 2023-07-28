<?php
//Composição
//Na composição, uma classe cria e instancia de outra classe dentro de si própria, sendo assim, quando ela for destruida, a outra classe também será

class Pessoa{
    public function atribuiNome($nome){
        return "O nome da pessoa é ".$nome;
    }
}

Class Exibe {
    public $pessoa;
    public $nome;

    public function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}


$exibe = new Exibe("Vinicius");
$exibe->exibeNome();