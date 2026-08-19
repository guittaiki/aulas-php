<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container"
        <h1>Filtros para validação e sanatização</h1>
        <hr>
        <p>Filtros são recursos de análise e limpeza de dados aplicados através de
        funções especiais, normalmente as funções <code>filter_var()</code> e
        <code>filter_input()</code></p>

        <h2>Validação</h2>
        <h3>FILTER_VALIDATE_EMAIL</h3>
        <?php
        $email = ": email @provedor .com";
        $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
        ?>
            <pre><?php var_dump($emailValido) ?></pre>
        <?php if($emailValido): ?>
            <p class="text-success">E-mail correto!</p>
        <?php else: ?>
            <p class="text-danger">E-mail incorreto!</p>
        <?php endif; ?>
        
        <h3>FILTER_VALIDATE_URL</h3>
        <?php
        $url = "http://localhost/15-filtros.php";
        $urlValida = filter_var($url, FILTER_VALIDATE_URL);
        ?>
           <pre><?php var_dump($urlValida)?></pre>
        <?php if($urlValida): ?>
            <a href="<?= $url ?>" class="btn btn-info">Acesse o arquivo!</a>   
        <?php endif; ?>   
        
        <hr>

        <h2>Sanitização</h2>
        <h3>FILTER_SANITIZE_EMAIL</h3>
        <?php
        $contato = "/guilherme.tmiyagi @senacsp .br ()>";
        $contatoSanitizado = filter_var($contato, FILTER_SANITIZE_EMAIL);
        ?>
            <P>Contato <b>sem</b> sanitização: <?= $contato ?></P> 
            <P>Contato <b>com</b> sanitização: <?= $contatoSanitizado ?></P>    
            
            <h3>FILTER_SANITIZE_FULL_SPECIAL</h3>

        <?php
        // Simulando uma entrada de dados de código HTML
        $nomeCompleto = "<img src='https://ogimg.infoglobo.com.br/rioshow/
        25088054-e75-c90/FT1086A/pacoca-caseira.jpg'>";

        $nomeCompletoSanitizado = filter_var(
            $nomeCompleto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        ?>
            <p>Nome informado: <?= $nomeCompletoSanitizado ?></p>
        <?php
        // Simulando um ataque de injeção de código JS (XSS - Cross Site Scripting)
        $ataqueXSS = "<script>location = 'https://sp.senac.br'</script>";
        ?>
        
        <p>Teste:
            <?= filter_var($ataqueXSS, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>
        </p>

        <H3>htmlsspecialchars()</H3>
        <p>Pode ser usado como alternativa ao filtro.</p>
        
        <?php
        $nomeCompletoCorrigido = htmlspecialchars($nomeCompleto);
        $ataqueEvitado = htmlspecialchars($ataqueXSS);
        ?>
            <p>Nome completo corrigido: <?= $nomeCompletoCorrigido ?></p>
            <p>Ataque evitado: <?= $ataqueEvitado ?></p>

        <h3>FILTER_SANITIZE_NUMBER_INT</h3>
        <?php
        $idade = "Tenho 15 anos";
        $idade = filter_var($idade, FILTER_SANITIZE_NUMBER_INT);
        ?>
            <p>Idade: <?= $idade ?></p>
        
        <h3>FILTER_SANITIZE_NUMBER_FLOAT</h3>
        
        <?php    
        $precoInicial = "R$ 1000.78";
        $desconto = "R$ 500.30";
        
        $precoInicial = filter_var(
            $precoInicial, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION
        );

        $desconto = filter_var(
            $desconto, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION
        );
        $precoFinal = $precoInicial - $desconto;
        ?>

            <p>Preço inicial: <?= $precoInicial ?></p>
            <p>Desconto de: <?= $desconto ?></p>
            <p>Preço final: <?= $precoFinal ?></p>











    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>