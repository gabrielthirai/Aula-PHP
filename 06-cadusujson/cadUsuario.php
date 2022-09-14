<?php
$arquivo = "db.json";
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];
$email = $_REQUEST['email'];

$senha = md5($senha);

$db = array();
$existe = false;
if(file_exists($arquivo)){
    $dadosDb = file_get_contents($arquivo);
    $db = json_decode($dadosdb, true);
    foreach($db as $key =>$pessoa){
        if($pessoa["cpf"] == $cpf){
            $existe = true;
        }
    }
}
if($existe){
    echo "
        <h3> O CPF  já existe cadastrado. <br>
        <a href='index.html'> Clique aqui para outro cadastro. </a></h3>
    ";
    exit(0);
}

$dados = array(
    "cpf" => $cpf,
    "senha" => $senha,
    "email" => $email
);


$json = json_encode($dados);


$db[] = $json;


file_put_contents($arquivo, $db);

echo "
<h3> Cadastro realizado com sucesso! <br>
<a href='index.html'> Clique aqui para outro cadastro. </a></h3>
";
?>