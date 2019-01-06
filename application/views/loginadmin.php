<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/slicknav.min.css">
    <!-- amchart css -->
   
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assetslogin/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url(); ?>/assetslogin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="adminpassword">
                    <div class="login-form-head">
                        <h4>Masuk Admin</h4>                        
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password Admin</label>
                            <input type="password" id="passadmin">
                            <i class="ti-lock"></i>
                        </div>
                        
                        <div class="submit-btn-area">
                            <button id="form_submit" type="button" onclick="window.location='<?php echo site_url("Welcome/login");?>'"><i class="ti-arrow-left"></i> Kembali</button>                            
                            <button id="form_submit" type="button" onclick="window.location='<?php echo site_url("Welcome/admindashboard");?>'">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url(); ?>/assetslogin/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url(); ?>/assetslogin/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assetslogin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assetslogin/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/assetslogin/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>/assetslogin/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>/assetslogin/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="<?php echo base_url(); ?>/assetslogin/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>/assetslogin/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>/assetslogin/js/kembali.js"></script>
</body>

</html>