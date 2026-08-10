<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        article{
            padding: 2px;
            border: solid 1px;
        }

        .container{
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <h1>Exercício 02: estruturas de dados com arrays e objetos</h1>

    <?php 
    // Array associativo
    $pessoa1 = [
        "usuario" => "beltrano",
        "email" => "beltrano@gmail.com",
        "senha" => "beltrano@210",
        "idade" => 25,
        "sexo" => "masculino",
        "cidade" => "São Paulo"
    ];

    // Objeto genérico
    $pessoa2 = new stdClass;
    
    $pessoa2->usuario = "ciclano";
    $pessoa2->email = "ciclano@gmail.com";
    $pessoa2->senha = "ciclano@210";
    $pessoa2->idade = 18;
    $pessoa2->sexo = "masculino";
    $pessoa2->cidade = "São Caetano";
    ?>


    <div class="container">
    <article> 
        <h2>Pessoa 1</h2> 
        <p>Nome: <?= $pessoa1["usuario"] ?></p>
        <p>Email: <?= $pessoa1["email"] ?></p>
        <p>Idade: <?= $pessoa1["idade"] ?></p>
    </article>

    <article>
        <h2>Pessoa 2</h2>
        <p>Usuário: <?= $pessoa2->usuario ?></p>
        <p>Email: <?= $pessoa2->email ?></p>
        <p>Idade: <?= $pessoa2->idade ?></p>
    </article>
</div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>