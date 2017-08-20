

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
      <form class="form-signin" method="POST">
        <h1>
            <?php
                ini_set('display_errors',0);
                ini_set('display_startup_errors',0);
                error_reporting(-1);
                session_start();
                
                //$email=$_POST['email'];
                //$senha=$_POST['senha'];
                if(isset($_POST["email"])){
                    mysql_connect("localhost", "conectoma2", "abc123") or die("Erro na conexão sql!");
                    $db_selected = mysql_select_db("conectoma") or die ('Error updating database: '.mysql_error());
                    $email=$_POST["email"];
                    $senha=$_POST["senha"];
                    
                    //Proteger de SQL Injection:
                    $email = stripslashes($email);
                    $senha = stripslashes($senha);
                    $email = mysql_real_escape_string($email);
                    $senha = mysql_real_escape_string($senha);
                    //Executa pesquisa e conta usuarios
                    $sql="select * from users where email='$email'";
                    $result=mysql_query($sql);
                    $row = mysql_fetch_assoc($result);
                    if($row['senha']==$senha && $row['email']==$email && $email!="" && $senha!="")
                    {
                        session_start();
                        $_SESSION['user'] = $row['nome'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['tipo'] = $row['tipo'];
                        echo "Sucesso!";
                        header("location:index.php");
                    }
                    elseif($row['email']!=$email || $email=="")
                    {
                        echo "Email incorreto!<br>";
                    }
                    else
                    {
                        echo "Senha incorreta!";
                    }
                }
            ?>
        </h1>
        <h2 class="form-signin-heading">Entrar:</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
      </form>

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

</body>

</html>