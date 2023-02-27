<?php

    $frutas = array();
    $legumes = [];

    $lanches = array("x-egg", "x-tudo","x-salada");

    $bebidas = array(
        "coca-cola" => 3,
        "guarana" => 1,
        "cerveja" => 12,
        "vinho" => 45,
    );

    $frutas[0] = "ameixa";
    $frutas[1] = "goiaba";
    $frutas[2] = "cajamanga";

    $legumes[] = "chuchu";
    $legumes[] = "abobrinha";
    $legumes[] = "batata";


    echo "Frutas <br>";
    for($i=0; $i<count($frutas); $i++){
        echo $frutas[$i];
    }

    echo "Legumes <br>";
    for($i=0; $i<count($legumes); $i++){
        echo $legumes[$i];
    }

    echo "Lanches <br>";
    for($i=0; $i<count($lanches); $i++){
        echo $lanches[$i];
    }

    echo "Bebidas <br>";
    foreach($bebidas as $nome => $valor){
        echo "$nome com $valor quantidade <br>";
    }

    $sorteio = [];
    for($i=0; $i<6; $i++){
        $sorteio[$i] = rand(1,60);
    }
    echo "sorteio <br>";
    print_r($sorteio);
?>