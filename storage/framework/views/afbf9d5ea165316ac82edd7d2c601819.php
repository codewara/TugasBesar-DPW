<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=akaya-kanadaka:400" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
</head>

<body>
    <?php if(auth()->guard()->check()): ?>
        <?php if(auth()->user()->role == 'ADMIN'): ?>
            <?php echo $__env->make('layouts.adminav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('layouts.usernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php else: ?>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center shadow-md">
            <div class="container d-flex align-items-center justify-content-between">

                <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
                    <h1>Car<span>Vent</span></h1>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="<?php echo e(url('gallery')); ?>">Gallery</a></li>
                        <li><a href="/#about">About</a></li>
                        <li><a href="/#events">Events</a></li>
                        <li><a href="/#contact">Contact</a></li>
                    </ul>
                </nav>

                <a href="<?php echo e(route('login')); ?>" class="btn-book-a-table">Rent Car Now</a>
            </div>
        </header>
    <?php endif; ?>

    <main id="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Carvent Corp</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="<?php echo e(config('midtrans.client_key')); ?>"></script>

</body>

</html><?php /**PATH C:\laragon\www\carvent\resources\views/layouts/index.blade.php ENDPATH**/ ?>