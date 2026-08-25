<?php
    namespace MaoData\ti23t\View\Componentes;
?>

<nav class="navbar navbar-expand-lg cabecalho">
  <div class="container-fluid">
    <!-- LOGO -->
    <a class="navbar-brand logo-maodata" href="/MaoData/index.php">
      <img src="/MaoData/img/logo-maodata.png" alt="MãoData">
    </a>

    <!-- BOTÃO MOBILE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMaoData" aria-controls="navbarMaoData" aria-expanded="false" aria-label="Abrir menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="navbarMaoData">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Glossário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">E-Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VideoCast</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Game</a>
        </li>
      </ul>
    </div>

    <!-- PERFIL -->
    <a class="perfil" href="#">
      <img src="/MaoData/img/perfil.png" alt="Perfil">
    </a>
  </div>
</nav>