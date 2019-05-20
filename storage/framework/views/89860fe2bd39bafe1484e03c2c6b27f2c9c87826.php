<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/soccer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:25:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Soccer | Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo e(asset('apple-touch-icon.png')); ?>">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('index/images/fav.png')); ?>">    
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/bootstrap.min.css')); ?>">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/font-awesome.min.css')); ?>">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/animate.css')); ?>">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/rsmenu-main.css')); ?>">
        <!-- rsmenu transitions css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/rsmenu-transitions.css')); ?>">
        <!-- hover-min css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/hover-min.css')); ?>">
          <!-- magnific-popup css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/magnific-popup.css')); ?>">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/owl.carousel.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('index/css/time-circles.css')); ?>">
        <!-- Slick css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/slick.css')); ?>">
      
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('index/css/fix.css')); ?>">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo e(asset('index/css/responsive.css')); ?>">
        <script src="<?php echo e(asset('index/js/modernizr-2.8.3.min.js')); ?>"></script>
    </head>
    <body class="home-two">
        <!--Preloader start here-->
       <!--  <div id="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div> -->
        <!--Preloader area end here-->
        
        
        <?php echo $__env->make('index.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('index.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        
        
        <!-- End scrollUp  -->

        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="<?php echo e(asset('index/js/jquery.min.js')); ?>"></script>
        <!-- Menu js -->
        <script src="<?php echo e(asset('index/js/rsmenu-main.js')); ?>"></script> 
         <!-- jquery-ui js -->
        <script src="<?php echo e(asset('index/js/jquery-ui.min.js')); ?>"></script>
        <!-- bootstrap js -->
        <script src="<?php echo e(asset('index/js/bootstrap.min.js')); ?>"></script>
        <!-- meanmenu js -->
        <script src="<?php echo e(asset('index/js/jquery.meanmenu.js')); ?>"></script>
        <!-- wow js -->
        <script src="<?php echo e(asset('index/js/wow.min.js')); ?>"></script>
        <!-- Slick js -->
        <script src="<?php echo e(asset('index/js/slick.min.js')); ?>"></script>
        <!-- masonry js -->
        <script src="<?php echo e(asset('index/js/masonry.js')); ?>"></script>
        <!-- magnific-popup js -->
        <!-- owl.carousel js -->
        <script src="<?php echo e(asset('index/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('index/js/time-circle.js')); ?>"></script>
        <!-- magnific-popup js -->
        <script src="<?php echo e(asset('index/js/jquery.magnific-popup.js')); ?>"></script>
        <!-- main js -->
        <script src="<?php echo e(asset('index/js/main.js')); ?>"></script>
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/soccer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:25:03 GMT -->
</html>

