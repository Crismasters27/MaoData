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
<body class="tela-videocast">

    <?php
        include('../Componentes/cabecalho.php');
    ?>

    <main>
        <section class="hero-maodata">
            <div class="container-fluid text-center p-0">
                <h1 class="visually-hidden">MãoData — Dando voz e sinais ao futuro</h1>
                <img src="/MaoData/img/Banner-VideoCast.png" alt="" class="img-fluid hero-imagem">
            </div>
        </section>


    <!-- ECOSSISTEMA MÃODATA -->

    <section class="py-5">
      <div class="container-fluid secao-largura">
        <h2 class="titulo-secao text-center mb-5 revelar">Conheça o ecossistema MãoData</h2>

        <!-- Bloco só texto -->
        <div class="row mb-5 revelar">
          <div class="col-12">
            <h3>O significado do nome MãoData</h3>
            <p>
              O nome MãoData representa a união entre dois universos. Mão simboliza a Libras, a comunicação e a expressão por meio das mãos, fundamentais para a comunidade surda. Data representa a tecnologia, os sistemas e o universo da Tecnologia da Informação. Juntos, esses elementos representam o propósito do projeto: aproximar a acessibilidade da tecnologia e tornar o conhecimento mais acessível para todos.
            </p>
          </div>
        </div>

        <div class="row align-items-start g-4 mb-5 revelar">
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

        <div class="row align-items-start g-4 mb-5 flex-md-row-reverse revelar">
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

        <div class="row align-items-start g-4 mb-5 revelar">
          <div class="col-12 col-md-6">
            <h3>Muito além de um glossário</h3>
            <p>
              O MãoData evoluiu para um verdadeiro ecossistema de inclusão, reunindo diferentes iniciativas que trabalham em conjunto para ampliar o acesso ao conhecimento.
            </p>
            <p>
              Além dos glossários de Hardware, Software e Redes, o projeto possui um site que centraliza os conteúdos e disponibiliza os materiais gratuitamente. Os glossários também estão disponíveis em formato digital e em três volumes físicos, produzidos como livretos, um para cada área, e disponibilizados na biblioteca do Senac para consulta de estudantes, professores e demais interessados.
            </p>
            <p>
              O ecossistema também conta com o MãoData VideoCast, criado para mostrar que pessoas surdas podem participar de entrevistas, conversas e discussões com profissionais de diferentes áreas, contribuindo para quebrar estereótipos e fortalecer a inclusão.
            </p>
            <p>
              Outro projeto é o MãoData Game, desenvolvido para tornar o aprendizado mais dinâmico por meio da gamificação, permitindo que os usuários testem seus conhecimentos sobre os sinais aprendidos.
            </p>
            <p>
              Apesar de diferentes, essas iniciativas possuem o mesmo propósito: promover acessibilidade, educação e inclusão.
            </p>
          </div>

          <div class="col-12 col-md-6">
            <img src="img/print-site-maodata.png" alt="Captura de tela do site MãoData mostrando a página inicial" class="img-fluid rounded mb-3">
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

        <div class="row align-items-start g-4 mb-5 flex-md-row-reverse revelar">
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

        <div class="row revelar">
          <div class="col-12">
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
    
    </main>

    <?php
    include('../Componentes/rodape.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/scroll-revelar.js"></script>

</body>
</html>