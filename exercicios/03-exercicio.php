<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      
</body>
</html>