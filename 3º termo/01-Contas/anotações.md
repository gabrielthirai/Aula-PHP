# ANOTAÇÕES


## Objeto aula 1 (06-02-2023)

    //abaixo instanciando um objeto conta
    //cria um objeto do tipo conta
    $conta1 = new Conta();
    // na linha de baixo é atribuido o setCodigo para o objeto conta1, dentro do parenteses pode ser passado um objeto fixo ou uma variavel.
    $conta1 -> setCodigo("123");
    $conta1 -> depositar("125.50");
    $conta1 -> sacar("4.00");

    //o objeto Conta não muda pois o objeto da conta1 é a mesma coisa, porém muda o conteudo.
    //conta2 é outro objeto que foi criado a partir do mesmo conteudo (Conta).
    $conta2 = new Conta();
    $conta2 -> setCodigo("111");
    $conta2 -> depositar("50");

## Construct

Arquivo Json
    nome do arquivo
    conteudo
ler()
gravar()

Usuario

    cpf
    nome
    email
    senha
getDados()
gravar()

Método além de registrar dados, ele pode retornar objetos, array, etc.
