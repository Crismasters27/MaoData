<?php
  namespace MaoData\ti23t\View\Componentes;
?>

<nav class="navbar navbar-expand-lg navbar-dark cabecalho">
  <div class="container-fluid">
    <!-- LOGO -->
    <a class="navbar-brand logo-maodata" href="/MaoData/index.php">
      <img src="/MaoData/img/logo-maodata.png" alt="MãoData">
    </a>
    
    <!-- BOTÃO MOBILE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMaoData" aria-controls="navbarMaoData" aria-expanded="false" aria-label="Abrir menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU + PERFIL -->
    <div class="collapse navbar-collapse" id="navbarMaoData">

      <!-- MENU -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

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
        <li class="nav-item">
          <a class="nav-link" href="#">E-Book</a>
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

      <!-- PERFIL -->
      <a class="perfil ms-lg-3" href="#">
        <img src="/MaoData/img/perfil.png" alt="Perfil">
      </a>

    </div>

  </div>
</nav>