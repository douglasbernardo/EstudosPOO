<?php 

namespace App\Model;

class Conexao{

     private static $instance;

    public function getConn(){
        if(!isset(self::$instance)){
            $this->instance = New \PDO('mysqli:host=localhost;dbname=pdo;charset=utf8','root','');
        }else{
            return self::$instance;
        }
    }
}