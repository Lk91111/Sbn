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
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Photo Gallery</h2> 
                        </div>
                    </div>
                    <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                        <div class="col-12">
                            <div class="row align-items-stretch">
			        <?php
			        	foreach(array_reverse($gallery) as $photo)
				{
			        ?>
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="<?=  base_url()?>assets/images/dest/<?=$photo->img?>" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="images/gallery/01.jpg" alt="Image" class="img-fluid">
                                    </a>
                                </div>
                                <?php
				}
			        ?>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-stretch mt-60">
                        <div class="col-12">
                            <!-- show more -->
                            <div class="annie-show-more-container">
                                <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/13.jpg" class="d-block annie-photo-item" data-caption="Movie Photo" data-fancybox="gallery"> <img src="images/gallery/13.jpg" alt="Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="images/gallery/19.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="images/gallery/19.jpg" alt="Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/15.jpg" class="d-block annie-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="images/gallery/15.jpg" alt="Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href<?=  base_url()?>assets/images/gallery/16.jpg" class="d-block annie-photo-item" data-caption="Model Photo" data-fancybox="gallery"> <img src="images/gallery/16.jpg" alt="Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/17.jpg" class="d-block annie-photo-item" data-caption="Fashion Photo" data-fancybox="gallery"> <img src="images/gallery/17.jpg" alt="Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                        <a href="<?=  base_url()?>assets/images/gallery/18.jpg" class="d-block annie-photo-item" data-caption="Travel Photo" data-fancybox="gallery"> <img src="images/gallery/18.jpg" alt="Image" class="img-fluid">
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
                    
                    
                    <div class="row">
                        <div class="col-md-12 text-center mt-60"> <span class="heading-meta">Portfolio</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Video Gallery</h2> 
                        </div>
                    </div>
                    <div class="row align-items-stretch annie-photos mb-30" id="annie-section-photos">
                        <div class="col-12">
                            <!-- IMPORTANT: Some functionality (ajax, iframes, etc) will not work when you're opening local file directly on your browser, the code must be running on a web server. SOURCE: https://fancyapps.com/fancybox/3/docs/ -->
                            <div class="row align-items-stretch">
                                <!-- YouTube Popup -->
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <a data-fancybox="" href="https://www.youtube.com/watch?v=ybso7mzV2hY">
                                        <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/13.jpg">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                    <h6>Youtube Video (Popup)</h6>
                                </div>
                                <!-- Vimeo Popup -->
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                   <a data-fancybox="" data-ratio="2" href="https://vimeo.com/74295728">
                                        <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/14.jpg">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                    <h6>Vimeo Video (Popup)</h6>
                                </div>
                                <!-- Custom Video Popup -->
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <a data-fancybox="bigbuckbunny"  href="<?=  base_url()?>assets/images/video.mp4">
                                        <img class="img-fluid" src="<?=  base_url()?>assets/images/gallery/15.jpg">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                    <h6>Custom Video (Popup)</h6>
                                </div>
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
