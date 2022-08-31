#PHP
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