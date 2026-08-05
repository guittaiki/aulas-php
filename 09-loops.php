<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Trabalhando com comandos de repetição</h1>
    <hr>

    <h2>While (enquanto)</h2>
    <p>executa ações repetidas vezes <b>enquanto</b>
    a condição for <b>verdadeira</b></p>

    <?php
    $i = 1;
    while($i <= 100){
    ?>
       <p>parágrafo: <?= $i ?></p> 
    <?php
       $i++;
    }
    ?>         
</body>
</html>