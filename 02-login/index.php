<?php

    include("config/config.php");
    $login = file_get_contents("html/login.html");
    $login = str_replace("meutoken", $meutoken, $login);

    echo $login;
?>  