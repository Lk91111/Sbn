          <?php
    include 'inc/head.php';
?>
    <!-- Progress-wrapp scroll-button -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
    </div>
    <!-- Mouse cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Main -->
    <div class="annie-page"> 
       <a href="#" class="js-annie-nav-toggle annie-nav-toggle"><i></i></a>
        <!-- Sidebar -->
                <?php
        include 'inc/sidebar.php';
        ?>
        <!-- Content -->
        <div class="annie-main">
            <!-- Gallery -->
            <div class="annie-gallery">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Portfolio</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Masonry Gallery</h2> </div>
                    </div>
                    <div class="row annie-photos">
                        <div class="col-12 col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/20.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/20.jpg"> </a>
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/06.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/06.jpg"> </a>
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/07.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/07.jpg"> </a>
                        </div>
                        <div class="col-12 col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/01.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/01.jpg"> </a>
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/02.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/02.jpg"> </a>
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/21.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/21.jpg"> </a>
                        </div>
                        <div class="col-12 col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/04.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/04.jpg"> </a>
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/22.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/22.jpg"> </a>
                                <a class="d-block annie-photo-item" data-fancybox="images" data-caption="Potrait Photo" href="<?=  base_url()?>assets/images/gallery/08.jpg"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/08.jpg"> </a>
                        </div>
                    </div>
                    <!-- Video Gallery -->
                    <div class="row">
                        <div class="col-md-12 text-center mt-60"> <span class="heading-meta">Portfolio</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Video Gallery</h2> </div>
                    </div>
                    <div class="row align-items-stretch annie-photos mb-30" id="annie-section-photos">
                        <div class="col-12">
                            <!-- IMPORTANT: Some functionality (ajax, iframes, etc) will not work when you're opening local file directly on your browser, the code must be running on a web server. SOURCE: https://fancyapps.com/fancybox/3/docs/ -->
                            <div class="row align-items-stretch">
                                <!-- YouTube Popup -->
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <a data-fancybox="" href="https://www.youtube.com/watch?v=ybso7mzV2hY"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/13.jpg">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                    <h6>Youtube Video (Popup)</h6> </div>
                                <!-- Vimeo Popup -->
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <a data-fancybox="" data-ratio="2" href="https://vimeo.com/74295728"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/14.jpg">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                    <h6>Vimeo Video (Popup)</h6> </div>
                                <!-- Custom Video Popup -->
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <a data-fancybox="bigbuckbunny" href="images/video.mp4"> <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/15.jpg">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                    <h6>Custom Video (Popup)</h6> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
                      <?php
    include 'inc/footer.php';
?>
        </div>
        <!-- jQuery -->
                  <?php
    include 'inc/jquery.php';
?>
    </div>
</body>


</html>