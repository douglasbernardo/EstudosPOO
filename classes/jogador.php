<?php 

class Jogador{
    public $nome;
    public $preco;
    public $posicao;

    public function Apresentarjogador(){
        echo " Jogador : " .$this->nome;
        echo " Posição : " .$this->getPosicao();
        echo "Preço do jogador : " .$this->preco;
    }

    public function __construct(string $nome, $posicao,$preco){
        $this->nome = $nome;
        $this->posição = $posicao;
        $this->setPreco($preco);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preço;
    }
    public function getPosicao(){
        return $this->posição;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function setPreco($p){
        $this->preco = $p;
    }
    public function setPosicao($m){
        $this->posicao = $m;
    }

    public function Comprar(){
        if($this->preco >= "5000000"){
            echo "Jogador " .$this->nome. " esta muito caro";
        }
        else{
            echo "Jogador esta com preço bom";
        }
    }
}

$jogador = New Jogador("Gabigol","Atacante","80.000.000");
$jogador->Apresentarjogador();
echo "<hr>";
$jogador->Comprar();