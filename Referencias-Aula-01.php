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
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>

                            <p></p>

                            <p class="Texto">VASCONCELOS, Carlos Eduardo de. <strong>Mediação de conflitos e práticas restaurativas. Editora</strong> Método, São Paulo, 2008.</p>

                            <p class="Texto">PAULILLO, Júlio. <strong>Tudo o que você precisa saber sobre negociação e gestão de conflitos: definição, tipos, estágios, reações e principais técnicas</strong>. Novembro 2011. Disponível em: <a href="https://www.agendor.com.br/blog/negociacao-e-gestao-de-conflitos" target="_blank">https://www.agendor.com.br/blog/negociacao-e-gestao-de-conflitos</a>. Acesso em: 01 nov. 2020.</p>

                            <p class="Texto">AGENDOR. <strong>Fases do processo de negociação: a sutil arte da troca de concessões</strong>. Novembro 2011. Disponível em: <a href="https://www.agendor.com.br/blog/fases-processo-de-negociacao/?print=print" target="_blank">https://www.agendor.com.br/blog/fases-processo-de-negociacao/?print=print</a>. Acessado em 01 nov. 2020</p>

                            <p class="Texto">HBR Staff. <strong>Preparando a sua estratégia emocional</strong>. Novembro 2011. Disponível em: <a href="https://hbrbr.com.br/preparando-a-sua-estrategia-emocional" target="_blank">https://hbrbr.com.br/preparando-a-sua-estrategia-emocional</a>. Acessado em 01 nov. 2020</p>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 01 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
