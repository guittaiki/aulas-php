<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar { color: red; }
        .normal { color: pink; }
    </style>
</head>
<body>
    <h1>Trabalhando com estruturas Condicionais</h1>
    <hr>

    <h2>Condicional SIMPLES: <code>if</code></h2>
    <?php  
      $numero = 50;

      // Estrutura tradicional (comando, parênteses, chaves)
      if($numero > 10){
        echo "<p>$numero é maior que 10.</p>";
      }

      // Estrutura abreviada (sem chaves)
      if($numero > 10) echo "<p>$numero é maior que 10.</p>";

      // Estrutura alternativa (sem chaves, com : e endif)
      if($numero > 10):
          echo "<p>$numero é maior que 10 .</p>";
      endif;
    ?>
    
    <h2>Condicional COMPOSTA: <code>if/else</code></h2>
    <?php  
    $produto = "Ultrabook";
    $qtdEmEstoque = 0;
    $qtdCritica = 5;
    ?>

      <h3> <?= $produto ?></h3>
      <p><b>Quantidade em estoque: </b> <?= $qtdEmEstoque ?></p>
      
    
    <?php  
      if ($qtdEmEstoque < $qtdCritica) {
           echo "<p class=\"comprar\">É necessário comprar/repor</p>";

           // Condicional ANINHADA (ela está dentro de outro if)
           if($qtdEmEstoque === 0) {
              echo "<p><mark class=\"comprar\">🚨URGENTE!</mark></p>";
           }
      } else {
           echo "<p class=\"normal\">Estoque normal.</p>";
      } 
    ?>
</body>
</html>