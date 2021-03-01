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
            <!-- Contact -->
            <div class="annie-contact">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Location</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Contact Us</h2> </div>
                    </div>
                    <!-- Map Section-->
                    </br>
                    </br>                 
 
                    <div class="row">
                        <!-- Contact Info -->
                        <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                            <h3 class="annie-contact-heading">I’m available for worldwide orders.</h3>
                            <p>There are always two people in every picture: 
                                <br />the photographer and the viewer.</p>
                            <p><b>Phone:</b> +91 744-555-666</p>
                            <p><b>Email:</b> photo@mania.com</p>
                            <p><b>Address:</b>Raipur(Chhattisgarh)</p>
                        </div>
                        <!-- Contact Form -->
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                            <h3 class="annie-contact-heading">Contact Form</h3>
                            <p>Interested to work with us?</p>
                            <form method="post" class="row" action="<?=base_url('Photo/contact')?>">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" placeholder="Name" required> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  name="mail" type="text" class="form-control" placeholder="Email"> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="style"> </label>
                                        <select name="serve" style="background-color: #1b1b1b; width:260px; color:#6c757d;">  
                                                  
                                                   <option value="wedding">Wedding Shoot</option>  
                                                    <option value="Portrait">Portrait Photography</option> 
                                                     <option value="Travel">Travel Photography</option> 
                                                      <option value="Product">Product Photography</option> 
                                                       <option value="Fashion">Fashion Photography</option> 
                                                        <option value="Sport">Sport Photography</option> 
                                                    
                                         </select>    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="serve">  </label>
                                         <select name="pack" style="background-color: #1b1b1b; width:260px;color:#6c757d;">  
                                                   
                                                     <option value="standard">Standard</option> 
                                                       <option value="Premium">Premium</option> 
                                                          <option value="Patinum">Patinum</option> 
                                         </select>   </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="msg" id="message" cols="30" rows="7" class="form-control" placeholder="Message & Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="submit" type="submit" class="btn btn-contact" value="Submit"> </div>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2q1gFSd75jKUnTDPq0nZWaMlEu6vL30"></script>
                <?php
    include 'inc/jquery.php';
?>
    </div>
</body>


</html>
