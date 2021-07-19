<?php 
    // HEADER
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid">
                <div class="page-title">  
                    <hr>
                        <!-- Título -->
                        <h2 class="Titulo">Titulo</h2>
                    <hr>
                        <!-- Sub Título -->
                        <p class="SubTitulo">Sub_Titulo</p>
                    <hr>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Sub_Sub_Titulo</p>
                    <hr>
                        <!-- Texto -->
                        <p class="Texto">Texto</p>
                    <hr>
                    <!-- Importante -->
                    <div class="ImportanteCaixa">
                        <p class="ImportanteTitulo"> Importante</p>
                        <p class="ImportanteTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <hr>
                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                        </a>
                        <p class="FonteFigura">Fonte: Fonte da imagem fica aqui</p>
                    </div>

                    <!-- Imagem 01 - Begin -->
                    <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 1:</strong>  Nome da figura</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 01 - End -->
                    <hr>
                    <!-- Fique Atento -->
                    <div class="FiqueAtentoCaixa">
                        <p class="FiqueAtentoTitulo"> Fique Atento</p>
                        <p class="FiqueAtentoTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <hr>
                    <!-- Curiosidade -->
                    <div class="CuriosidadeCaixa">
                        <p class="CuriosidadeTitulo"> Curiosidade</p>
                        <p class="CuriosidadeTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <hr>
                    <p>Nota de rodapé</p>
                    <!-- Nota de Rodapé -->
                    <p class="NotaDeRodape">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <hr>
                    <!-- Atividade -->
                    <div class="AtividadeCaixa">
                        <p class="AtividadeTitulo"> Atividade</p>
                        <p class="AtividadeTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <hr>
                    <!-- Saiba Mais -->
                    <div class="SaibaMaisCaixa">
                        <p class="SaibaMaisTitulo"> Saiba Mais</p>
                        <p class="SaibaMaisTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <hr>
                    <div class="card text-black border-info Texto">
                        <div class="card-header"><strong>Exemplo de caixa</strong></div>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                    </div>  

                    <br>
                    <div class="card text-black border-success Texto">
                        <div class="card-header"><strong>EXEMPLO DE CAIXA</strong></div>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                    </div>
                    <hr>
                    Marcadores
                    <p class="Texto"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Texto</strong> – Lorem ipsum dolor sit amet</p>

                    <p class="Texto"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Lorem ipsum dolor sit amet</p>
                    <hr>
                    <!-- Bs  Callout -->
                    <p class="bs-callout bs-callout-success ">Bs  Callout</p>
                    <hr>
                    <!-- Texto informando onde clicar -->
                    <p>Texto informando para clicar</p>
                    <div class="text-center">
                        <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos icones abaixo</h6>
                    </div>
                    <hr>
                    <p class="Texto">Modal com Bs-Callout e cor do título diferente</p>

                    <div class="col-md-2">
                        <a href="#Fase04" class="CorCinzaEstado Icone" data-bs-toggle="modal" data-bs-target="#ModalExemplo"><i class="fa fa-bezier-curve fa-3x"></i><p>Exemplo</p></a>
                    </div>

                    <!-- Modal Exemplo - Begin -->
                    <div class="modal fade" id="ModalExemplo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header bg-VerdeEstadoClaro text-white">
                                    <h5 class="modal-title fw-bold" id="exampleModalLabel"><em>Exemplo </em></h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="bd-callout bd-callout-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Exemplo - End -->
                    
                    <hr>

                    <!-- CITAÇÃO -->
                    <p>Citação</p>
                    <div class="bd-callout bd-callout-success">
                        <p class="Texto">
                        <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em>
                        </p>
                    </div>

                    <hr>
                    
                    <p>As referencias bibliográficas estão em um arquivo separado, fica btn Próximo do último tópico </p>

                </div> <!-- CLASS PAGE TITLE FIM -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="./Referencias-Aula-01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>
            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
