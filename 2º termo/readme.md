# PHP
## criptografia
```
$senha = password_hash($senha, PASSWORD_BCRYPT);
```
é mais seguro, da para usar o md5, porém é menos seguro e é mais facil descriptografar.


## file_get_contents

Vai ler o conteudo que estiver no arquivo que será informado entre os parenteses.

## token

É uma chave.

## replace

replace troca uma string (meutoken), pelo conteudo existente na variável $meutoken. Isso será feito olhando o conteudo de $login.

## include

vai importar o config.php que está dentro da pasta config.

## variavel

para criar uma variavel se usa o $nome.
```
    $cpf = $_REQUEST['cpf'];
```
### REQUEST 
é universal, nesse exemplo ele vai pegar o nome da class que criei no html.

## Config

criamos uma variavel que vai receber caracteres especiais, para deixar a senha mais forte.

```
    $parteForte = "&%$!2KÇ";
```

Depois chamamos em login.php para juntar com a senha.
```
    $senha = $senha . $parteForte;
    $senha = md5($senha);
```

## header 

Ele redireciona o elemento para outro local.

```
header("Location: /menu.php");
```
ele vai redirecionar para o menu.php

## Array

Para criar um array, pode-se chamar uma função array

```
    $frutas = array();
```

Ou do jeito mais habitual

```
    $legumes = [];
```

Com a função array, para a criação do array, pode ser feito dessa forma

```
    $lanches = array("x-egg", "x-tudo","x-salada");
```

Você pode definir a posição do array e do que estiver dentro dele

```
    $frutas[0] = "ameixa";
    $frutas[1] = "goiaba";
    $frutas[2] = "cajamanga";
```

Ou não definir, ai nesse caso o proprio php atribui as posições

```
    $legumes[] = "chuchu";
    $legumes[] = "abobrinha";
    $legumes[] = "batata";
```

## Foreach

O Foreach inspeciona o array e quebra em 2 elemento, um que é a chave e o outro que é o valor.

```
    foreach($bebidas as $nome => $valor){
        echo "$nome com $valor quantidade <br>";
    }
```

## Rand

Essa função vai dar um numero randomicamente entre os valores informados

```
        $sorteio[$i] = rand(1,60);
```