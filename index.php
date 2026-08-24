<?php
    namespace MaoData\ti23t;
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
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <?php
        include('View/Componentes/cabecalho.php');
    ?>

    <main>

<section class="hero-maodata">
    <h1 class="visually-hidden">
        MãoData — Dando voz e sinais ao futuro
    </h1>
    <img src="img/hero-maodata.png" alt="" class="hero-imagem">
</section>

<!-- ===================================================== -->
<!-- SEÇÃO 2: GLOSSÁRIOS -->
<!-- ===================================================== -->
<section class="secao-glossarios py-5 revelar">
  <div class="container">
    <h2 class="titulo-secao text-center mb-4">Conheça nossos glossários</h2>

    <!-- 
      row-cols-1 = 1 coluna por linha no celular
      row-cols-md-3 = 3 colunas por linha a partir do tablet
      g-3 = "gutter" (espaçamento) de 1rem entre os cards, nas duas direções
    -->
    <div class="row row-cols-1 row-cols-md-3 g-3">

      <div class="col">
        <a href="glossario-hardware.php" class="card text-decoration-none h-100 card-glossario">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="img/icone-hardware.png" alt="" width="60" class="mb-3">
            <span class="card-title">Hardware</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="glossario-software.php" class="card text-decoration-none h-100 card-glossario">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="img/icone-software.png" alt="" width="60" class="mb-3">
            <span class="card-title">Software</span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="glossario-redes.php" class="card text-decoration-none h-100 card-glossario">
          <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
            <img src="img/icone-redes.png" alt="" width="60" class="mb-3">
            <span class="card-title">Redes</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FAIXA DE E-BOOKS -->
<section class="py-3 revelar">
  <div class="container">
    <a href="ebooks.php" class="d-block text-center text-decoration-none fw-bold py-3 rounded faixa-ebooks">
      E-Books
    </a>
  </div>
</section>

<!-- CONHEÇA TAMBÉM -->
<section class="py-5 revelar">
  <div class="container">
    <h2 class="titulo-secao text-center mb-4">Conheça também</h2>

    <div class="row row-cols-1 row-cols-md-2 g-3">

      <div class="col">
        <a href="videocast.php" class="card border-0 h-100 overflow-hidden">
          <div class="ratio ratio-16x9">
            <img src="img/thumb-videocast.png" alt="MãoData VideoCast" class="object-fit-contain-cover">
          </div>
        </a>
      </div>

      <div class="col">
        <div class="card h-100 d-flex align-items-center justify-content-center card-game">
          <span class="fw-bold text-center">MãoData Game<br>(EM CONSTRUÇÃO)</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ECOSSISTEMA MÃODATA -->
<section class="py-5">
  <div class="container">
    <h2 class="titulo-secao text-center mb-5 revelar">Conheça o ecossistema MãoData</h2>

    <!-- Bloco só texto -->
    <div class="row justify-content-center mb-5 revelar">
      <div class="col-12 col-lg-8">
        <h3>O significado do nome MãoData</h3>
        <p>
          O nome MãoData representa a união entre dois universos. Mão simboliza a Libras, a comunicação e a expressão por meio das mãos, fundamentais para a comunidade surda. Data representa a tecnologia, os sistemas e o universo da Tecnologia da Informação. Juntos, esses elementos representam o propósito do projeto: aproximar a acessibilidade da tecnologia e tornar o conhecimento mais acessível para todos.
        </p>
      </div>
    </div>

    <!-- Bloco texto + foto. align-items-center = alinha texto e imagem verticalmente ao centro g-4 = espaço generoso entre as colunas -->
    <div class="row align-items-center g-4 mb-5 revelar">
      <div class="col-12 col-md-6">
        <h3>Tudo começou com um desafio</h3>
        <p>A ideia do MãoData surgiu a partir da observação do professor orientador Ualace Lugo de Carvalho Morais, em conjunto com o intérprete Marcos Henrique Assunção Ramos, sobre uma dificuldade recorrente enfrentada por estudantes surdos nas aulas de Tecnologia da Informação.
Grande parte dos termos técnicos utilizados na área não possui sinais consolidados em Libras. Isso fazia com que intérpretes e alunos precisassem improvisar sinais ou recorrer à soletração, tornando o aprendizado mais lento e dificultando a compreensão dos conteúdos.
Com um aluno surdo integrando nossa equipe, pudemos vivenciar essa realidade de perto. Percebemos que o problema não estava apenas na ausência de sinais, mas na barreira que isso criava para o acesso ao conhecimento. Foi assim que nasceu o MãoData, com o objetivo de promover acessibilidade, inclusão e igualdade de oportunidades na área de Tecnologia da Informação.</p>
      </div>
      <div class="col-12 col-md-6">
        <img src="img/foto-equipe-1.png" alt="Equipe MãoData em apresentação com totem e computadores" class="img-fluid rounded">
      </div>
    </div>

    <!-- Mesmo bloco, mas invertido: flex-row-reverse é classe NATIVA do Bootstrap, não precisei criar nada customizado pra isso -->
    <div class="row align-items-center g-4 mb-5 flex-md-row-reverse revelar">
      <div class="col-12 col-md-6">
        <h3>De um Projeto Integrador a um propósito</h3>
        <p>O MãoData começou como um Projeto Integrador da disciplina de Hardware no Senac, inicialmente com a proposta de criar um glossário em Libras com os principais termos técnicos estudados durante o curso.
Conforme o projeto avançava, percebemos que ele poderia beneficiar muito mais pessoas do que nossa própria turma. Após a apresentação do primeiro PI, decidimos continuar seu desenvolvimento, expandindo o conteúdo para Software e Redes e transformando a iniciativa em nosso projeto de conclusão de curso (TCC).
O que começou como um trabalho acadêmico tornou-se um projeto em constante evolução.</p>
      </div>
      <div class="col-12 col-md-6">
        <img src="img/foto-equipe-2.png" alt="Equipe MãoData fazendo sinais em Libras" class="img-fluid rounded">
      </div>
    </div>

        <!-- Bloco: texto + captura do site + 3 capas de e-book -->
    <div class="row align-items-center g-4 mb-5 revelar">
      <div class="col-12 col-md-6">
        <h3>Muito além de um glossário</h3>
        <p>
          O MãoData evoluiu para um verdadeiro ecossistema de inclusão,
          reunindo diferentes iniciativas que trabalham em conjunto
          para ampliar o acesso ao conhecimento.
        </p>
        <p>
          Além dos glossários de Hardware, Software e Redes, o projeto
          possui um site que centraliza os conteúdos e disponibiliza os
          materiais gratuitamente. Os glossários também estão disponíveis
          em formato digital e em três volumes físicos, produzidos como
          livretos, um para cada área, e disponibilizados na biblioteca
          do Senac para consulta de estudantes, professores e demais
          interessados.
        </p>
        <p>
          O ecossistema também conta com o MãoData VideoCast, criado para
          mostrar que pessoas surdas podem participar de entrevistas,
          conversas e discussões com profissionais de diferentes áreas,
          contribuindo para quebrar estereótipos e fortalecer a inclusão.
        </p>
        <p>
          Outro projeto é o MãoData Game, desenvolvido para tornar o
          aprendizado mais dinâmico por meio da gamificação, permitindo
          que os usuários testem seus conhecimentos sobre os sinais
          aprendidos.
        </p>
        <p>
          Apesar de diferentes, essas iniciativas possuem o mesmo propósito:
          promover acessibilidade, educação e inclusão.
        </p>
      </div>

      <div class="col-12 col-md-6">
        <!-- Imagem 1: captura de tela do site, em cima -->
        <img src="img/print-site-maodata.png" alt="Captura de tela do site MãoData mostrando a página inicial" class="img-fluid rounded mb-3">

        <!-- 
          Imagens 2, 3 e 4: as 3 capas de e-book lado a lado.
          row-cols-3 = sempre 3 colunas, mesmo no celular
          (diferente do row-cols-1 col-md-3 que usei em outras seções,
          aqui quero elas sempre lado a lado por serem pequenas e formarem um conjunto)
          g-2 = espaçamento menor entre elas, já que são miniaturas
        -->
        <div class="row row-cols-3 g-2">
          <div class="col">
            <img src="img/capa-ebook-hardware.png" alt="Capa do e-book de Termos Técnicos em Libras: Hardware" class="img-fluid rounded">
          </div>
          <div class="col">
            <img src="img/capa-ebook-software.png" alt="Capa do e-book de Termos Técnicos em Libras: Software" class="img-fluid rounded">
          </div>
          <div class="col">
            <img src="img/capa-ebook-redes.png" alt="Capa do e-book de Termos Técnicos em Libras: Redes" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>

    <!-- Bloco: diagrama do ecossistema + texto (reversed, imagem à esquerda) -->
    <div class="row align-items-center g-4 mb-5 flex-md-row-reverse revelar">
      <div class="col-12 col-md-6">
        <h3>O impacto que nos motivou a continuar</h3>
        <p>
          No início, não tínhamos grandes expectativas. Por ser um Projeto Integrador de Hardware, imaginávamos que as pessoas esperariam robôs, equipamentos eletrônicos ou montagens físicas. Em vez disso, apresentaríamos um site e um glossário em Libras.
Mesmo inseguros, seguimos em frente.
Durante a apresentação, professores, intérpretes, alunos surdos e ouvintes demonstraram um entusiasmo genuíno com o projeto. Os elogios e comentários positivos mostraram que o MãoData poderia realmente facilitar o aprendizado e abrir novas oportunidades.
Foi nesse momento que percebemos que o projeto não deveria terminar com uma apresentação ou com uma nota. Ele poderia continuar crescendo e impactando outras pessoas.
        </p>
      </div>
      <div class="col-12 col-md-6">
        <img src="img/diagrama-ecossistema.png" alt="Diagrama mostrando a estrutura do ecossistema MãoData: glossários de Hardware, Software e Redes, MãoData Game e MãoData VideoCast" class="img-fluid rounded">
      </div>
    </div>

    <!-- Bloco final: só texto, largura maior, fecha a seção -->
    <div class="row justify-content-center revelar">
      <div class="col-12 col-lg-8">
        <h3>O futuro do MãoData</h3>
        <p>
          Nosso desejo é que o MãoData continue existindo e evoluindo mesmo após a conclusão da nossa participação no projeto.
Esperamos que a iniciativa possa ser adotada pelo Senac, permitindo que futuras turmas ampliem o conteúdo e deem continuidade ao trabalho realizado. Também acreditamos que o projeto possa inspirar outras instituições de ensino, universidades e escolas a desenvolver iniciativas semelhantes, mostrando que a acessibilidade pode estar presente em qualquer área do conhecimento.
Mais do que criar um glossário, queremos contribuir para um ambiente onde pessoas surdas possam aprender, desenvolver suas habilidades e ingressar no mercado de trabalho com mais autonomia, confiança e igualdade de oportunidades.
Esse é — e continuará sendo — o verdadeiro propósito do MãoData.
        </p>
      </div>
    </div>

  </div>
</section>

  </div>
</section>

    </main>

    <?php
        include('View/Componentes/rodape.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/scroll-revelar.js"></script>

</body>

</html>