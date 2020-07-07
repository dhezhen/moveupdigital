<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Moveupdigital</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?=base_url()?>assets_web/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets_web/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets_web/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets_web/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets_web/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets_web/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets_web/css/style.css">
  



   
  
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="<?=base_url()?>home">
                        <h4> <i class="fas fa-home"></i> Moveupdigital.id</h4>
                                     
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                    
                        
                        
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== FEATRES TWO PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->

    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Portfolio</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div>
                    <div class="portfolio-menu text-center mt-50">
                        <ul>
                            <li data-filter="*" class="active">ALL WORK</li>
                            <?php foreach($kategori as $ktg):?>
                            <li data-filter=".<?=$ktg['kategori']?>-4"><?=$ktg['kategori']?></li>
                            <?php endforeach;?>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>

                <div class="col-lg-10 col-md-10">
                    <div class="row no-gutters grid mt-50">

                    <?php foreach($portpolio as $port):?>
                        <div class="col-lg-3 col-sm-6 <?=$port['kategori']?>-4 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?=base_url()?>assets/upload/portpolio/<?= $port['foto']?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?=base_url()?>assets/upload/portpolio/<?= $port['foto']?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?=base_url()?>assets_web/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?=base_url()?>assets_web/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <?php endforeach;?>


                        
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->
    

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                     <!-- footer logo -->
                    <ul class="social text-center">
                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">089-XXX-XXx-XX</span>
                      
                    </div>
                    <div class="copyright text-center mt-10">
                        <p class="text">Developerd by pesantrencoding.com </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->


<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="<?=base_url()?>assets_web/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url()?>assets_web/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="<?=base_url()?>assets_web/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets_web/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="<?=base_url()?>assets_web/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?=base_url()?>assets_web/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <!-- <script src="<?=base_url()?>assets_web/js/ajax-contact.js"></script> -->
    
    <!--====== Isotope js ======-->
    <script src="<?=base_url()?>assets_web/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=base_url()?>assets_web/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="<?=base_url()?>assets_web/js/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>assets_web/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="<?=base_url()?>assets_web/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/sweetalert2.all.min.js"  crossorigin="anonymous"></script>
  
    
</body>

</html>
