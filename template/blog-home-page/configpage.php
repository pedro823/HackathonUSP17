<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Conectoma</title>

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
                <div class="col-lg-8">
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
                        <div class="config-title">
                            <h1 class="h1-responsive font-bold">Configurações</h1>
                        </div>

                        <div class="post-container">
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                                hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                                harum. Repellendus, impedit.</p>
                            <button class="btn btn-info">Leia mais</button>
                            <span class="post-tag">#hash</span>
                            <span class="post-tag">#tag</span>
                        </div>
                    </div>

                    <hr>
                    <nav>

                        <ul class="pagination flex-center pg-dark  wow fadeIn" data-wow-delay="0.2s">
                        </ul>
                    </nav>
                </div>
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
