<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>estruturas de dados com Loops</h1>

    <?php  
    $linguagens = [
        [  
             "Id" => 1,
             "Linguagem" => "HTML",
             "descricao" => "Estruturação"

        ],
        [
             "Id" => 2,
             "Linguagem" => "CSS",
             "descricao" => "Estilos"
        ],
        [
             "Id" => 3,
             "Linguagem" => "PHP",
             "descricao" => "Beck-End"
        ],
        [
            "Id" => 4,
            "Linguagem" => "SQL",
            "descricao" => "Manipulação de dados"
        ]
    ];
    ?>
    <hr>

    <h2>Acesando o array</h2>
    <ol>
        <?php foreach($linguagens as $linguagem): ?>
            <li><?= $linguagem['Id'] ?></li>
            <li><?= $linguagem['Linguagem'] ?></li>
            <li><?= $linguagem['descricao'] ?></li>
        <?php endforeach; ?>
    </ol>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Linguagem</th>
      <th scope="col">Descrição</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>