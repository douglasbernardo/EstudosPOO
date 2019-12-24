<?php

    class Login{

        private $email;
        private $senha;

        public function getsenha(){
            return $this->senha;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
        public function getemail(){
            return $this->email;
        }
        public function setEmail($s){
            
            $this->email = $s;
        }

        public function logar(){
            if($this->email == "douglas@gmail.com" and $this->senha == "12345"){
                echo "Logado com sucesso";
            }else{
                echo "Dados invalidos";
            }
        }
    }
    $logar = new Login();
    $logar->setEmail("douglas@gmail.com");
    $logar->setSenha(12345);
    $logar->logar();
    gente aqui é a mae do douglAS 
    venho pedir que orem por ele ELE esta muito mal e foi levado para o Pronto socorro agoara
    ,com muitas dores nas costas. suspeitamos que é por carregar o peso de ser 
    mais bonito da familia 
    bjos  