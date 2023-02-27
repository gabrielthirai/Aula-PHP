# Anotações

## Include

Caso dê um erro ele da a mensagem porém deixa rodando

## Require 

Para o processamento

## Require.once

inclue somente uma vez, pode ser usado em um for.

## Criação do usuario 1

```
    $usuario1 = new Usuario("12345678901", "Gabriel Hirai", "gabrielt.hirai@gmail.com", $senha);
```

Nesse caso passaremos o parametro que foi definido em Usuario.php, atribuindo como objeto o usuario1.

## Retornando o array dos dados

```
    $dados = $usuario1 -> getDados();
    print_r($dados);
```

Em Usuario.php, definimos o getDados() para retornar os dados que foram recolhidos pelo objeto.