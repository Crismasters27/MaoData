<?php
  namespace MaoData\ti23t\View\Componentes;
?>

<nav class="navbar navbar-expand-lg navbar-dark cabecalho">
  <div class="container-fluid">

    <!-- LOGO -->
    <a class="navbar-brand logo-maodata" href="/MaoData/index.php">
      <img src="/MaoData/img/logo-maodata.png" alt="MãoData">
    </a>

    <!-- BLOCO DIREITO: BUSCA + PERFIL + HAMBÚRGUER -->
    <div class="d-flex align-items-center flex-nowrap order-lg-2">

      <!-- BUSCA -->
      <form class="busca-termo-form me-3" role="search" onsubmit="return false;">
        <input type="text" id="busca-termo" class="form-control busca-termo-input" placeholder="Qual termo você está procurando hoje?">
      </form>

      <!-- PERFIL -->
      <a class="perfil me-2 me-lg-0" href="/MaoData/View/Telas/Login.php">
        <img src="/MaoData/img/perfil.png" alt="Perfil">
      </a>

      <!-- HAMBÚRGUER -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMaoData" aria-controls="navbarMaoData" aria-expanded="false" aria-label="Abrir menu">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>

    <!-- MENU -->
    <div class="collapse navbar-collapse order-lg-1" id="navbarMaoData">
      <ul class="navbar-nav me-lg-3 mb-2 mb-lg-0">

        <!-- GLOSSÁRIO -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Glossário
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/MaoData/View/Telas/Hardware.php">Hardware</a></li>
            <li><a class="dropdown-item" href="/MaoData/View/Telas/Software.php">Software</a></li>
            <li><a class="dropdown-item" href="/MaoData/View/Telas/Redes.php">Redes</a></li>
            <li><a class="dropdown-item" href="#">Favoritos</a></li>
          </ul>
        </li>

        <!-- E-BOOK -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            E-Book
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Hardware</a></li>
            <li><a class="dropdown-item" href="#">Software</a></li>
            <li><a class="dropdown-item" href="#">Redes</a></li>
          </ul>
        </li>

        <!-- VIDEOCAST -->
        <li class="nav-item">
          <a class="nav-link" href="/MaoData/View/Telas/VideoCast.php">VideoCast</a>
        </li>

        <!-- GAME -->
        <li class="nav-item">
          <a class="nav-link" href="#">Game</a>
        </li>

      </ul>
    </div>

  </div>
</nav>