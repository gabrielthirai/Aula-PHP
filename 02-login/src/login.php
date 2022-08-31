<?php
    include("../config/config.php");

    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];

    $senha = $senha . $parteForte;
    $senha = md5($senha);

    //echo $senha;

    if($senha == "85036c5f6f6c2301d1097be9e09dc77a"){
        header("Location: menu.php");
    }else{
        header("Location: index.php");
    }
?>