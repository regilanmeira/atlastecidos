<!DOCTYPE html>
<style>
    img{border-radius:10px;}
    </style>
    
    
<html lang="pt-BR">
    <head>
        <?php include './cabecalho.php' ?>
    </head>
    <body>

        <?php include './topo.php' ?>



        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Raiz</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                   <div class="col-md-6 col-lg-4 mb-5">
                       
                            <img class="img-fluid" src="imagens/raiz/Alface_Primaria_001.jpg" alt="..." />
                            <div class="text-center mt-4">
                                <a class="btn btn-xl btn-outline-success" href="raiz_crescimento_primario.php">

                                    Crescimento primário
                                </a>
                            </div>

                        
                    </div>
  

                    <!-- Portfolio Item 2 -->
                    <div class="col-md-6 col-lg-4 mb-5">
                       
                            <img class="img-fluid" src="imagens/raiz/raiz crotalaria sp. epiderme e cutícula.jpg" alt="..." />
                            <div class="text-center mt-4">
                                <a class="btn btn-xl btn-outline-success" href="raiz_crescimento_secundario.php">

                                    Crescimento secundário
                                </a>
                            </div>

                        
                    </div>
                    

                    <!-- PARA ACRESCENTAR UM NOVO ITEM DENTRO DE RAIZ
                    BASTA COPIAR TODO O CODIGO RELACIONADO A UM ITEM DE PORTFOLIO
                    E TROCAR A IMAGEM, TROCAR O TEXTO E O LINK PARA ONDE SERÁ REDIRECIONADO -->
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
 
                        <img class="img-fluid" src="imagens/raiz/cacau clone CP06alagraizsudan20X.jpg" alt="..." />
                            <div class="text-center mt-4">
                                <a class="btn btn-xl btn-outline-success" href="raiz_histoquimica.php">

                                    Histoquímica
                                </a>
                            </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <?php include 'equipe.php' ?>

        <?php include 'referencias.php' ?>

        <?php include 'extras.php' ?>

        <?php include 'rodape.php' ?>







        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
