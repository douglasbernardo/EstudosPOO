<?php

    class Login{

        private $email;
        private $senha;
        private $nome;

        public function __construct($email,$senha,$nome){
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        //metodos getters e setters
        
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
    $logar = new Login("douglas@gmail.com","12345","Douglas");
    $logar->logar();