<?php 
                        //testo se a sessao existi para exibir os menus
                        if(isset($_SESSION['login'])){
                            echo('

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administração
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./admin_cadastro.php">Cadastro</a>
                                <a class="dropdown-item" href="./admin_contato.php">Contato</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./sair">Sair</a>
                                </div>
                            </li>
                                                          
                            ');
                        }else{
                            echo('
                            <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                            </li>
                        ');
                        }
                    ?>