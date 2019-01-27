<!doctype html>
<html lang="en">
  <head>
    <title>Aan YAS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/a_css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/a_css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/a_css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/a_css/aos.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/a_fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/a_fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/a_css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="<?php base_url()?>homee"><em>Aan YAS</em></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li><a href="<?php base_url()?>index">Home</a></li>
                        <li><a href="<?php base_url()?>aboutt">About</a></li>
                        <li><a href="<?php base_url()?>a_komentar">Comment</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Contact Info</h3>
                          <p>Jl. Slamet Riyadi No. 28 <br> Surakarta, Jawa Tengah </p>
                          <p>aanyuniadis@gmail.com</p>
                          <p>081325420366</p>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay page-inside" style="background-image: url(img/hero_2.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Comment</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Thank you for your advice</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    
    <section class="section bg-primary contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <form action="<?php echo base_url()?>/a_ta/komentar" method="post" class="bg-white p-md-3 p-5 mb-5" style="margin-top: 10px; margin-left: 50%;">
              <div class="row">
                <h2><b>Masukan komentar Anda :</b></h2> 
                <textarea class="formKomentar" name="komentar" rows="10" column= "50" placeholder="Komentar"></textarea>
              </div>
              <div class="row">
            <input type="submit" name="submit" value="SUBMIT">
              </div>
            </form>
            <?php if(isset($input)) 
        echo $input;
    ?>
      </div>
    </section>
    
    <script src="<?php echo base_url()?>assets/a_js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/a_js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/a_js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/a_js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/a_js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/a_js/aos.js"></script>
    <script src="<?php echo base_url()?>assets/a_js/main.js"></script>
  </body>
</html>