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
    
    <hr>

    <h2>do/while (faça/enquanto)</h2>
    <p>Executa ações pelo menos <b>uma vez</b> e, se
    a condição for verdadeira, continua executando
    outras vezes</p>

    <?php
    $j = 1;
    do {
    ?>
        <div>
            <h3>Título qualquer</h3>
            <p>Boclo <?= $j ?></p>
        </div>        
    <?php
    $j++;
    } while ($j <= 5)
    ?>
    
    <hr>

    <h2>for (para)</h2>
    <p>Executa ações de acordo com uma <b>quantidade
    determinada de vezes</b>.</p>

    <section>
        <h3>Conteúdo da seção</h3>
        <?php for($i = 1; $i <= 5; $i++){ ?>
        <details>
            <summary>Pergunta <?= $i ?></summary>
            <p>Resposta <?= $i ?></p>
        </details>
        <?php } ?>    
    </section>
</body>
</html>