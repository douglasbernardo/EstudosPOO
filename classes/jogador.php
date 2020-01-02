<?php 



class Jogador{
    private $nome;
    private $preco;
    private $posicao;

    public function Apresentarjogador(){
        echo " Jogador " .$this->nome. " esta sendo apresentado";
    }

    public function __construct(string $nome, $posicao, $preco){
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
        if($this->preco >= "50.000.00"){
            echo "Jogador " .$this->nome. " esta muito caro";
        }
        else{
            echo "Jogador bom";
        }
    }
}


    $jogador = New Jogador("Gabigol","30.000.00","Atacante");
    $jogador->Apresentarjogador();
    echo "<hr>";
    $jogador->Comprar();