<?php
 

 interface Crud{
     public function create();
     public function read();
     public function update();
     public function delete();
 }

 class Noticias implements Crud {

    public function create(){
        //logica para criar uma noticia
    }
    public function read(){
        //logica para ler uma noticia
    }
    public function update(){
        //logica para atualizar uma noticia
    }
    public function delete(){
        //logica para excluir uma noticia
    }
 }
