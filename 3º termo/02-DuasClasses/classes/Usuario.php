<?php
    class Usuario{
        private $cpf;
        private $nome;
        private $email;
        private $senha;

        function __construct($cpf,$nome,$email,$senha){
            $this -> cpf = $cpf;
            $this -> nome = $nome;
            $this -> email = $email;
            $this -> senha = $senha;
        }
        public function getDados(){
            $dados = [];
            $dados["cpf"] = $this->cpf;
            $dados["nome"] = $this -> nome;
            $dados["email"] = $this->email;
            $dados["senha"] = $this->senha;

            return $dados;
        }
        public function salvar(ArquivoJson $arq){
            $arq -> gravar();
        }
    }

?> 