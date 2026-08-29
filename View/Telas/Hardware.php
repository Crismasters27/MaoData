<?php
    namespace MaoData\ti23t\View\Telas;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MãoData</title>
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/MaoData/css/estilo.css">
</head>
<body class="tela-hardware">

    <?php
        include('../Componentes/cabecalho.php');
    ?>

    <main>
        <section class="hero-maodata">
            <div class="container-fluid text-center p-0">
                <h1 class="visually-hidden">MãoData — Dando voz e sinais ao futuro</h1>
                <img src="/MaoData/img/Banner-Hardware.png" alt="" class="img-fluid hero-imagem">
            </div>
        </section>



    </main>

    <?php
    include('../Componentes/rodape.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/MaoData/js/scroll-revelar.js"></script>
    <script src="/MaoData/js/busca-termo.js"></script>

</body>
</html>