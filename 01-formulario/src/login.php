<?php   
/*Comentario */

//abaixo quando o method no html for get
//$cpf = $_GET["cpf"];
//$senha = $_GET["senha"]; 

//$cpf = $_POST["cpf"];
//$senha = $_POST["senha"]; 

$cpf = $_REQUEST["cpf"];
$senha = $_REQUEST["senha"]; 

echo "<h1>Hello World.</h1>";
echo "Cpf: $cpf <br>";
echo "Senha: $senha";

?>