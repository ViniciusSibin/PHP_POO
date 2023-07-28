<?php
//Agregação
//Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza outra como parte de si própria.

Class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor){ //Ao instanciar a classe Produtos, deve-se passar o nome e o valor do produto
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

Class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto){//A função adiciona vai receber a instancia do produto
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->nome . "<br>";
            echo $produto->valor . "<hr>";
        }
    }
}

//Criando os produtos
$produto1 = new Produtos("Notebook", "2500");
$produto2 = new Produtos("Iphone 4 128Gb", "3900");

//Adicionando os produtos ao carrinho de compras
$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);



//Corrigindo o valor do produto2
$produto2->nome = "Iphone 14 128Gb";
$produto2->valor = "3900";


//Exibindo os produtos que estão no carrinho de compras
$carrinho->exibe();