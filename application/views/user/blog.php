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
            <!-- Blog -->
            <div class="annie-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Read</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">News &amp; Blog</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                            <div class="blog-entry">
                                <a href="post.html" class="blog-img"><img src="<?=  base_url()?>assets/images/gallery/01.jpg" class="img-fluid" alt=""></a>
                                <div class="desc"> <span>Sep 25, 2021 | Fashion</span>
                                    <h3><a href="post.html">Model Viverra Convallis</a></h3>
                                    <p>Fusce suscipit, ante a hendrerit ullamcorper, risus nisl cursus purus, sit amet viverra ante nulla vel justo. Morbi justo erat, posuere vel libero bibendum convallis enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                            <div class="blog-entry">
                                <a href="post.html" class="blog-img"><img src="<?=  base_url()?>assets/images/gallery/02.jpg" class="img-fluid" alt=""></a>
                                <div class="desc"> <span>Sep 23, 2021 | Wedding</span>
                                    <h3><a href="post.html">Alique Wedding Morbi</a></h3>
                                    <p>Fusce suscipit, ante a hendrerit ullamcorper, risus nisl cursus purus, sit amet viverra ante nulla vel justo. Morbi justo erat, posuere vel libero bibendum convallis enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                            <div class="blog-entry">
                                <a href="post.html" class="blog-img"><img src="<?=  base_url()?>assets/images/gallery/11.jpg" class="img-fluid" alt=""></a>
                                <div class="desc"> <span>Sep 20, 2021 | Family</span>
                                    <h3><a href="post.html">Pharetra Molesti Neque</a></h3>
                                    <p>Fusce suscipit, ante a hendrerit ullamcorper, risus nisl cursus purus, sit amet viverra ante nulla vel justo. Morbi justo erat, posuere vel libero bibendum convallis enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                            <div class="blog-entry">
                                <a href="post.html" class="blog-img"><img src="<?=  base_url()?>assets/images/gallery/10.jpg" class="img-fluid" alt=""></a>
                                <div class="desc"> <span>Sep 18, 2021 | Bride</span>
                                    <h3><a href="post.html">Bibendum Bride Ante</a></h3>
                                    <p>Fusce suscipit, ante a hendrerit ullamcorper, risus nisl cursus purus, sit amet viverra ante nulla vel justo. Morbi justo erat, posuere vel libero bibendum convallis enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                            <!-- Pagination -->
                            <ul class="annie-pagination-wrap align-center">
                                <li><a href="blog.html#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="blog.html#">1</a></li>
                                <li><a href="blog.html#" class="active">2</a></li>
                                <li><a href="blog.html#">3</a></li>
                                <li><a href="blog.html#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
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