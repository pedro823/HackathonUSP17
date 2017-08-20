<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
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
                <div class="col-lg-3" id="filterControls">
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
                                <select class="form-control" name="version-select" id="version-select">
                                    <option value="ALL">Todas</option>
                                    <option value="IC">Inicia��o Cient�fica</option>
                                    <option value="ME">Mestrado</option>
                                    <option value="PHD">Doutorado</option>
                                    <option value="PHDD">Doutorado Direto</option>
                                </select>
                            </div>
                            <a href="#" class="list-group-item">Universidades <i class="fa fa-plus" aria-hidden="true"></i></a>
                            <div class="list-group-item box-hidden">
                                <div class="checkbox">
                                    <input id="checkbox1" value="USP" type="checkbox">
                                    <label for="checkbox1">
                                        USP
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox2" value="UNESP"type="checkbox">
                                    <label for="checkbox2">
                                        UNESP
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox3" value="UNICAMP" type="checkbox">
                                    <label for="checkbox3">
                                        UNICAMP
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox4" value="UFSCAR" type="checkbox">
                                    <label for="checkbox4">
                                        UFSCAR
                                    </label>
                                </div>
                            </div>
                            <a href="#" class="list-group-item">�rea de Conhecimento <i class="fa fa-plus" aria-hidden="true"></i></a>
                            <div class="list-group-item box-hidden">
                                <div class="checkbox">
                                    <input id="checkbox5" value="CA" type="checkbox">
                                    <label for="checkbox5">
                                        Ci�ncias Agr�rias
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <input id="checkbox6" value="CB" type="checkbox">
                                    <label for="checkbox6">
                                        Ci�ncias Biol�gicas
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox7" value="CE" type="checkbox">
                                    <label for="checkbox7">
                                        Ci�ncias Exatas e da Terra
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox8" value="CH" type="checkbox">
                                    <label for="checkbox8">
                                        Ci�ncias Humanas
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox9" value="CSo" type="checkbox">
                                    <label for="checkbox9">
                                        Ci�ncias Sociais
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox10" value="CSa" type="checkbox">
                                    <label for="checkbox10">
                                        Ci�ncias da Sa�de
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox11" value="ENG" type="checkbox">
                                    <label for="checkbox11">
                                        Engenharias
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox12" value="LG" type="checkbox">
                                    <label for="checkbox12">
                                        Lingu�stica, Letras e Artes
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
                                <p><strong>Inscreva-se e receba informa��es sobre as ICs</strong></p>
                                <p>Semanalmente o enviaremos not�cias sobre suas �reas de interesse!</p>
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
                <?php
                    error_reporting(-1);
                    ini_set('display_errors',0);
                    ini_set('display_startup_errors',0);
                    mysql_connect("localhost", "conectoma2", "abc123") or die("Erro na conex�o sql!");
                    mysql_select_db("conectoma") or die ('Error updating database: '.mysql_error());
                    $sql="select * from posts";
                    $result=mysql_query($sql);
                    $numRows = mysql_num_rows($result);
                    $out = "";
                    while ($row = mysql_fetch_assoc($result)){
                        $tagText = "";
                        $tags = split(":",$row["tags"]);
                        foreach($tags as $tag){
                            $tagText.='<span class="post-tag">#'.$tag.'</span>';
                        }
                        $out.='<div class="post-wrapper wow fadeIn USP" data-wow-delay="0.2s"><div class="post-title green"><h1 class="h1-responsive font-bold">'.$row["area"].'</h1></div>'
                        .'<div class="post-container" id="post-container1">'
                        .'<b>T�tulo: </b> '.$row["area"].'<br>'
                        .'<b>Cidade:</b> '.$row["cidade"].'<br>'
                        .'<b>Pesquisador:</b> <a href="user.php">'.$row["pesquisador"].'</a> <br>'
                        .'<b>Vagas:</b>'.$row["vagas"].'<br>'
                        .'<b>Institui��o:</b>'.$row["instituicao"].'<br>'
                        .'<b>Status:</b>'.$row["status"].'<br>'
                        .'<div class="viewmore" id="viewmore1">'
                        .'<b>Data de in�cio:</b>'.$row["dataInicio"].'<br>'
                        .'<b>Data de t�rmino:</b> '.$row["dataFim"].'<br>'
                        .'<b>Fomento:</b> FAPESP<br>'
                        .'<b>Requisitos:</b> Conhecimentos profundos sobre intera��es de nanopart�culas.<br>'
                        .'<b>Resumo:</b>'.$row["resumo"].'<br>'
                        .'</div><a href="javascript:void()" class="viewMoreButton">Saiba mais</a><br>'
                        .$tagText
                        .'<br><br>'
                        .'<a class="viewMoreButtonBelow comment" href="javascript:void()"><h3>Coment�rios (1)</h3></a><div class="viewmore"><hr><div class="comment"><b>Jos� Cardoso:</b> Achei interessante! Tenho interesse em participar.</div><br><form class="form-inline"><input class="mr-sm-2" type="text" placeholder="Comentar" aria-label="pesquisar"><br><input type="submit" name="submit" class="btn btn-info"></form></div><br></div></div><br><br>';
                    }
                    echo $out;

                ?>
                
                    <!--/.Post-->
                    
                    <!--Post-->
                    <div class="post-wrapper wow fadeIn CA" data-wow-delay="0.2s">
                        <!--Post data-->
                        <div class="post-title red"> <!-- Area+cidade -->
                            <h1 class="h1-responsive font-bold">Engenharias, Engenharia Sanit�ria </h1>
                            <!--  <small class="text-muted">Secondary text</small> -->
                        </div>
                        <div class="post-container" id="post-container1">
                            <b>T�tulo: </b> Avalia��o da hidr�lise enzim�tica (Aspergillus niger) do baga�o da cana-de-a��car aplicado na produ��o biol�gica de hidrog�nio empregando Clostridium butyricum como in�culo fermentativo<br>
                            <b>Pesquisador:</b> Rafaela Arantes Stancari <br>
                            <b>Vagas:</b> 5 <br>
                            <b>Institui��o:</b> Universidade de S�o Paulo (USP). Escola de Engenharia de S�o Carlos (EESC)<br>
                            <b>Status:</b> Aberta<br>
                            <div class="viewmore" id="viewmore1">
                                <b>Data de in�cio:</b> 01/09/2017<br>
                                <b>Data de t�rmino:</b> 31/08/2018<br>
                                <b>Fomento:</b> FAPESP<br>
                                <b>Resumo:</b> As nanopart�culas lip�dicas s�lidas (NLS) s�o dispers�es formadas por part�culas nanom�tricas que possuem alta estabilidade fisiol�gica e uma matriz composta por lip�deos s�lidos. As NLS apresentam diversas vantagens frente aos demais sistemas de libera��o, tais como a possibilidade de uma libera��o prolongada, controlada e alvo-especifica de f�rmacos nelas encapsulados, o aumento da estabilidade dos f�rmacos, facilidade de produ��o em larga escala, entre outras. Entretanto, um dos maiores problemas encontrados no desenvolvimento das NLS � a sua instabilidade por longos per�odos de tempo; h� diversos relatos de expuls�o do f�rmaco durante o per�odo de estocagem. O trans-resveratrol (RES) � uma subst�ncia naturalmente encontrada em uvas, apresenta baixa solubilidade em �gua e alta permeabilidade da membrana. Embora existam v�rios estudos demonstrando os benef�cios do RES para o tratamento do melanoma, outros deles demonstram a baixa biodisponibilidade dessa subst�ncia via oral em humanos, o que pode ser contornado pela sua administra��o cut�nea. Dentro deste contexto, o objetivo deste trabalho � o desenvolvimento e estudo da estabilidade de NLS acrescidas de RES para administra��o cut�nea, preparadas utilizando diferentes metodologias, entre elas Ultra Turrax a 11.000 a 24.000 rpm ou agitador magn�tico. Depois de homogeneizadas para a redu��o do tamanho das part�culas, a pr�-emuls�o formada ser� sonicada e ser�o avaliadas diferentes condi��es de armazenamento, e sua influ�ncia na efici�ncia de encapsula��o do RES e na estabilidade de formula��es previamente desenvolvidas compostas por �cido este�rico (5%), fosfatidilcolina de soja (1,2%), poloxamer 407 (0,1%), polissorbato 80 (3,5%), glicerina (0,15%), phenonip (0,75%), etanol P.A. (1,25%), �gua milli-Q (quantidade suficiente para atingir a quantidade total de formula��o) acrescidas ou n�o de brometo de cetiltrimetilam�nio (0,45%). As formula��es ser�o analisadas nos tempos 24 horas, 7, 15, 30, 60 e 90 dias ap�s o preparo. Estas ser�o mantidas armazenadas em geladeira (4 � 2 �C) durante todo o per�odo de an�lise, e ser�o analisadas caracter�sticas organol�pticas, determina��o do pH e condutividade, determina��o do di�metro hidrodin�mico m�dio e potencial zeta. Espera-se, assim, ver a influ�ncia da t�cnica de prepara��o das NLS na estabilidade, efici�ncia de encapsula��o e no perfil de libera��o do RES.<br>
                            </div>
                            <a href="javascript:void()" class="viewMoreButton">Saiba mais</a>
                            <br>

                            <!--"Read more" button-->

                            <span class="post-tag">#baga�o de cana-de-a��car</span>
                            <span class="post-tag">#clostridium</span>
                            <span class="post-tag">#fungos</span>
                            <span class="post-tag">#hidr�lise enzim�tica</span>
                            <span class="post-tag">#tratamento biol�gico</span>
                            <span class="post-tag">#aspergillus niger</span>
                            <span class="post-tag">#reatores anaer�bios</span>
                            <span class="post-tag">#fermenta��o</span>
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
                            <h1 class="h1-responsive font-bold">Ci�ncias Humanas, Filosofia </h1>
                            <!--  <small class="text-muted">Secondary text</small> -->
                        </div>
                        <div class="post-container" id="post-container1">
                            <b>T�tulo: </b> Walter Benjamin e o conceito de modernidade nos ensaios sobre Baudelaire<br>
                            <b>Pesquisador:</b> Luiz S�rgio Repa <br>
                            <b>Vagas:</b> 1 <br>
                            <b>Institui��o:</b> Universidade de S�o Paulo (USP). Faculdade de Filosofia, Letras e Ci�ncias Humanas (FFLCH)<br>
                            <b>Status:</b> Aberta<br>
                            <div class="viewmore" id="viewmore1">
                                <b>Data de in�cio:</b> 01/09/2017<br>
                                <b>Data de t�rmino:</b> 31/08/2018<br>
                                <b>Fomento:</b> FAPESP<br>
                                <b>Resumo:</b> O presente projeto busca definir os contornos e a especificidade do conceito de modernidade na obra de Walter Benjamin, delineados na d�cada de 1930, sobretudo nos ensaios sobre o poeta franc�s Charles Baudelaire. Trata-se de buscar a constela��o em que se configura o conceito de modernidade em ""A Paris do Segundo Imp�rio na obra de Baudelaire"" (1938) e em ""Sobre alguns motivos na obra de Baudelaire"" (1939). Busca-se determinar as inflex�es pr�prias que esse conceito assume em cada texto, lan�ando m�o, sempre que necess�rio, de outras obras fundamentais do autor e da ampla tradi��o na qual ele se insere, a Teoria Cr�tica e suas grandes linhas de pensamento. Desse modo, privilegia-se aqui aqueles momentos da obra de Benjamin em que o conceito de modernidade � enfaticamente nomeado, sobretudo no primeiro ensaio sobre Baudelaire. Ao mesmo tempo, mostra-se indispens�vel que a busca do conceito de modernidade leve em conta o segundo ensaio sobre Baudelaire, uma vez que este, al�m de tratar-se de uma revis�o do primeiro texto a pedido do Instituto de Pesquisa Social, apresenta o conceito de modernidade num arranjo constelacional novo, integrando e reelaborando tanto elementos do texto de 1938, quanto temas de outras obras da d�cada de 1930.<br>
                            </div>
                            <a href="javascript:void()" class="viewMoreButton">Saiba mais</a>
                            <br>

                            <!--"Read more" button-->

                            <span class="post-tag">#humanas</span>
                            <span class="post-tag">#filosofia</span>
                            <span class="post-tag">#modernidade</span>
                            <span class="post-tag">#teoria cr�tica</span>
                            <br>
                            <br>
                        </div>
                    </div>
                    <br>
                    <hr>
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
            $(function(){
                $("#footerload").load("footer.php");
            });
    </script>
    <script>
    var sections = $('.post-wrapper');
    function updateContentVisibility(){
    var checked = $("#filterControls :checkbox:checked");
    if(checked.length){
        sections.hide();
        checked.each(function(){
            $("." + $(this).val()).show();
        });
    } else {
        sections.show();
    }
}

    $("#filterControls :checkbox").click(updateContentVisibility);
    updateContentVisibility();
    </script>
    <script>
    $('#version-select').change(function(){
        var val = $(this).val();
        if(val == "ALL") { $(sections).show(); }
        else { 
        var lastThreeChars = val.substring(val.length - 3);
        $(sections).hide();
        $('div[class$="' + lastThreeChars + '"]').show();
        }});
    </script>

</body>

</html>
