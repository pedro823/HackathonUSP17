<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Conectoma</title>

    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href='css/signin.css' rel='stylesheet'>
    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
            background-color: white;
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
            margin-top: 0px;
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
      <form class="form-signin">
        <h2 class="form-signin-heading">Entrar:</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
      </form>

    </div>
    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer links-->
        <div class="container-fluid">
            <div class="row container-fluid">
                <!--First column-->
                <div class="col-lg-3 col-md-6">
                    <h5 class="title mb-3"><strong>Sobre o Conectoma</strong></h5>
                    <p>Conectoma surgiu a partir da necessidade de conectar alunos interessados a ICs à professores.</p>
                    <p>Porque não criar em uma única plataforma uma ponte entre alunos e professores interessados em ICs? O Conectoma surge
                    a partir desta necessidade. Conecte-se, faça ciência. </p>
                </div>
                <!--/.First column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3"><strong>Informações adicionais</strong></h5>
                    <ul>
                        <li>
                            <a href="http://lattes.cnpq.br/" target="_blank">Lattes</a>
                        </li>
                        <li>
                            <a href="https://www.topuniversities.com/" target="_blank">Ranking Universitário</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Third column-->
                <!--Fourth column-->
                <!--/.Fourth column-->
            </div>
        </div>
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a>conectoma.com.br</a>
            </div>
        </div>
    </footer>
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/683c53d12e.js"></script>

    <script>
        new WOW().init();
        $(document).ready(function(){
            $(function () {
                $('.viewMoreButton').click(function () {
                    $(this).prev('div').slideToggle();
                    return true;
                });
                $('.viewMoreButtonBelow').click(function () {
                    $(this).next('div').slideToggle();
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