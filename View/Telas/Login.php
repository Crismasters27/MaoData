<?php
    namespace MaoData\ti23t\View\Telas;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MãoData — Entrar</title>
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons — ícones oficiais do ecossistema Bootstrap, usados nos campos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/MaoData/css/estilo.css">
</head>

<body class="tela-login">

    <main>
        <div class="container-fluid">
            <div class="row vh-100 align-items-center g-5 auth-linha">

                <!-- LADO ESQUERDO -->
                <div class="col-12 col-lg-5 auth-lado-esquerdo">
                    <img src="/MaoData/img/logo-maodata.png" alt="MãoData" class="auth-logo mb-4">
                    <h1 class="auth-titulo">Bem-vindo de volta!</h1>
                    <p class="auth-subtitulo">
                        Você pode fazer login para acessar<br>
                        com sua conta existente
                    </p>
                </div>

                <!-- LADO DIREITO: card branco com o formulário -->
                <div class="col-12 col-lg-5 d-flex justify-content-center auth-lado-direito">
                    <div class="auth-card">
                        <h2 class="auth-card-titulo mb-4">Entrar</h2>

                        <form action="#" method="post">

                            <div class="auth-input-wrapper mb-3">
                                <i class="bi bi-person-fill auth-input-icone"></i>
                                <input type="email" name="email" class="form-control auth-input" placeholder="e-mail" required>
                            </div>

                            <div class="auth-input-wrapper mb-4">
                                <i class="bi bi-lock-fill auth-input-icone"></i>
                                <input type="password" name="senha" class="form-control auth-input" placeholder="Senha" required>
                            </div>

                            <button type="submit" class="btn auth-btn-primario w-100 mb-3">Entrar</button>

                            <p class="text-center auth-link-texto">
                                Novo por aqui?
                                <a href="/MaoData/View/Telas/Cadastrar.php" class="auth-link">Crie uma conta!</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbItxI" crossorigin="anonymous"></script>
    <script src="/MaoData/js/scroll-revelar.js"></script>

</body>

</html>