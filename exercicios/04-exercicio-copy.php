<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-center">Linguagens de Programação</h1>

  <?php

  $linguagens = [
    1 => ["nome" => "HTML", "descricao" => "Estruturação"],
    2 => ["nome" => "CSS", "descricao" => "Estilos"],
    3 => ["nome" => "JS", "descricao" => "Comportamentos"],
    4 => ["nome" => "PHP", "descricao" => "Back-End"],
    5 => ["nome" => "SQL", "descricao" => "Manipulação de dados"]
  ];

  ?>


<!-- 
  <ul>
    <?php foreach ($linguagens as $id => $linguagem): ?>
      <li>
        <p>
          <b><?php echo $id; ?>. <?php echo $linguagem["nome"]; ?>:</b>
          <?php echo $linguagem["descricao"]; ?>
        </p>
      </li>
    <?php endforeach; ?>
  </ul>
 -->

  <br><br>

  <div class="container">
  <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($linguagens as $id => $linguagem): ?>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= ($linguagem['nome']); ?></td>
                    <td><?= ($linguagem['descricao']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>