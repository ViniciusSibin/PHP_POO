<?php

/*
    public - Fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public são acessíveis por todos que quiserem acessá-los.

    protected - Visibilidade protected faz com que todos os herdeiros vejam as propriedades e métodos protegidos como se fossem públicos.

    private - Ao contrário do public, esse modificador faz com que qualquer método ou propriedade  seja visível somente pela classe que a declarou.
*/

class Veiculo{
    protected $modelo;
    protected $cor;
    protected $ano;

    protected function Andar(){
        echo "Andou.<br>";
    }

    protected function Parar(){
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