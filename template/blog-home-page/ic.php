<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Conectoma</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <link href='css/main.css' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

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
            color: #ffffff;
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

    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
                        <div class="config-title">
                            <h1 class="h1-responsive font-bold">Iniciação Científica</h1>
                        </div>
                        <div class="post-container">
                            <br>
                            <p>Para desenvolver um país é necessário desenvolver pessoas: elevar o patamar de informação disponível e prover a população de conhecimentos básicos de ciência e tecnologia,
                              porque esses conhecimentos são centrais hoje em dia.</p>
                            <p>Além disso, é necessário estimular os jovens a se tornarem profissionais da ciência e da tecnologia,
                              para avançarmos no conhecimento existente.</p>
                            <p>Assim, é preciso que desde os primeiros anos da educação formal os(as) estudantes sejam postos em contato com a cultura científica, ou seja,
                              com a maneira científica de produzir conhecimento e com as principais atividades humanas que têm moldado o meio ambiente e a vida humana ao longo da história.</p>
                            <p>Acima de tudo, é preciso permitir que sejam criativos e inovadores. E capazes de sonhar! Esses são os principais ingredientes da ciência.</p>
                            <p>Venham conosco conhecer o caminho da ciência! A Iniciação Científica é o primeiro passo na carreira de um cientista, de um professor ou de um pesquisador.</p>
                            <p>Descubra como ingressar na Iniciação Científica no Ensino Superior.</p>
                            <a id="ini-spec" href="http://www.fapesp.br/" target="_blank">FAPESP</a>
                            <p>A Fundação de Amparo à Pesquisa do Estado de São Paulo é uma das principais agências de fomento à pesquisa científica e tecnológica do país. Com autonomia garantida por lei,
                              a FAPESP está ligada à Secretaria de Desenvolvimento Econômico, Ciência, Tecnologia e Inovação.</p>
                            <a id="ini-spec" href="http://cnpq.br/iniciacao-cientifica" target="_blank">CNPq</a>
                            <p>O Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq), agência do Ministério da Ciência, Tecnologia, Inovações e Comunicações (MCTIC),
                              tem como principais atribuições fomentar a pesquisa científica e tecnológica e incentivar a formação de pesquisadores brasileiros.</p>
                            <a href="http://www.brasil.gov.br/ciencia-e-tecnologia"> Saiba mais! </a>
                            <span class="post-tag">#iniciaçãocientífica</span>
                            <span class="post-tag">#dúvidas</span>
                        </div>
                    </div>
                    <hr>
                    <nav>
                        <ul class="pagination flex-center pg-dark  wow fadeIn" data-wow-delay="0.2s">
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-1"></div>
                
            </div>

        </div>


    </main>
<div id="footerload"></div>

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
    </script>
       <script>
            $(function(){
                $("#navload").load("nav.php");
            });
    </script>
    <script>
            $(function(){
                $("#footerload").load("footer.php");
            });
    </script>

</body>

</html>
