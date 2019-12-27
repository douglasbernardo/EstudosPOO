<?php 


class Login {

    public static $user;

    public static function verificalogin(){
        echo "O Usuario ".self::$user ." esta logado com sucesso";
    }
}

/* Quando trabalhamos com metodos estaticos 
não precisamos instanciar a classe 
*/

//para atribuir algum valor
Login::$user = "Douglas";


Login::verificalogin();
