<?php 

class Jogador{
    public $nome;
    private $posicao;
    protected $preco;

    public function Apresentarjogador(){
        echo " Jogador : " .$this->nome."<br>";
        echo " Posição : " .$this->getPosicao()."<br>";
        echo "Preço do jogador : " .$this->preco;
    }
    
    //acessando o metodo privador Comprar
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

 //herença pegando metodos e atributos daa classe Jogador
 class Basquete extends Jogador{

    public $nome;
    private $posicao;
    protected $preco;

    public function Apresentarjogador(){
        echo " Jogador : " .$this->nome."<br>";
        echo " Posição : " .$this->getPosicao()."<br>";
        echo "Preço do jogador : " .$this->preco;
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
 
echo "Jogador de Futebol";
$jogador = New Jogador("Van dijk","Zagueiro","80.000.000");
$jogador->Apresentarjogador();
echo "Jogador de Basquete";
$basquete = new Jogador("LeBron James","Ala","60.000.000");
$basquete->Apresentarjogador();
echo "<hr>";
$jogador->MostrarCompra();
