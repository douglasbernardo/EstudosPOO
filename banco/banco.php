<?php


    abstract class Banco{

        protected  $saldo;
        protected $limitesaque;
        protected $juros;

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        abstract protected function Sacar($s);
        abstract protected function Depositar($d);
    }

    class Itau extends Banco{

        public function Sacar($s){
            $this->saldo -= $s;
            echo "Sacou o valor de ". $s;
        } 
        public function Depositar($d){
            $this->saldo += $d;
            echo "Depositou o valor de ". $d;
        }
    }

    $itau = new Itau();
    $itau->setSaldo(1000);
    echo "Saldo :".$itau->getSaldo();
    echo "<hr>";
    $itau->Sacar(400);
    echo "<hr>";
    echo "Saldo :".$itau->getSaldo();
    $itau->Depositar(600);
    echo "<hr>";
    echo "Saldo :".$itau->getSaldo();
  
