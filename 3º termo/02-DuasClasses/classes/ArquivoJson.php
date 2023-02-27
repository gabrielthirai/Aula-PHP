<?php
    class ArquivoJson{
        private $nomeArq;
        private $conteudo;
        //se o programador esquecer de passar o parametro, o valor vai ser arquivo, automaticamente
        function __construct($nomeArq = "arquivo", $conteudo = " "){
            $this -> nomeArq = $nomeArq . ".json";
            $this -> conteudo = $conteudo;
        }

        public function gravar(){
            file_put_contents($this -> nomeArq,$this -> conteudo);
        }

        public function ler(){
            $dados = file_get_contents($this -> nomeArq);
            $this -> conteudo = $dados; 
            return $this -> conteudo;
        }
    }
?>