<?php
/*
* A vantagem de usar get e set é poder filtrar os dados que serão atribuídos aos atributos da classe.   
*/

class Login{
    //Setando os atributos como private não é possível utiliza-los fora da classe
    private $email;
    private $senha;

    //O metodo get é utilizado para consultar valores de um atributo
    public function getEmail(){
        return $this->email;
    }

    //O método set é utilizado para setar valores de um atributo
    public function setEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<br>Formato do e-mail incorreto!<br>";
        } else {
            $this->email = $email;
        }

    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" && $this->senha == "123456"){
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
    }
}

$logar = new Login();

//Inserindo dados nos atributos da classe que estão privados
$logar->setEmail("tes/te@tes*te.com");
$logar->setSenha("123456");

$logar->Logar();

//Buscando os dados dos atributos da classe com o GET
echo "<br>" . $logar->getEmail();
echo "<br>" . $logar->getSenha();
