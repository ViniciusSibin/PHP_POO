<?php

class Login {
    public static $user;
    public static $pass;

    public static function verificaLogin(){
        echo "O usuário " . self::$user . " está logou com a senha " . self::$pass . "!"; // Quando a função é estatica deve-se utilizar o self para utilizar variáveis;
    }

    public function logout(){
        echo "<br>O usuário deslogou do sistema";
    }

}
/* Quando a função ou atributo é estático não é necessário instanciar a classe */
Login::$user = "vinicius";
Login::$pass = "123456";
Login::verificaLogin();


/* Caso tenha uma função que não é estática é necessário instanciar a classe */
$login = new Login();

$login->logout();