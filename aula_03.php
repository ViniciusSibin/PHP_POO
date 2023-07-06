<?php
/*
* O metodo construct é executado ao dar um NEW em uma classe, ou seja, tudo que estiver dentro da classe __construct será executado ao instanciar a classe.   
*/

class Login{
    //Setando os atributos como private não é possível utiliza-los fora da classe
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    //O metodo get é utilizado para consultar valores de um atributo
    public function getEmail(){
        return $this->email;
    }

    //O método set é utilizado para setar valores de um atributo
    public function setEmail($e){
        if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
            echo "<br>Formato do e-mail incorreto!<br>";
        } else {
            $this->email = $e;
        }

    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" && $this->senha == "123456"){
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
    }
}

//Inserindo dados nos atributos da classe que estão privados através do construct
$logar = new Login("vinicius", "teste@teste.com", "123456");

$logar->Logar();

//Buscando os dados dos atributos da classe com o GET
echo "<br>" . $logar->getNome();
echo "<br>" . $logar->getEmail();
echo "<br>" . $logar->getSenha();
