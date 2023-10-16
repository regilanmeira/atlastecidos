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
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Crescimento secundário</h2>
                <br />
                <p class="mb-4">
                    Essa estrutura é resultado da atividade do câmbio vascular e do felogênio. O câmbio origina para a parte mais interna o xilema secundário e para a parte mais externa o floema secundário. Nesse tipo de crescimento o córtex é ausente. O felogênio origina células mais interna da raiz, as quais se diferenciam em feloderme (tecido vivo). Origina também células mais internas, que se diferenciam e dão origem ao súber, que é um tecido morto composto de células denominadas suberinas, que protegem a raiz 
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
                            <img class="img-fluid" src="imagens/raiz/crotalaria_sp_001.jpg" alt="..." />
                       <h5>Crotalaria sp.</h5>
                        </div>
                    </div>
                    
                    
                    <!-- PARA CRIAR UM NOVO ITEM, COPIAR TODO O CÓDIGO DO ITEM E TROCAR
                    O TEXTO (H5), A IMAGEM (IMG) E O data-bs-target PARA O NÚMERO DO MODAL -->
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="imagens/raiz/Alface_Secundaria.jpg" alt="..." />
                       <h5>Lactuca sativa</h5>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="imagens/raiz/cacau alagado.jpg" alt="..." />
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


        <?php include './raiz_crescimento_secundario_modal.php' ?>


       
        
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
