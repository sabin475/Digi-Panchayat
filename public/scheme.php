<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"><title>Digi - Panchayat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <?php 
        include'includes/head.php';
        ?>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mt-2">New Schemes</h2>
                </div>
                <div class="row g-4">
                    
                    <?php 
                                    include'includes/dbconnect.php';
                                    
                                    $qr="SELECT * FROM scheme where scheme_status='0'";
                                    $data=mysql_query($qr,$con);
									
                                    while($row=mysql_fetch_array($data))
                                    {
									 
                                      
 
                    ?> 

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3"><?php echo $row['scheme_title']; ?></h5>
                            <!--<p><?php //echo $row['scheme_desc']; ?></p>-->
                            <a class="btn px-3 mt-auto mx-auto" href="../<?php echo $row['scheme_file']; ?>" target="blank">Read More</a>
                            <?php
							
                              $sid=$row['scheme_id'];
							  $flag=0;
							//$sid=$row['scheme_id'];
                              $username=$_SESSION['username'];
		     				  $sql="SELECT * FROM applications where user_id = '$username'";
                              $sq=mysql_query($sql,$con);
							  while($row=mysql_fetch_array($sq)){
								  
								if($row['scheme_id']==$sid)  {
									$flag=1;
								}
							  }
							  if($flag==1){
								  echo"Applied";
							  }
							  else{
                            ?>
                            <a class="btn px-3 mt-auto mx-auto" href="apply.php?id=<?php echo $sid;?>">Apply</a><?php }?>
                        </div>
                    </div><?php $flag=0;}?>

                    
                   
									</div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin: 6rem 0;">
            <div class="container py-5 px-lg-5"><h2 class="mt-2">New Informations</h2>
                <div class="owl-carousel testimonial-carousel">
                    
                     <?php 
                                    //include'includes/dbconnect.php';
                                    
                                    $qr="SELECT * FROM info where info_status='0'";
                                    $data=mysql_query($qr,$con);
                                    while($row=mysql_fetch_array($data))
                                    {
  
                                      //$src=$row['img_file'];
                                      //$desc=$row['img_title'];
 
                    ?> 


                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <h6><?php echo $row['info_title']; ?></h6>
                        <p><?php echo $row['info_title']; ?></p>
                        <div class="d-flex align-items-center">
                            
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Posted on</h6>
                                <small><?php echo $row['info_date']; ?></small>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->        

        <!-- Footer Start -->
         <?php
          include'includes/footer.php';
        ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>