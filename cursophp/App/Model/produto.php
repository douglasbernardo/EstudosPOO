<?php

namespace App\Model;

class Produto{

    private $id;
    private $nome;
    private $descricao;

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function setDescricao($d){
        $this->descricao = $d;
    }
}