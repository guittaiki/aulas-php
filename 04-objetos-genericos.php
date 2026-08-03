<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - objetos genéricos</title>
</head>
<body>
    <h1>Trabalhando com objetos/instâncias</h1>
    <hr>
    <?php 
    // Criando um objeto/instância a partir da classe stdClass (Standard Class)
    $usuario = new stdClass;

    // adicionando propriedades/atributos ao objeto
    $usuario->codigo = 1;
    $usuario->nome = "doncoto";
    $usuario->email = "doncoto@gmail.com";
    $usuario->idade = 18;
    $usuario->telefones = ["11-4002-8922", "11-94863-7090"];
    $usuario->endereco = [
        "longadouro" => "Rua Hipólito Caron",
        "numero" => "502",
        "bairro" => "Jardin Helena",
        "cep" => "08080-160"
    ];
    $usuario->caracteristicas = new stdClass; 
    $usuario->caracteristicas->peso = 80;
    $usuario->caracteristicas->atura = 1.87;
    ?>

    <h2>Análise da estrutura</h2>
    <pre><?php var_dump($usuario) ?></pre>

    <h2>Acessando e exibindo os dados do objeto</h2>
    <ul>
        <li>Nome: <?= $usuario->nome ?></li>
        <li>E-mail:
            <a href="mailto :<?= $usuario->email ?>">
                <?= $usuario->email ?>
            </a>
        </li>
        <li>Celular:
           <a href="tell:+55<?= $usuario->telefones[1] ?>">
              <?= $usuario->telefones[1] ?>
            </a>
        </li>
        <li>bairro: <?= $usuario->endereco["bairro"] ?></li>
        <li>peso: <?= $usuario->caracteristicas->peso ?>Kg</li>
    </ul>

    <h2>Convertendo objeto em array</h2>
    <?php 
    $pedido = new stdClass;
    $pedido->numero = "321abc";
    $pedido->valor_total = 1324.76;
    $pedido->entrega = 7;

    $arrayPedido = (array) $pedido; // casting (conversão)
    ?>

    <h3>Analisando a estrutura do objeto original e do array gerado</h3>
    <pre><?php var_dump($pedido) ?></pre>
    <pre><?php var_dump($arrayPedido) ?></pre>
    
    <h2>Convertendo array em objeto</h2>
    <?php  
    $curso = [
        "titulo" => "PHP básico",
        "carga_horaria" => 40,
        "categoria" => "Back-End"
    ];
    $objetosCurso = (object) $curso; // casting 
    ?>

    <h3>Analisando a estrutura do array original e do objeti gerado</h3>
    <pre><?php var_dump($curso) ?></pre>
    <pre><?php var_dump($objetosCurso) ?></pre>
</body>
</html>