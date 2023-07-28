<?php
/*
    clone*
    construct*
    invoke
    tostring
    get
    set
*/

// Definindo a classe Pessoa
class Pessoa {
    // Propriedade privada para armazenar os dados da pessoa
    private $dados;

    // Método mágico __set: é chamado sempre que se tenta atribuir um valor a uma propriedade inacessível
    public function __set($nome, $valor) {
        // Neste caso, o método __set é utilizado para atribuir valores ao array $dados
        // O parâmetro $nome representa o nome da propriedade que está sendo atribuída
        // O parâmetro $valor é o valor que será atribuído à propriedade
        // Aqui, estamos usando o array $dados para armazenar os valores das propriedades
        $this->dados[$nome] = $valor;
    }

    // Método mágico __get: é chamado sempre que se tenta acessar uma propriedade inacessível
    public function __get($nome) {
        // Neste caso, o método __get é utilizado para retornar os valores armazenados no array $dados
        // O parâmetro $nome representa o nome da propriedade que está sendo acessada
        // Aqui, estamos usando o array $dados para recuperar o valor da propriedade especificada por $nome
        // e, em seguida, retornamos esse valor
        return $this->dados[$nome];
    }

    // Método mágico __toString: é chamado quando você tenta imprimir o objeto como uma string
    public function __toString() {
        // Neste exemplo, o método __toString é implementado para retornar uma mensagem de texto
        // que será exibida quando você tentar imprimir um objeto da classe Pessoa.
        return "Tentei imprimir o objeto";
    }

    // Método mágico __invoke: é chamado quando você tenta usar o objeto como uma função
    public function __invoke(){
        // Neste exemplo, o método __invoke é implementado para retornar uma mensagem de texto
        // que será exibida quando você tentar chamar o objeto como se fosse uma função.
        return "Objeto como função";
    }
}



// Criando uma instância da classe Pessoa
$pessoa = new Pessoa();

// Utilizando o método mágico __set para atribuir valores às propriedades
$pessoa->nome = "João";
$pessoa->idade = 30;

// Utilizando o método mágico __get para acessar os valores das propriedades
echo "Nome: ".$pessoa->nome; // Saída: João
echo "<br>Idade: ".$pessoa->idade; // Saída: 30


/*
O método mágico __toString é invocado quando você tenta imprimir o objeto da classe como uma string. Por exemplo, quando você usa echo ou print com um objeto da classe Pessoa, o PHP tentará automaticamente chamar o método __toString.

Exemplo de uso:
*/
echo "<br>".$pessoa; // Saída: "Tentei imprimir o objeto"


/*
O método mágico __invoke é invocado quando você tenta chamar o objeto como se fosse uma função. Em outras palavras, permite que um objeto seja usado como se fosse uma função.

Exemplo de uso:
*/

$resultado = $pessoa(); // O PHP chama automaticamente o método __invoke do objeto
echo "<br>".$resultado."<hr>"; // Saída: "Objeto como função"


