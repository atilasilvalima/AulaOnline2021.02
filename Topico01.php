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
        <div id="Inicio"></div>
        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->


                <div class="main-content container-fluid Texto">
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                                <div class="page-title">
                                
                                <h2 class="Titulo" >Tópico 01 - Nome do tópico 01</h2>
                                <br>
                                <p class="Texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

                                <p class="Texto">Exemplo de imagem</p>

                            </div> <!-- CLASS PAGE TITLE FIM -->                            
                        </div> <!-- End col-md-10 -->
                        <div class="col-md-1"></div>
                    </div> <!-- End row -->

                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                        <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div>
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
