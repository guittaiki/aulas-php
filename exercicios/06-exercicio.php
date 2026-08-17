<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa sobre funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <div class="container">  
    <h1>Função time()</h1>
       <p>É uma função que conta quantos segundos ja passou, por exemplo: esse código foi feito a 1 hora atrás. <br> outro exemplo:imagine contador gigante de segundos que existe desde 1970. <br> Você pergunta pra ele quanto tempo já se passou e ele te responde com um número enorme. <br> <br> A função <strong>time()</strong> não recebe nenhum parâmetros!, e essa função ela retorna um número inteiro e este número é chamado de "timestamp UNIX"</p>

    <?php
    // 1. Simulação de tempo de execução
    $agora = time();
    $amanha = $agora + 1786971305;
    ?>
        <p>Quantos segundos tem agora: <?= $agora ?></p> 
        <p>Quantos segundos terá amanhã: <?= $amanha ?></p>       
    </div>    

    <hr>

    <div class="container">
        <h1>Função getdate()</h1>
        <p>Imagine que você pediu o timestamp para time() e recebeu um número gigante (ex: 1723900800). Agora você quer converter esse número em uma data legível com dia, mês, ano, hora, minuto, etc. <br> A função <strong>getdate()</strong> recebe 1 parâmetro Se você não informar nada, ela usa time() automaticamente. </p>

        <?php
        $data = getdate()
        ?>

        <p>Dia: <?= $data['mday']; ?></p>
        <p>Mês: <?= $data['mon']; ?></p>
        <p>Ano: <?= $data['year']; ?></p>
    </div>

    <hr>

    <div class="container">
       <h1>Função mktime()</h1>
       <p> A função <strong>mktime</strong> é o inverso: ela pega valores de hora, minuto, segundo, mês, dia, ano separados e transforma em um timestamp. <br> E essa função recebe 6 parâmetros sendo eles: "hora", "minuto", "segundos", "mês", "dia" e "ano"</p>

       <?php
       $natal = mktime(18, 0, 0, 12, 25, 2026);
       $dias = ($natal - time()) / 86400;
       ?>

      <p>Faltam <?= (int)$dias; ?> dias para o Natal</p>
    </div>

    <hr>

    <div class="container">
        <h1>Função checkdate()</h1>
        <p>A função dessa função validar se uma data é real e válida. Ela verifica coisas como: 
        Mês existe? (1-12)
        Dia existe naquele mês? (31 de fevereiro? Não!)
        Ano é válido? <br> Essa função <strong>checkdate</strong> recebe 3 parâmetros sendo eles: "mês", "dia" e "ano"</p>

        <?php
        checkdate(8, 17, 2026);  // true ✓

        if (checkdate(8, 17, 2026)) {
              echo "Data válida!";
        }
        ?>
    </div>

    <div class="container">
        <h1>exemplo</h1>

        <?php
         // 1. time() - Pega timestamp atual
         $agora = time();

         // 2. getdate() - Extrai informações da data
         $info = getdate();

         // 3. mktime() - Cria timestamp de data específica
         $evento = mktime(18, 0, 0, 9, 15, 2026);

         // 4. checkdate() - Valida se data é real
         $valida = checkdate(9, 15, 2026); // true ✓
         $invalida = checkdate(2, 30, 2026); // false ✗

         // 5. date() - Formata timestamp
         echo date('d/m/Y H:i:s', $evento);
      ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

