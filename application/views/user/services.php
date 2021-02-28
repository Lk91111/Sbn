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
            <!-- Services -->
            <div class="annie-service">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">What We Do</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Services</h2> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-services">
                                <a href="services-post.html"> <img src="<?=  base_url()?>assets/images/services/02.jpg" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <div class="annie-icon"> <i class="fa fa-camera"></i> </div>
                                            <h3>Wedding Shoots</h3> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-services">
                                <a href="services-post.html"> <img src="<?=  base_url()?>assets/images/services/06.jpg" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <div class="annie-icon"> <i class="fa fa-camera"></i> </div>
                                            <h3><a href="#">Portrait Photography</a></h3> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-services">
                                <a href="services-post.html"> <img src="<?=  base_url()?>assets/images/services/05.jpg" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <div class="annie-icon"> <i class="fa fa-camera"></i> </div>
                                            <h3><a href="#">Travel Photography</a></h3> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-services">
                                <a href="services-post.html"> <img src="<?=  base_url()?>assets/images/services/04.jpg" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <div class="annie-icon"> <i class="fa fa-camera"></i> </div>
                                            <h3><a href="#">Product Photography</a></h3> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-services">
                                <a href="services-post.html"> <img src="<?=  base_url()?>assets/images/services/01.jpg" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <div class="annie-icon"> <i class="fa fa-camera"></i> </div>
                                            <h3><a href="#">Fashion Photography</a></h3> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-services">
                                <a href="services-post.html"> <img src="<?=  base_url()?>assets/images/services/03.jpg" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <div class="annie-icon"> <i class="fa fa-camera"></i> </div>
                                            <h3><a href="#">Sport Photography</a></h3> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-60 text-center animate-box" data-animate-effect="fadeInUp"> <span class="heading-meta">Interested to work with us?</span>
                            <div class="form-group"><a href="<?=base_url()?>contact">
                                <input type="submit" class="btn btn-contact" value="Contact With Us"> </div></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing -->
            <div class="annie-pricing">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Packages</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Pricing</h2> 
                        </div>
                    </div>
                    <div class="row">
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner img-grayscale" style="background-image: url(<?=  base_url()?>assets/images/pricing/1.jpg)">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Standart</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">300</span> </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>3 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>50 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner" style="background-image: url(<?=  base_url()?>assets/images/pricing/2.jpg)">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Premium</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">450</span> </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>6 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>100 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner" style="background-image: url(<?=  base_url()?>assets/images/pricing/3.jpg)">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Platinum</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">750</span> </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>12 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>250 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
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
