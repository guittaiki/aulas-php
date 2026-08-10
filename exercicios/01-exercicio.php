<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        }

        p {
        border: solid 2px black;
        padding: 9px;
        margin: 1rem;
        max-width: 400px
        }

        .destaque {color: green;}
    </style>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>
   
   <?php
    $data = "29/07/2026"; 
    $nome = "Taiki"; 
    $curso = "Tec. de Informática para Internet"; 
    $cargaHoraria = 800;
    $limitesFaltas = $cargaHoraria * 0.25;
    ?>

    <h2>Dados do usuário</h2>
    
    <p>A data de hoje: <span class="destaque"><?php echo $data;?></span></p>
    <p>Nome da pessoa: <?php echo $nome?></p>
    <p>Nome do curso: <span class="destaque"><?php echo $curso?></span></p>
    <p>Carga horária do curso: <?php echo $cargaHoraria?></p>
    <p>Limites de falta: <span class="destaque"><?php echo $limitesFaltas?></span></p>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>