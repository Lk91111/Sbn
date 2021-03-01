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
            <!-- Slider -->
            <div id="home">
                <div class="annie-hero js-fullheight">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(<?=  base_url()?>assets/images/slider/abcd.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="mx-auto frame-inner">
                                                    <h1>SBN</h1>
                                                    <h2>Photography</h2> <span class="frame-1"></span> <span class="frame-2"></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(<?=  base_url()?>assets/images/slider/abc.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="mx-auto frame-inner">
                                                    <h1>SBN</h1>
                                                    <h2>Photography</h2> <span class="frame-1"></span> <span class="frame-2"></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- About Me -->
            <div class="annie-homepage-about">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 text-center profile-index animate-box" data-animate-effect="fadeInUp">
                            <p class="annie-about-me">While there is perhaps a province in which the photograph can tell us nothing more than what we see with our own eyes, there is another in which it proves to us how little our eyes permit us to see.</p>   </div>
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <div class="annie-homepage-gallery">
                <div class="container-fluid">
                    <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                        <div class="col-12">
                            <div class="row align-items-stretch">
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/01.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/01.jpg" alt="Image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/02.jpg" class="d-block annie-photo-item" data-caption="Wedding Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/02.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/03.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/03.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/04.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/04.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/05.jpg" class="d-block annie-photo-item" data-caption="Family Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/05.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/06.jpg" class="d-block annie-photo-item" data-caption="Sport Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/06.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/07.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/07.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/08.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/08.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/09.jpg" class="d-block annie-photo-item" data-caption="Baby Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/09.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/10.jpg" class="d-block annie-photo-item" data-caption="Wedding Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/10.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/11.jpg" class="d-block annie-photo-item" data-caption="Baby Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/11.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/gallery/12.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/12.jpg" alt="Image" class="img-fluid">
                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-stretch mt-60">
                        <div class="col-12">
                            <!-- show more -->
                            <div class="annie-show-more-container">
                                <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/13.jpg" class="d-block annie-photo-item" data-caption="Movie Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/13.jpg" alt="Image" class="img-fluid">
                                            
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/19.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/19.jpg" alt="Image" class="img-fluid">
                                            
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/15.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/15.jpg" alt="Image" class="img-fluid">
                                            
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/16.jpg" class="d-block annie-photo-item" data-caption="Model Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/16.jpg" alt="Image" class="img-fluid">
                                            
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/17.jpg" class="d-block annie-photo-item" data-caption="Fashion Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/17.jpg" alt="Image" class="img-fluid">
                                            
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/18.jpg" class="d-block annie-photo-item" data-caption="Travel Photo" data-fancybox="gallery"> <img src="<?=  base_url()?>assets/images/gallery/18.jpg" alt="Image" class="img-fluid">
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- add more -->
                            <div class="annie-more-wrapper txt-center animate-box" data-animate-effect="fadeInUp">
                                <a href="index.html#" class="annie-more-trigger flex"> <span class="plus flex-center">&nbsp;</span> </a>
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
        <?php
include 'inc/jquery.php';
            ?>
    </div>
</body>
</html>