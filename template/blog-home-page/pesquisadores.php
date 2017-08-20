<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css" />
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">

            main {
                padding-top: 3rem;
                padding-bottom: 2rem;
            }

            .widget-wrapper {
                padding-bottom: 2rem;
                border-bottom: 1px solid #e0e0e0;
                margin-bottom: 2rem;
            }


            .navbar {
                background-color: #82b1ff;
            }

            footer.page-footer {
                background-color: #82b1ff;
                margin-top: 2rem;
            }

            .list-group-item.active {
                background-color: #33b5e5;
                border-color: #33b5e5
            }

            .list-group-item:not(.active) {
                color: #222;
            }

            .list-group-item:not(.active):hover {
                color: #666;
            }
            .card {
                font-weight: 300;
            }
            .navbar .btn-group .dropdown-menu a:hover {
                color: #000 !important;
            }
            .navbar .btn-group .dropdown-menu a:active {
                color: #fff !important;
            }
    </style>

</head>

<body>
  <div id="navload"></div>

  <div class="uni-header">
    <div class='container'>
      <div class='row'>
        <div class='col-md-1 col-sm-1'>

        </div>
        <div class='col-md-2 col-sm-2'>
          <img src='img/usp.png' class='uni-icon' />
        </div>
        <div class='col-md-5 col-sm-5'>
          <header class='uni-title dark-text'>USP</header>
          <p class='uni-subtitle'>Universidade de São Paulo</p>
        </div>
        <div class='col-md-4 col-sm-4 uni-stats'>
          <div style='text-align: centered; font-size: 200%; padding-bottom: 0.2em;'>
            <b>Rank</b>
          </div>
          posição do mês: <span style='font-size: 180%'><b>1ª</b></span> <br />
          IC's totais: <span style='font-size: 130%'>402</span> <span style='font-size:90%; color: #444;'>(1ª)</span>
        </div>
      </div>
    </div>
  </div>

  <!--  Mock dos Cards de institutos -->
  <!-- IME -->
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 col-sm-12'>
        <div class='card padding'>
          <img class='card-img' src='img/ime.jpg' />
          <div class="card-block container">
            <h4 class="card-title"><b>IME</b><span style='text-align: right; color:#aaa;'> - Instituto de Matemática e Estatística</span></h4>
            <p class="card-text">O Instituto de Matemática e Estatística da Universidade de São Paulo (IME-USP) é uma instituição pública de ensino e pesquisa em Matemática, internacionalmente reconhecida por sua excelência. Além dos cursos de graduação, onde são recebidos 340 novos ingressantes todos os anos, são também oferecidos cursos de aperfeiçoamento, mestrado e doutorado. Os docentes, na sua maioria, dedicam-se em tempo integral ao trabalho no Instituto e aqui são desenvolvidas... <a href="#">Ver mais</a></p>
            <div class='status'>
              <h5>Status</h5>
              <div class='row'>
                <div class='col-md-6' style='text-align: right;'>
                  <p>
                    <b>IC's em progresso:</b> 16<br />
                    <b>IC's abertas:</b> 10
                  </p>
                </div>
                <div class='col-md-1'>
                  <progress max='23' value='16'></progress>
                  <progress max='12' value='10'></progress>
                </div>
              </div>
              <p style='text-align: centered'>
                <span class='post-tag'>#Matemática</span>
                <span class='post-tag'>#Computação</span>
                <span class='post-tag'>#Estatística</span>
                <span class='post-tag'>#Inteligência Artificial</span>
              </p>
              <a href="#" class="btn btn-primary">Ver IC's</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ECA -->
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 col-sm-12'>
        <div class='card padding'>
          <img class='card-img' src='img/eca.jpg' />
          <div class="card-block container">
            <h4 class="card-title"><b>ECA</b><span style='text-align: right; color:#aaa;'> - Escola de Comunicações e Artes</span></h4>
            <p class="card-text">A Escola de Comunicações e Artes da Universidade de São Paulo (ECA/USP) foi criada em 1966 com o nome de Escola de Comunicações Culturais. A ECA é uma instituição pública de ensino superior voltada à formação de profissionais e pesquisadores nas áreas das comunicações e das artes e para a produção de conhecimento científico, por meio de seus laboratórios e centros de estudos. Mantém, desde a sua fundação, amplo e diversificado universo de atividades de... <a href="#">Ver mais</a></p>
            <div class='status'>
              <h5>Status</h5>
              <div class='row'>
                <div class='col-md-6' style='text-align: right;'>
                  <p>
                    <b>IC's em progresso:</b> 11<br />
                    <b>Satisa:</b> 12
                  </p>
                </div>
                <div class='col-md-1'>
                  <progress max='23' value='11'></progress>
                  <progress max='12' value='12'></progress>
                </div>
              </div>
              <p class='text-align: centered'>
                <span class='post-tag'>#Música</span>
                <span class='post-tag'>#Cinema</span>
                <span class='post-tag'>#Artes Plásticas</span>
                <span class='post-tag'>#Comunicação</span>
              </p>
              <a href="#" class="btn btn-primary">Ver IC's</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAU -->
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 col-sm-12'>
        <div class='card padding'>
          <img class='card-img' src='img/fau.jpg' />
          <div class="card-block container">
            <h4 class="card-title"><b>FAU</b><span style='text-align: right; color:#aaa;'> - Faculdade de Arquitetura e Urbanismo</span></h4>
            <p class="card-text">A Faculdade de Arquitetura e Urbanismo da Universidade de São Paulo – FAU – foi fundada em 1948, tendo se originado do antigo curso de engenheiro-arquiteto da Escola Politécnica da mesma Universidade. Seu fundador e primeiro diretor foi o Professor Luiz Ignácio de Anhaia Mello, responsável pela formação urbanística no antigo curso e principal organizador de novos conteúdos específicos naquele que se formava. Em seus primeiros anos, o curso da FAU combinava... <a href="#">Ver mais</a></p>
            <div class='status'>
              <h5>Status</h5>
              <div class='row'>
                <div class='col-md-6' style='text-align: right;'>
                  <p>
                    <b>IC's em progresso:</b> 23<br />
                    <b>IC's abertas:</b> 3
                  </p>
                </div>
                <div class='col-md-1'>
                  <progress max='23' value='23'></progress>
                  <progress max='12' value='3'></progress>
                </div>
              </div>
              <p style='text-align: centered'>
                <span class='post-tag'>#Arquitetura</span>
                <span class='post-tag'>#Design</span>
                <span class='post-tag'>#Estética</span>
                <span class='post-tag'>#Urbanização</span>
              </p>
              <a href="#" class="btn btn-primary">Ver IC's</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FEA -->
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 col-sm-12'>
        <div class='card padding'>
          <img class='card-img' src='img/fea.jpg' />
          <div class="card-block container">
            <h4 class="card-title"><b>FEA</b><span style='text-align: right; color:#aaa;'> - Faculdade de Economia e Administração</span></h4>
            <p class="card-text">A Faculdade de Economia, Administração e Contabilidade da Universidade de São Paulo (FEAUSP) é uma instituição pública de ensino e pesquisa mundialmente reconhecida pela excelência de sua produção acadêmica e de seus cursos, tanto de graduação quanto de pós-graduação. Com mais de 60 anos de existência, a FEAUSP surgiu com o objetivo de preparar profissionais de administração, economia e contabilidade para suprir as necessidades dos grandes centros do Brasil... <a href="#">Ver mais</a></p>
            <div class='status'>
              <h5>Status</h5>
              <div class='row'>
                <div class='col-md-6' style='text-align: right;'>
                  <p>
                    <b>IC's em progresso:</b> 23<br />
                    <b>IC's abertas:</b> 3
                  </p>
                </div>
                <div class='col-md-1'>
                  <progress max='23' value='23'></progress>
                  <progress max='12' value='3'></progress>
                </div>
              </div>
              <p style="text-align: centered">
                <span class='post-tag'>#Economia</span>
                <span class='post-tag'>#Contabilidade</span>
                <span class='post-tag'>#Atuária</span>
                <span class='post-tag'>#Administração</span>
              </p>
              <a href="#" class="btn btn-primary">Ver IC's</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
        $(document).ready(function(){
            $(function () {
                $('.viewMoreButton').click(function () {
                    $(this).prev('div').slideToggle();
                    return true;
                });
            });
        });
        $('.list-group-item').click(function () {
                    $(this).next('div').slideToggle();
                    return true;
                });
    </script>
    <script>
            $(function(){
                $("#navload").load("nav.php");
            });
    </script>
</body>
</html>
