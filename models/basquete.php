<?php

//herença pegando metodos e atributos da classe Jogador
 class Basquete extends Jogador{

    private $nome;
    private $posicao;
    private $preco;

    public function Apresentarjogador(){
        echo " Jogador : " .$this->getNome()."<br>";
        echo " Posição : " .$this->getPosicao()."<br>";
        echo "Preço do jogador : " .$this->getPreco();
    }

    public function MostrarCompra(){
        $this->Comprar();
    }

    function __construct(string $nome, string $posicao, $preco)
    {
        $this->nome = $nome;
        $this->posicao = $posicao;
        $this->setPreco($preco);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getPosicao()
    {
        return $this->posicao;
    }
    public function setNome($n)
    {
        $this->nome = $n;
    }
    public function setPreco($p)
    {
        $this->preco = $p;
    }
    public function setPosicao($m)
    {
        $this->posicao = $m;
    }

    //metodo privado
    private function Comprar()
    {
        if($this->preco >= "50.000.00"){
            echo "Jogador " .$this->nome. " esta muito caro";
        }
        else{
            echo "Jogador esta com preço bom";
        }
    }
 }