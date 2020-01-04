<?php 

class Jogador{
    private static $nome;
    private $posicao;
    private $preco;

    public function Apresentarjogador(){
        echo '<table border= 1>';
        echo '<tr><td> Jogador : </td></tr>'.self::$nome."<br>";
        echo '<tr><td> Posição : </td></tr>' .$this->getPosicao()."<br>";
        echo '<tr><td> Preço do jogador :</tr></td>'.$this->getPreco();
        echo '</table>';
    }
    
    //acessando o metodo privado Comprar dentro do escopo da classe
    public function MostrarCompra(){
        $this->Comprar();
    }

    public function __construct(string $nome, string $posicao, $preco)
    {
        self::$nome = $nome;
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

    //metodo privado sendo acessado dentro do escopo da classe
    private function Comprar()
    {
        if($this->preco >= "50.000.00"){
            echo "Jogador " .self::$nome. " esta muito caro";
        }
        else{
            echo "Jogador esta com preço bom";
        }
    }
}

 //herença pegando metodos e atributos daa classe Jogador
 class Basquete extends Jogador{

    public static $nome;
    private $posicao;
    protected $preco;

    public function Apresentarjogador(){
        echo " Jogador : " .self::$nome."<br>";
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
 

$jogador = New Jogador("Van dijk","Zagueiro","80.000.000");
$jogador->Apresentarjogador();


