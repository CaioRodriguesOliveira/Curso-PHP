<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Sriracha&display=swap" rel="stylesheet">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "../curso-php/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                //{_GET['dir']}
                //{$_GET['file']}
                //include("{_GET['dir']/")
                //include("teste/teste.php");
                //include("{$_GET['dir']}/{$_GET['file']}.php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="rodape">
        Caio Rodrigues &copy; <?= date('Y'); ?>
    </footer>
</body>
</html>