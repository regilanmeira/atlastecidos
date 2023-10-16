<!DOCTYPE html>
<html lang="pt-BR">
    <head>
     <?php include './cabecalho.php' ?>
    </head>
    <body>
        
        <?php include './topo.php' ?>
        
        <style>
            h5{
                text-align: center;
                margin-top:5px;
                font-style: italic;
                
            }
        </style>
       
<!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Histoquímica</h2>
                <br />
                <p>
                    A técnica químico-histológica de identificação botânica de substâncias dos vegetais está baseada no uso de reagentes cito ou químicos-histológicos previamente estabelecidos.
                </p>
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
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="imagens/caule/crotalaria caule histoquimica 1.jpg" alt="..." />
                            <h5>Crotalaria sp.</h5>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="imagens/caule/alface histoquimica 1.jpg" alt="..." />
                            <h5>Lactuca sativa</h5>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="imagens/caule/theobroma cacao histoquimica 1.jpg" alt="..." />
                            <h5>Theobroma cacao</h5>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        
        
        
        
        

         <?php include 'equipe.php' ?>

        <?php include 'referencias.php' ?>

        <?php include 'extras.php' ?>

        <?php include 'rodape.php' ?>


        <?php include 'caule_histoquimica_modal.php' ?>


       
        
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
