<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
 <div class="container">   
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
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>