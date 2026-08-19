<?php
    namespace MaoData\ti23t\View;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MãoData</title>
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg cabecalho">
  <div class="container-fluid">
    <!-- LOGO -->
    <a class="navbar-brand logo-maodata" href="#"><img src="img/logo-maodata.png" alt="MãoData"></a>
    <!-- BOTÃO MOBILE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMaoData" aria-controls="navbarMaoData" aria-expanded="false" aria-label="Abrir menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- MENU -->
    <div class="collapse navbar-collapse" id="navbarMaoData">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Glossário</a>
        </li>
          <a class="nav-link" href="#">E-Book</a>
        </li>
          <a class="nav-link" href="#">VideoCast</a>
        </li>
          <a class="nav-link" href="#">Game</a>
        </li>
      </ul>
    </div>
    <!-- PERFIL -->
    <a class="perfil" href="#"><img src="img/perfil.png" alt="Perfil"></a>
  </div>
</nav>