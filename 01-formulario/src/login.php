<?php

// abaixo quando o method no html for get
// $cpf   = $_GET["cpf"];
// $senha = $_GET["senha"];

//$cpf   = $_POST["cpf"];
//$senha = $_POST["senha"];

$cpf   = $_REQUEST["cpf"];
$senha = $_REQUEST["senha"];

echo "<meta charset='UTF-8'>";
echo "<h1>";
echo "<br>Digitou senha: $senha<br>";
echo "<br>Criptografada: " . md5($senha);
echo "<hr>";

$senhax = $senha . "ÇzY4%#@";
$senha1 = md5($senhax);

echo "Cpf: $cpf <br>";
echo "Senha:  $senha";
echo "<br>Senha Criptografada: $senha1<br>";
echo "<br><br>Qtde de caracteres: " . 
      strlen($senha1);

echo "<hr>";
$senha = password_hash($senha, PASSWORD_BCRYPT);
echo "<br>$senha";


?>