<?php

/* A propriedade abstract é como se fosse um modelo para as classes filhas, tudo que for abistract dentro da classe as filhas obrigatóriamente devem ter também */

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return "<hr> Saldo Atual: R$" . $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);

}


class Itau extends Banco{
    public function Sacar($s){
        $this->saldo -= $s;
        echo "<hr> Sacou: R$" . $s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: R$" . $d;
    }
}

$itau = new Itau;

$itau->setSaldo(1000);
echo $itau->getSaldo();

$itau->Sacar(250);
echo $itau->getSaldo();

$itau->Depositar(300);
echo $itau->getSaldo();


