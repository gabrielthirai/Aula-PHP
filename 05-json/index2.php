<?php
echo "teste";
$dados = file_get_contents("dadosAluno.json");
$alunos = json_decode($dados, true);

echo "<pre>";
print_r($alunos);
?>