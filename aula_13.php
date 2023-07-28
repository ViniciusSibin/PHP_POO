<?php
/*
    Exceções.
    Ocorrencia anormal que afeta o funcionamento da aplicação
    Exception é a classe base para todas as Exceptions
    message, code, file, line.
 */

class Newletter {
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este e-mail é invalido", 1);
        } else {
            echo "Email cadastrado com sucesso";
        }
    }
}


$newletter = new Newletter();

try{
    $newletter->cadastrarEmail("vinisibim@");
} catch(Exception $e){
    echo "Mensagem: " . $e->getMessage() . "<br>";
    echo "Código: " . $e->getcode() . "<br>";
    echo "Linha: " . $e->getline() . "<br>";
    echo "Arquivo: " . $e->getfile() . "<br>";
}