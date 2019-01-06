<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PEDESTANA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>/css/style.css " rel="stylesheet">

</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>                           
          <li><a href="#team">Team</a></li>          
          <li><a href="#contact">Contact</a></li>
          <li><a href="#about">About</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to PEDESTANA</h1>
      <h2>Portal Evaluasi Desa Tangguh Bencana</h2>
      <button class="btn-get-started bg-transparent" onclick="window.location='<?php echo site_url("Welcome/login");?>'">Login</button>
    </div>
  </section><!-- #hero -->

  <main id="main">    
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">Team anonymous</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Rachmat Hadi Agusti</h4>
              <span>anggota team</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>M. Yusril Nugraha</h4>
              <span>Anggota team</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>Agung Bahri Manurung</h4>
              <span>anggota team</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- #team -->
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">KEBIJAKAN PENGEVALUASI DESA TANGGUH BENCANA</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Graha BNPB - Jl. Pramuka Kav.38 <br />Jakarta Timur 13120</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>contact@bnpb.go.id</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p> +6221 2982 7444 <br />
                    +62 812 1237 575   
                </p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- #contact -->
    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Tentang Kami</h2>
            <p>
              Sistem <b>PEDESTANA</b> merupakan perangkat lunak yang digunakan sebagai acuan dalam perancangan dan implementasi
              sistem oleh siapa saja, baik itu masyarakat, fasilitator/relawan BNPB yang membantu kinerja BNPB supaya 
              suatu desa bisa menjadi tangguh bencana, dan dari pihak BNPB itu sendiri.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">masyarakat</a></h4>
              <p class="description">Portal untuk masyarakat yaitu dapat mengetahui desa-nya termasuk kategori mana dan
                sejauhmana kesiapan desa-nya terkait program Desa Tangguh Bencana dari hasil laporan yang dikirim oleh
                fasilitator.
              </p>
            </div>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Fasilitator</a></h4>
              <p class="description">Portal untuk fasilitator yaitu memberikan laporan data desa untuk dikirim ke BNPB
                untuk dievaluasi mengenai desa yang diberi tugas.
              </p>
            </div>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">BNPB</a></h4>
              <p class="description">Portal untuk BNPB yaitu mengevaluasi dan menentukan kategori pada suatu desa
                yang harapannya yaitu desa tersebut bisa memiliki kemampuan mandiri untuk beradaptasi dan menghadapi
                ancaman bencana. </p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
          
        </div>
      </div>
    </section>
    <!-- #about -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PEDESTANA</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="https://bootstrapmade.com/">Anonymous Team Developer 2018</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url(); ?>/js/main.js"></script>

</body>
</html>
