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

        <!-- ===================================================== -->
<!-- GRID DE TERMOS — Hardware -->
<!-- Reaproveita a MESMA estrutura de card da Home (ícone + texto),
     só troca row-cols-md-3 por row-cols-md-4 -->
<!-- ===================================================== -->
<section class="secao-termos py-5 revelar">
  <div class="container-fluid secao-largura">

    <div class="row row-cols-2 row-cols-md-4 g-3">

      <div class="col">
        <a href="termo-processador.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-cpu.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">Processador<br>(CPU)</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="termo-placa-mae.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-placa-mae.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">Placa-mãe</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="termo-memoria-ram.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-ram.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">Memória<br>RAM</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="termo-placa-video.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-gpu.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">Placa de Vídeo<br>(GPU)</span>
          </div>
        </a>
      </div>

      <!-- 
        A partir daqui, o Bootstrap AUTOMATICAMENTE inicia uma nova fileira
        de 4, porque já preenchemos 4 colunas acima (row-cols-md-4).
        Você só continua adicionando ".col" um atrás do outro, sem
        criar nova ".row" nem se preocupar em contar 4 por 4.
      -->

      <div class="col">
        <a href="termo-fonte.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-fonte.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">Fonte de<br>Alimentação</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="termo-placa-rede.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-placa-rede.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">Placa de<br>rede</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="termo-dvd.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-dvd.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">DVD</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="termo-gabinete.php" class="card text-decoration-none h-100 card-termo">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="/MaoData/img/icone-gabinete.png" alt="" class="mb-3 icone-termo">
            <span class="card-title d-block">Gabinete</span>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

    </main>

    <?php
    include('../Componentes/rodape.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/MaoData/js/scroll-revelar.js"></script>

</body>
</html>