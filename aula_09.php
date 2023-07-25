<?php
/**
 * Polimorfismo basicamente é, modificar ou substituir um método herdado.
 */

 class Animal{
    public function Andar(){
        echo "O animal andou.";
    }

    public function Correr(){
        echo "O animal correu.";
    }
 }

 class Cavalo extends Animal {
    public function Andar(){
        echo "O cavalo andou.";
    }

    public function Parar(){
        $this->Correr();
    }
 }

 $animal = new Cavalo();
 $animal->Parar();