<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constanres</title>
    <style>
        .destaque {color: red;}
    </style>
</head>
<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>

    <?php
    // Variáveis
    $curso = "Téc. Informática para Internet"; // string
    $ano = 2026; // número inteiro
    $preco = 2112.55; // número real/fracionado, decimal

    // Constantes (recomenda-se declarar em MAIÚSCULAS)
    define("PROPRIETARIO", "Fulano de tal"); // antiga
    const EMPRESA = "ABC tecnologia";
    ?>

    <h2>Exemplos de saída de dados</h2>
    <?php
    // saída usando concatenação: .
    echo "<p>Estou fazendo o curso ".$curso." no ano de ".$ano."</p>";
    echo "<p>Trabalho na empresa <span class='destaque'>".EMPRESA."</span></p>";

    // Usando interpolação: se usa obrigatoriamente aspas dupla
    echo "<p>Estou fazendo o curso $curso no ano de $ano</p>";
    echo "<p>Trabalho na empresa EMPRESA</p>";
    ?>

    <H2>exemplos de saída de dados</H2>
    <h3>usando a sintaxe abreviada/curta no PHP</h3>

    <p>Estou fazendo o curso <?php echo $curso?> no ano de <?php echo $ano?> </p>
    <p>Trabalho na empresa <?php echo EMPRESA?> </p>

    <!--  Saída abreviada usando comando echo através do sinal de igual -->
    <p>Estou fazendo o curso <?= $curso?> no ano de <?= $ano?> </p>
    <p>Trabalho na empresa <span class="destaque"> <?= EMPRESA?></span></p>
</body>
</html>