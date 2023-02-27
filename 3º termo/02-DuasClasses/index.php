<?php 
    include("classes/ArquivoJson.php");
    include("classes/Usuario.php");

    //por hora a senha vai ser criptografada pelo md5, porém futuramente usaremos outro
    $senha = md5("1");
    $usuario1 = new Usuario("12345678901", "Gabriel Hirai", "gabrielt.hirai@gmail.com", $senha);

    $dados = $usuario1 -> getDados();
    
    $json = json_encode($dados);
    $arq = new ArquivoJson($dados["cpf"],$json);

    $usuario1->salvar($arq);
    echo "Gravou...";
?>