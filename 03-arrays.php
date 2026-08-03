<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Trabalhando com arrays</h1>
    <hr>
    <h2>Array numérico/indexado</h2>

    <?php 
    // Sintaxe 1: usando colchetes
    $bandas = ["Savatage", "Iron Maiden", "Slayer"];

    // Sintaxe 2: usando a função array
    $cursos = array("Exel", "JavaScript", "Games 2D", "PHP");
    
    // Array heterogêneo (tipos de dados mistos/variados)
    $coisas = ["Ozzy", 2112, "<b>Senac</b>", 253.487, true];

    // Array como constante
    const FRUTAS = ["morango", "abacaxi"];
    define("FILIAIS", ["São Paulo", "Rio de Janeiro"]);
    ?>

    <h3>Acessando dados de arrays indexado/numérico</h3>
    <ul>
        <li>Banda que mais gosto: <?= $bandas[2] ?></li>
        <li>Gostaria de estudar mais sobre o <?= $cursos[0] ?></li>
        <li>Estamos estudando no <?= $coisas[2] ?></li>
        <li>Estamos na unidade na cidade de <?= FILIAIS[0] ?> </li>
    </ul>

    <h2>Array associativo</h2>
    <p>Lista de dados baseada em uma chave associativa (na prática, é
    um nome/identificação que você dá), 
    e um valor para ela (o dado em si).</p>

    
<?php  
$curso = [
    // chave associativa => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 800,
    "descricao" => "Aprender a esquentar água pra fazer miojo"
];

const EMPRESA = [
    "nome" => "Biribinha Soluções em TI",
    "ramo" => "Tecnologia",
    "fundacao" => "31/02/2026"
];
?>

   <h3>Acessando dados de array associativo</h3>
   <p>Nome do curso: <b> <?= $curso["titulo"] ?></b></p>
   <p>CH: <b> <?= $curso["carga_horaria"] ?></b></p>
   <p>Descrição: <b> <?= $curso["descricao"] ?></b></p>
   <p>Prestadora de serviços: <i><?= EMPRESA["nome"] ?><i></p>

<?php  
$planoDeEstudos = [
    ["JS Avancado", "Node.js", "Next.js"],
    ["PHP Avançado", "Orientações a Objetos"],
    ["Teoria das Cores", "Photoshop", "Canva", "UX/UI"]
];

// Matriz de arrays associativos
 $clientes = [
    [
        "nome" => "Gabriel",
        "me_devendo" => 1000
    ],
    [
        "nome" => "Messias",
        "me_devendo" => 500
    ]
]
?>

   <h3>Acessando dados da matriz de arrays indexados</h3>
   <p>Meu foco agora é no <?= $planoDeEstudos[1][0]?></p>

   <h2>Funções de análize/debug de estruturas de dados (array, objetos)</h2>
   <?php 
   // echo $bandas; // não funciona, pois o echo não consegue exibir arrays
   ?>

    <h3><code>print_r()</code></h3>
    <pre><?php print_r($bandas) ?></pre>

   <h3><code>var_dump()</code></h3>
   <pre><?php var_dump($bandas) ?></pre>
</body>
</html>