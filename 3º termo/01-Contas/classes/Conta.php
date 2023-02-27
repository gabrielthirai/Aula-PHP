<?php

  class Conta
  {  
      //atributos
      private $codigo;
      private $saldo;

      //Em php o construct é criado junto com DUAS underlines
      function __construct($codigo, $saldo){
        $this->codigo= $codigo;
        $this -> saldo = $saldo;
      }
      //métodos
      public function setCodigo($codigo)
      {
        $this->codigo = $codigo;        
      }

      public function getCodigo()
      {
        return $this->codigo;
      }

      public function depositar($valor)
      { 
        $this->saldo = $this->saldo + $valor;
      }

      public function consultarSaldo()
      {
        return $this->saldo;
      }

      public function sacar($valor)
      {
        $this->saldo = $this->saldo - $valor;
      }
  }

?>