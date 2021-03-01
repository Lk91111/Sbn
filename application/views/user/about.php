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
            <!-- About Me -->
            <div class="annie-about">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Senior</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">About Me</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">  </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                            <h3 class="annie-about-heading">SBN</h3>
                            
                            <p>We specialize in wedding photography, corporate, family and senior portraits, often traveling to your destination to capture the perfect moment in the perfect place. We will be there with you every step of the way to guarantee your special moments are captured for all time.

To us photography is about people being real and then letting us paint a picture of that moment to remember it forever. This is the story that matters most: real people, real stories, real moments.</p>
                            <p>We are incredibly blessed to have a team of photographers who work with us on any given weekend. Please take a few minutes to get to know us.

We would love to visit with you by phone or in person and talk about your wedding, event, portrait session or video project. Please reach out to us through the Contact Page. </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Team -->
            <div class="annie-teams">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Photographer</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Professional Team</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-team"> <img src="<?=  base_url()?>assets/images/team/01.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="#0">Peter Allen</a></h3> <span>Wedding Photographer</span>
                                        <p class="icon"> 
                                            <span><a href="#0"><i class="fab fa-twitter"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-instagram"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-behance"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-500px"></i></a></span> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-team"> <img src="<?=  base_url()?>assets/images/team/02.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="#0">Lena Snow</a></h3> <span>Sport Photographer</span>
                                        <p class="icon"> 
                                            <span><a href="#0"><i class="fab fa-twitter"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-instagram"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-behance"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-500px"></i></a></span> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-team"> <img src="<?=  base_url()?>assets/images/team/03.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="#0">Hannah Flynn</a></h3> <span>Model Photographer</span>
                                        <p class="icon"> 
                                            <span><a href="#0"><i class="fab fa-twitter"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-instagram"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-behance"></i></a></span> 
                                            <span><a href="#0"><i class="fab fa-500px"></i></a></span> 
                                        </p>
                                    </div>
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