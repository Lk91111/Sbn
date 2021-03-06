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
                    <div class="annie-map-section">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInUp">
                                <div id="annie-contactMap"></div>
                            </div>
                        </div>
                    </div>
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
                            <p>Interested to work wiht us?</p>
                            <form method="post" class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" required> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email"> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cars"> Service:-</label>
                                        <select style="background-color: dark-grey; ">  
                                                  <option value="Select">Select</option>}  
                                                   <option value="Vineet">Vineet Saini</option>  
                                                   <option value="Sumit">Sumit Sharma</option>  
                                                   <option value="Dorilal">Dorilal Agarwal</option>  
                                                   <option value="Omveer">Omveer Singh</option>  
                                                   <option value="Rohtash">Rohtash Kumar</option>  
                                                   <option value="Maneesh">Maneesh Tewatia</option>  
                                                   <option value="Priyanka">Priyanka Sachan</option>  
                                                   <option value="Neha">Neha Saini</option>  
                                         </select>    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cars">  Packages:-</label>
                                         <select>  
                                                  <option value="Select">Select</option>}  
                                                   <option value="Vineet">Vineet Saini</option>  
                                                   <option value="Sumit">Sumit Sharma</option>  
                                                   <option value="Dorilal">Dorilal Agarwal</option>  
                                                   <option value="Omveer">Omveer Singh</option>  
                                                   <option value="Rohtash">Rohtash Kumar</option>  
                                                   <option value="Maneesh">Maneesh Tewatia</option>  
                                                   <option value="Priyanka">Priyanka Sachan</option>  
                                                   <option value="Neha">Neha Saini</option>  
                                         </select>   </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-contact" value="Submit"> </div>
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
