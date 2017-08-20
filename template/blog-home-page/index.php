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
    <link href='css/main.css' rel='stylesheet' />
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
                <!--Sidebar-->
                <div class="col-lg-3">

                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <h5 class="font-bold">Filtros:</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Pesquisa <i class="fa fa-plus" aria-hidden="true"></i></a>
                            <div class="list-group-item box-hidden">
                                <form class="form-inline">
                                    <input type="text" placeholder="&#xF002;" style="font-family:Arial, FontAwesome">
                                </form>
                            </div>
                            </div>
                            <a href="#" class="list-group-item">Categoria <i class="fa fa-plus" aria-hidden="true"></i></a>
                            <div class="list-group-item box-hidden">
                                <select class="form-control" id="sel1">
                                    <option>Iniciação Científica</option>
                                    <option>Mestrado</option>
                                    <option>Doutorado</option>
                                    <option>Doutorado Direto</option>
                                </select>
                            </div>
                            <a href="#" class="list-group-item">Universidades <i class="fa fa-plus" aria-hidden="true"></i></a>
                            <div class="list-group-item box-hidden">
                                <div class="checkbox">
                                    <input id="USP" type="checkbox">
                                    <label for="USP">
                                        USP
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="UNESP" type="checkbox">
                                    <label for="UNESP">
                                        UNESP
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="UNICAMP" type="checkbox">
                                    <label for="UNICAMP">
                                        UNICAMP
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="UFSCAR" type="checkbox">
                                    <label for="UFSCAR">
                                        UFSCAR
                                    </label>
                                </div>
                            </div>
                            <a href="#" class="list-group-item">Área de Conhecimento <i class="fa fa-plus" aria-hidden="true"></i></a>
                            <div class="list-group-item box-hidden">
                                <div class="checkbox">
                                    <input id="CA" type="checkbox">
                                    <label for="CA">
                                        Ciências Agrárias
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <input id="CB" type="checkbox">
                                    <label for="CB">
                                        Ciências Biológicas
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        Ciências Exatas e da Terra
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Ciências Humanas
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9">
                                        Ciências Sociais
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox10" type="checkbox">
                                    <label for="checkbox10">
                                        Ciências da Saúde
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox11" type="checkbox">
                                    <label for="checkbox11">
                                        Engenharias
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox12" type="checkbox">
                                    <label for="checkbox12">
                                        Linguística, Letras e Artes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--
                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.6s">
                        <h4 class="font-bold">Inscreva-se:</h4>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Inscreva-se e receba informações sobre as ICs</strong></p>
                                <p>Semanalmente o enviaremos notícias sobre suas áreas de interesse!</p>
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form1" class="form-control">
                                    <label for="form1">Seu nome</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Seu email</label>
                                </div>
                                <button class="btn btn-info">Envie!</button>

                            </div>
                        </div>
                    </div>
                    -->


                <!--/.Sidebar-->
                <!--Main column-->
                <div class="col-lg-9">

                    <!--Post-->
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
                        <!--Post data-->
                        <div class="post-title green"> <!-- Area+cidade -->
                            <h1 class="h1-responsive font-bold">Araraquara - Saúde, Farmácia, Farmacotecnia </h1>
                            <!--  <small class="text-muted">Secondary text</small> -->
                        </div>
                        <div class="post-container" id="post-container1">
                            <b>Título: </b> Nanopartículas lipídicas sólidas para a incorporação de trans-resveratrol: Desenvolvimento, caracterização físico-química, estudo de estabilidade e liberação in vitro <br>
                            <b>Pesquisador:</b> <a href="user.html">Vilma Leyton </a> <br>
                            <b>Vagas:</b> 5 <br>
                            <b>Instituição:</b> Universidade Estadual Paulista (UNESP)<br>
                            <b>Status:</b> Aberta<br>
                            <div class="viewmore" id="viewmore1">
                                <b>Data de início:</b> 01/09/2017<br>
                                <b>Data de término:</b> 31/08/2018<br>
                                <b>Fomento:</b> FAPESP<br>
                                <b>Requisitos:</b> Conhecimentos profundos sobre interações de nanopartículas.<br>
                                <b>Resumo:</b> As nanopartículas lipídicas sólidas (NLS) são dispersões formadas por partículas nanométricas que possuem alta estabilidade fisiológica e uma matriz composta por lipídeos sólidos. As NLS apresentam diversas vantagens frente aos demais sistemas de liberação, tais como a possibilidade de uma liberação prolongada, controlada e alvo-especifica de fármacos nelas encapsulados, o aumento da estabilidade dos fármacos, facilidade de produção em larga escala, entre outras. Entretanto, um dos maiores problemas encontrados no desenvolvimento das NLS é a sua instabilidade por longos períodos de tempo; há diversos relatos de expulsão do fármaco durante o período de estocagem. O trans-resveratrol (RES) é uma substância naturalmente encontrada em uvas, apresenta baixa solubilidade em água e alta permeabilidade da membrana. Embora existam vários estudos demonstrando os benefícios do RES para o tratamento do melanoma, outros deles demonstram a baixa biodisponibilidade dessa substância via oral em humanos, o que pode ser contornado pela sua administração cutânea. Dentro deste contexto, o objetivo deste trabalho é o desenvolvimento e estudo da estabilidade de NLS acrescidas de RES para administração cutânea, preparadas utilizando diferentes metodologias, entre elas Ultra Turrax a 11.000 a 24.000 rpm ou agitador magnético. Depois de homogeneizadas para a redução do tamanho das partículas, a pré-emulsão formada será sonicada e serão avaliadas diferentes condições de armazenamento, e sua influência na eficiência de encapsulação do RES e na estabilidade de formulações previamente desenvolvidas compostas por ácido esteárico (5%), fosfatidilcolina de soja (1,2%), poloxamer 407 (0,1%), polissorbato 80 (3,5%), glicerina (0,15%), phenonip (0,75%), etanol P.A. (1,25%), água milli-Q (quantidade suficiente para atingir a quantidade total de formulação) acrescidas ou não de brometo de cetiltrimetilamônio (0,45%). As formulações serão analisadas nos tempos 24 horas, 7, 15, 30, 60 e 90 dias após o preparo. Estas serão mantidas armazenadas em geladeira (4 ± 2 °C) durante todo o período de análise, e serão analisadas características organolépticas, determinação do pH e condutividade, determinação do diâmetro hidrodinâmico médio e potencial zeta. Espera-se, assim, ver a influência da técnica de preparação das NLS na estabilidade, eficiência de encapsulação e no perfil de liberação do RES.<br>
                            </div>
                            <a href="javascript:void()" class="viewMoreButton">Saiba mais</a>
                            <br>

                            <!--"Read more" button-->

                            <span class="post-tag">#nanopartículas lipídicas sólidas</span>
                            <span class="post-tag">#nanotecnologia</span>
                            <span class="post-tag">#estabilidade de medicamentos</span>
                            <span class="post-tag">#resveratrol</span>
                            <br>
                            <br>
                            <a class="viewMoreButtonBelow comment" href="javascript:void()"><h3>Comentários (1)</h3></a>
                            <div class="viewmore">
                                <hr>
                                <div class="comment"><b>José Cardoso:</b> Achei interessante! Tenho interesse em participar.</div>
                                    <br>
                                    <form class="form-inline">
                                        <input class="mr-sm-2" type="text" placeholder="Comentar" aria-label="pesquisar"><br>
                                        <input type="submit" name="submit" class="btn btn-info">
                                    </form>
                                </div>
                            <br>
                        </div>
                    </div>
                    <!--/.Post-->
                    <br>
                    <br>
                    <!--Post-->
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
                        <!--Post data-->
                        <div class="post-title red"> <!-- Area+cidade -->
                            <h1 class="h1-responsive font-bold">São Carlos - Engenharias, Engenharia Sanitária </h1>
                            <!--  <small class="text-muted">Secondary text</small> -->
                        </div>
                        <div class="post-container" id="post-container1">
                            <b>Título: </b> Avaliação da hidrólise enzimática (Aspergillus niger) do bagaço da cana-de-açúcar aplicado na produção biológica de hidrogênio empregando Clostridium butyricum como inóculo fermentativo<br>
                            <b>Pesquisador:</b> Rafaela Arantes Stancari <br>
                            <b>Vagas:</b> Andressa Tardim Cruz <br>
                            <b>Instituição:</b> Universidade de São Paulo (USP). Escola de Engenharia de São Carlos (EESC)<br>
                            <b>Status:</b> Aberta<br>
                            <div class="viewmore" id="viewmore1">
                                <b>Data de início:</b> 01/09/2017<br>
                                <b>Data de término:</b> 31/08/2018<br>
                                <b>Fomento:</b> FAPESP<br>
                                <b>Resumo:</b> As nanopartículas lipídicas sólidas (NLS) são dispersões formadas por partículas nanométricas que possuem alta estabilidade fisiológica e uma matriz composta por lipídeos sólidos. As NLS apresentam diversas vantagens frente aos demais sistemas de liberação, tais como a possibilidade de uma liberação prolongada, controlada e alvo-especifica de fármacos nelas encapsulados, o aumento da estabilidade dos fármacos, facilidade de produção em larga escala, entre outras. Entretanto, um dos maiores problemas encontrados no desenvolvimento das NLS é a sua instabilidade por longos períodos de tempo; há diversos relatos de expulsão do fármaco durante o período de estocagem. O trans-resveratrol (RES) é uma substância naturalmente encontrada em uvas, apresenta baixa solubilidade em água e alta permeabilidade da membrana. Embora existam vários estudos demonstrando os benefícios do RES para o tratamento do melanoma, outros deles demonstram a baixa biodisponibilidade dessa substância via oral em humanos, o que pode ser contornado pela sua administração cutânea. Dentro deste contexto, o objetivo deste trabalho é o desenvolvimento e estudo da estabilidade de NLS acrescidas de RES para administração cutânea, preparadas utilizando diferentes metodologias, entre elas Ultra Turrax a 11.000 a 24.000 rpm ou agitador magnético. Depois de homogeneizadas para a redução do tamanho das partículas, a pré-emulsão formada será sonicada e serão avaliadas diferentes condições de armazenamento, e sua influência na eficiência de encapsulação do RES e na estabilidade de formulações previamente desenvolvidas compostas por ácido esteárico (5%), fosfatidilcolina de soja (1,2%), poloxamer 407 (0,1%), polissorbato 80 (3,5%), glicerina (0,15%), phenonip (0,75%), etanol P.A. (1,25%), água milli-Q (quantidade suficiente para atingir a quantidade total de formulação) acrescidas ou não de brometo de cetiltrimetilamônio (0,45%). As formulações serão analisadas nos tempos 24 horas, 7, 15, 30, 60 e 90 dias após o preparo. Estas serão mantidas armazenadas em geladeira (4 ± 2 °C) durante todo o período de análise, e serão analisadas características organolépticas, determinação do pH e condutividade, determinação do diâmetro hidrodinâmico médio e potencial zeta. Espera-se, assim, ver a influência da técnica de preparação das NLS na estabilidade, eficiência de encapsulação e no perfil de liberação do RES.<br>
                            </div>
                            <a href="javascript:void()" class="viewMoreButton">Saiba mais</a>
                            <br>

                            <!--"Read more" button-->

                            <span class="post-tag">#bagaço de cana-de-açúcar</span>
                            <span class="post-tag">#clostridium</span>
                            <span class="post-tag">#fungos</span>
                            <span class="post-tag">#hidrólise enzimática</span>
                            <span class="post-tag">#tratamento biológico</span>
                            <span class="post-tag">#aspergillus niger</span>
                            <span class="post-tag">#reatores anaeróbios</span>
                            <span class="post-tag">#fermentação</span>
                            <br>
                            <br>
                        </div>
                    </div>
                    <!--/.Post-->
                    <br>
                    <br>
                    <!--Post-->
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
                        <!--Post data-->
                        <div class="post-title blue"> <!-- Area+cidade -->
                            <h1 class="h1-responsive font-bold">São Carlos - Engenharias, Engenharia Sanitária </h1>
                            <!--  <small class="text-muted">Secondary text</small> -->
                        </div>
                        <div class="post-container" id="post-container1">
                            <b>Título: </b> Avaliação da hidrólise enzimática (Aspergillus niger) do bagaço da cana-de-açúcar aplicado na produção biológica de hidrogênio empregando Clostridium butyricum como inóculo fermentativo<br>
                            <b>Pesquisador:</b> Rafaela Arantes Stancari <br>
                            <b>Vagas:</b> Andressa Tardim Cruz <br>
                            <b>Instituição:</b> Universidade de São Paulo (USP). Escola de Engenharia de São Carlos (EESC)<br>
                            <b>Status:</b> Aberta<br>
                            <div class="viewmore" id="viewmore1">
                                <b>Data de início:</b> 01/09/2017<br>
                                <b>Data de término:</b> 31/08/2018<br>
                                <b>Fomento:</b> FAPESP<br>
                                <b>Resumo:</b> As nanopartículas lipídicas sólidas (NLS) são dispersões formadas por partículas nanométricas que possuem alta estabilidade fisiológica e uma matriz composta por lipídeos sólidos. As NLS apresentam diversas vantagens frente aos demais sistemas de liberação, tais como a possibilidade de uma liberação prolongada, controlada e alvo-especifica de fármacos nelas encapsulados, o aumento da estabilidade dos fármacos, facilidade de produção em larga escala, entre outras. Entretanto, um dos maiores problemas encontrados no desenvolvimento das NLS é a sua instabilidade por longos períodos de tempo; há diversos relatos de expulsão do fármaco durante o período de estocagem. O trans-resveratrol (RES) é uma substância naturalmente encontrada em uvas, apresenta baixa solubilidade em água e alta permeabilidade da membrana. Embora existam vários estudos demonstrando os benefícios do RES para o tratamento do melanoma, outros deles demonstram a baixa biodisponibilidade dessa substância via oral em humanos, o que pode ser contornado pela sua administração cutânea. Dentro deste contexto, o objetivo deste trabalho é o desenvolvimento e estudo da estabilidade de NLS acrescidas de RES para administração cutânea, preparadas utilizando diferentes metodologias, entre elas Ultra Turrax a 11.000 a 24.000 rpm ou agitador magnético. Depois de homogeneizadas para a redução do tamanho das partículas, a pré-emulsão formada será sonicada e serão avaliadas diferentes condições de armazenamento, e sua influência na eficiência de encapsulação do RES e na estabilidade de formulações previamente desenvolvidas compostas por ácido esteárico (5%), fosfatidilcolina de soja (1,2%), poloxamer 407 (0,1%), polissorbato 80 (3,5%), glicerina (0,15%), phenonip (0,75%), etanol P.A. (1,25%), água milli-Q (quantidade suficiente para atingir a quantidade total de formulação) acrescidas ou não de brometo de cetiltrimetilamônio (0,45%). As formulações serão analisadas nos tempos 24 horas, 7, 15, 30, 60 e 90 dias após o preparo. Estas serão mantidas armazenadas em geladeira (4 ± 2 °C) durante todo o período de análise, e serão analisadas características organolépticas, determinação do pH e condutividade, determinação do diâmetro hidrodinâmico médio e potencial zeta. Espera-se, assim, ver a influência da técnica de preparação das NLS na estabilidade, eficiência de encapsulação e no perfil de liberação do RES.<br>
                            </div>
                            <a href="javascript:void()" class="viewMoreButton">Saiba mais</a>
                            <br>

                            <!--"Read more" button-->

                            <span class="post-tag">#bagaço de cana-de-açúcar</span>
                            <span class="post-tag">#clostridium</span>
                            <span class="post-tag">#fungos</span>
                            <span class="post-tag">#hidrólise enzimática</span>
                            <span class="post-tag">#tratamento biológico</span>
                            <span class="post-tag">#aspergillus niger</span>
                            <span class="post-tag">#reatores anaeróbios</span>
                            <span class="post-tag">#fermentação</span>
                            <br>
                            <br>
                        </div>
                    </div>
                    <!--/.Post-->
                    <br>
                    <br>
                    <!--Post-->
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <!--Post data-->
                        <h1 class="h1-responsive font-bold mt-5">Post title </h1>
                        <small class="text-muted">Secondary text</small>

                        <br>

                        <!--Featured image -->
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(127).jpg" class="img-fluid " alt="">
                            <div class="mask">
                            </div>
                        </div>

                        <br>

                        <!--Post excerpt-->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                            hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                            harum. Repellendus, impedit.</p>

                        <!--"Read more" button-->
                        <button class="btn btn-info">Read more</button>
                    </div>
                    <!--/.Post-->

                    <hr>

                    <!--Post-->
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.6s">
                        <!--Post data-->
                        <h1 class="h1-responsive font-bold mt-5">Post title <small class="text-muted">Secondary text</small></h1>

                        <br>

                        <!--Featured image -->
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(128).jpg" class="img-fluid" alt="">
                            <div class="mask">
                            </div>
                        </div>

                        <br>

                        <!--Post excerpt-->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                            hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                            harum. Repellendus, impedit.</p>

                        <!--"Read more" button-->
                        <button class="btn btn-info">Read more</button>
                    </div>
                    <!--/.Post-->

                    <hr>

                    <!--Pagination-->
                    <nav>
                        <ul class="pagination flex-center pg-dark  wow fadeIn" data-wow-delay="0.2s">
                            <!--Arrow left-->
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!--/.Pagination-->

                </div>


            </div>
        </div>
        <!--/.Main layout-->
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
    <script>
    var $btns = $('.btn').click(function() {
      if (this.id == 'all') {
        $('#parent > div').fadeIn(450);
      } else {
        var $el = $('.' + this.id).fadeIn(450);
        $('#parent > div').not($el).hide();
      }
      $btns.removeClass('active');
      $(this).addClass('active');
    })
    </script>

</body>

</html>
