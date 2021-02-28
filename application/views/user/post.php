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
            <div class="annie-post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 image-content animate-box fadeInUp animated" data-animate-effect="fadeInUp"> <img src="<?=  base_url()?>assets/images/post.jpg" class="img-fluid mb-30" alt=""> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Fashion</span>
                            <h2 class="annie-post-heading animate-box" data-animate-effect="fadeInUp">Basics of Modeling</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                            <p>Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer masin libero semper. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Fusce mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Yuroin non lorem ac erat suscipit bibendum nulla facilisi.</p>
                            <p>Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in tortor in, volutpat sollicitudin libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer massa in libero semper. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Fusce mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
                            <p>Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien veli, conseyer turpeutionyer massa in libero semper sedeuter nunc volutpat, mollis sapien veletion. Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in tortor in, volutpat sollicitudin libero.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInUp">
                            <!-- Comments -->
                            <div class="clear" id="comment-list">
                                <div class="comments-area" id="comments">
                                    <h2 class="comments-title">3 Comments</h2>
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/team/06.jpg" alt="">
                                                    <h3 class="name">Peter Berry</h3> </div>
                                                <div class="comment-meta"> Sep 28, 2021 </div>
                                                <p>Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien veli, conseyer turpeutionyer massa in libero semper sedeuter nunc volutpat, mollis sapien veletion. Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in tortor in, volutpat sollicitudin libero.</p>
                                                <div class="reply"> <a href="#0" class="comment-reply-link"><i class="fa fa-reply"></i> Replay</a> </div>
                                            </div>
                                            <!-- sub comment block -->
                                            <ol class="children">
                                                <li class="comment odd parent">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/team/04.jpg" alt="">
                                                            <h3 class="name">Lena Glenn</h3> </div>
                                                        <div class="comment-meta"> Sep 27, 2021 </div>
                                                        <p>Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien veli, conseyer turpeutionyer massa in libero semper sedeuter nunc volutpat, mollis sapien veletion. Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus.</p>
                                                        <div class="reply"> <a href="#0" class="comment-reply-link"><i class="fa fa-reply"></i> Replay</a> </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="comment">
                                            <!-- comment block -->
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/team/05.jpg" alt="">
                                                    <h3 class="name">Cerica Smith</h3> </div>
                                                <div class="comment-meta"> Sep 27, 2021 </div>
                                                <p>Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien veli, conseyer turpeutionyer massa in libero semper sedeuter nunc volutpat, mollis sapien veletion. Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in tortor in, volutpat sollicitudin libero.</p>
                                                <div class="reply"> <a href="#0" class="comment-reply-link"><i class="fa fa-reply"></i> Replay</a> </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                            <!-- Leave a comments -->
                            <h3 class="annie-contact-heading">Leave a Comments</h3>
                            <form method="post" class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" required> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email"> </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-contact" value="Submit Comment"> </div>
                                </div>
                            </form>
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