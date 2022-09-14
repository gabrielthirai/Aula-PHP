<?php
    //array assossiativo
    $alunos = array("ra" => "215768", "nome" => "Gabriel Hirai", "email" => "gabrielt.hirai@gmail.com");
    echo "email: " . $alunos["email"] . "<br>";

    $json = json_encode($alunos);
    echo "<hr>";
    echo $json; 

    //salva os dados do json em um arquivo

    file_put_contents("dadosAluno.json", $json);
    echo "<a href='index2.php'> Clique aqui </a>";
?>