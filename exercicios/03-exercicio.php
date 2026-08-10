<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
      .idade { color: blue; }
      .categoria { color: green; }
      .valor { color: purple; font-weight: bold; }

      body { background-color: bisque;}

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
    <h1>Exercício 03: ingresso do show</h1>

    <?php
    $idade = 7;
    $sitacao = "";
    $valor = 0;
    
    if ($idade <= 12) {
      $sitacao = "infantil";
      $valor = 25;
    } elseif ($idade >= 18) {
      $status = "adulto";
      $valor = 40;
    } else {
      $sitacao = "melhor idade";
      $valor = 20;
    }
    ?> 
      
     <div class="container">
       <article>
        <p class="idade">Idade: <?= $idade ?></p>
        <p class="categoria">Categoria: <?= $sitacao ?></p>
        <p class="valor">Valor do ingresso R$ <?= number_format($valor, 2, ',', '.') ?></p> 
       </article> 
      
     </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
</body>
</html>