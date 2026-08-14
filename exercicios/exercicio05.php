<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h1>Exercício 05 - Funções</h1>
        <hr>

        <h2>Notas dos alunos</h2>

        <?php

        function calcularMedia($nota1, $nota2, $nota3)
        {
            $media = ($nota1 + $nota2 + $nota3) / 3;
            return $media;
        }

        function verificarSituacao($media)
        {
            if ($media >= 7) {
                return "Aprovado";
            } else {
                return "Reprovado";
            }
        }

        ?>

        <?php

        $alunos = [
            ["beltrano", 8, 7, 9],
            ["ciclano", 5, 6, 6],
            ["deltrano", 9, 8, 10],
            ["fulano", 7, 7, 6],
            ["thiago", 4, 5, 6]
        ];

        foreach ($alunos as $aluno):

            $media = calcularMedia($aluno[1], $aluno[2], $aluno[3]);
            $situacao = verificarSituacao($media);

        ?>

            <h3><?= $aluno[0] ?></h3>

            <p>Nota 1: <?= $aluno[1] ?></p>
            <p>Nota 2: <?= $aluno[2] ?></p>
            <p>Nota 3: <?= $aluno[3] ?></p>

            <p>Média: <?= number_format($media, 2, ',', '.') ?></p>

            <?php if ($situacao == "Aprovado"): ?>

                <p class="text-success">
                    <?= $situacao ?>
                </p>

            <?php else: ?>

                <p class="text-danger">
                    <?= $situacao ?>
                </p>

            <?php endif; ?>

            <hr>

        <?php endforeach; ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>