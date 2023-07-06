<?php

/* Herança é um recurso que permite que classes compartilhem atributos e métodos afim de reaproveitar códigos ou comportamentos generalizados. */

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou.<br>";
    }

    public function Parar(){
        echo "Parou.<br>";
    }
}

class Carro extends Veiculo {
    public function ligarLimpador(){
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo {
    public function darGrau(){
        echo "Empinando em 321";
    }
}

$carro = new Carro();
$carro->modelo = "gol";
$carro->cor = "vermelho";
$carro->ano = 2005;

$carro->Andar();
$carro->ligarLimpador();

var_dump($carro);

$moto = new Moto();
$moto->modelo = "Titam";
$moto->cor = "Preto";
$moto->ano = 2001;

$moto->Parar();
$moto->darGrau();

var_dump($moto);