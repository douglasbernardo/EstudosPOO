<?php 

class Jogador{
    private static $nome;
    private $posicao;
    private $preco;

    public function Apresentarjogador(){
		echo '<table border= 1>';
        echo '<tr><td>Jogador: </td><td>'.self::$nome.'</td></tr>' ;
        echo '<tr><td>Posição: </td><td> '.$this->getPosicao().'</td></tr>';
        echo '<tr><td>Preço do jogador: </td><td>'.$this->getPreco().'</td></tr>' ;
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
        return self::$nome;
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
 
echo "<h2>Jogador de Futebol</h2>";
$jogador = New Jogador("Van dijk","Zagueiro","80.000.000");
$jogador->Apresentarjogador();
$jogador->MostrarCompra();
echo "<hr>";

$basquete = New Jogador("LeBron James","Ala","30.000.000");
$basquete->Apresentarjogador();
$basquete->MostrarCompra();