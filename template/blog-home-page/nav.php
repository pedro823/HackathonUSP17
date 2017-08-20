<header>
        
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand nav-link" href="index.html">Conectoma</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">O que é uma IC?</a>
                        </li>
                        <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ranking das Universidades
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="profile.html">USP</a>
                                <a class="dropdown-item" href="" target="_blank">Unicamp</a>
                                <a class="dropdown-item" href="" target="_blank">UNESP</a>
                                <a class="dropdown-item" href="" target="_blank">UFSCAR</a>
                            </div>
                        </li>
                    </ul>
                      <?php
                        session_start();//Inicia ou resume a sessão, para poder verificar se usuário ja está logado
                          if(isset ($_SESSION['user']) == true){ //Verifica se o usuário esta definido na sessao
                            echo '<li class="nav-item btn-group"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true"></i>'.$_SESSION['user'].'</a><div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="configpage.php" target="_blank">Configurações</a><a class="dropdown-item" href="logout.php" target="_blank">Log Out</a></div></li>';
                          }
                          else{
                            echo '<a class="nav-link" href="signin.php">Login</a>';
                          }
                      ?>
                      
                      <!--
                      <form class="form-inline">
                      <input class="form-control mr-sm-2" type="text" placeholder="Pesquise sua IC" aria-label="Pesquise sua IC">
                      </form>
                      -->
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

    </header>