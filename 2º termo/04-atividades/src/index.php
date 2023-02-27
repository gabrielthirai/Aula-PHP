<?php
$cont = 0;
for($i=1; $i<=20; $i++){
    $sorteio[$i] = rand(1,30);
}

foreach($sorteio as $i => $valor){
    $result = $valor % 2;
    if($result == 0){
        echo "Numero par: $valor posicao $i <br> ";
    }
}
//quantas vezes foram repetidos:

foreach ($sorteio as $i => $valor) {
    //isset verifica se existe a variavel/conteudo
    if(isset($quantNumero[$valor])){
        $quantNumero[$valor]++;
    }else{
        $quantNumero[$valor] = 1;
    }
}

echo "<br> <pre>";
print_r($quantNumero);

//forma mais facil de resolver a repetição de numeros

$x = array_count_values($sorteio);
echo "<br> <pre>";
print_r($x);

//informar o maior e menor valor

echo "<br>";

echo "Maior valor: " . min($sorteio). "<br>";
echo "Menor valor: " . max($sorteio). "<br>";
?>