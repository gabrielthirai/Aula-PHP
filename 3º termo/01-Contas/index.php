<?php
   include("classes/Conta.php");


   //com a criação por meio do constructor, tem que ser passado os parametros exigidos no constructor.
   $conta1 = new Conta("123", 0);
   //dessa forma não é necessario colocar um set, inicialmente, caso precise ser alterado, ai sim precisará ser usado (set)
   //$conta1 -> setCodigo("123");
   $conta1 -> depositar("125.50");
   $valor = "5.00";
   $conta1 -> depositar($valor);
   $conta1 -> sacar("4.00");

   
   $conta2 = new Conta("111", 0);
   //novamente não é necessario o set.
   //o Construct é feito para simplificar o código.
   //$conta2 -> setCodigo("111");
   $conta2 -> depositar("50");

   echo "Conta: " . $conta1 -> getCodigo() . "<br>";
   echo "Saldo: " . $conta1 -> consultarSaldo();
   echo "<hr>";

   echo "Conta: " . $conta2 -> getCodigo() . "<br>";
   echo "Saldo: " . $conta2 -> consultarSaldo();
   echo "<hr>";
?>