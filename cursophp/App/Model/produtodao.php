
<?php

namespace App\Model;

class produtodao{

    public function create(produto $p){

        $sql = "INSERT INTO produtos ($id,$nome,$descricao) values (?,?,?)";

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

        $stmt->execute();
    }
    public function read(){

    }
    public function update(produto $p){

    }
    public function delete($id){

    }
}