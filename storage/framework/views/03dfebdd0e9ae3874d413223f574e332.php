<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($shop->slug); ?></title>
    <link rel="icon" href="<?php echo e(url('website/new/assets/images/favicon/icon.png')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('website/new/assets/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('website/new/assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('website/new/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('website/new/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('website/new/assets/css/media-query.css')); ?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(url('website/assets/css/magnific-popup.min.css')); ?>">
    <!-- Layerslider -->
    <link rel="stylesheet" href="<?php echo e(url('website/assets/css/layerslider.min.css')); ?>">
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?php echo e(url('website/assets/css/jquery.datetimepicker.min.css')); ?>">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php echo e(url('website/assets/css/slick.min.css')); ?>">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(url('website/assets/css/style.css')); ?>">
    <!-- <link rel="stylesheet" href="website/assets/css/bootstrap.min.css'> -->


    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php echo e(url('website/assets/css/fontawesome.min.css')); ?>">
</head>
<body style="background-image: url('<?php echo e(url('website/welcome.jpeg')); ?>') !important;background-size: cover;">
<div class="site-content">
    <!-- Preloader Start -->
    <div class="loader-mask">
        <div class="circle">
        </div>
    </div>

 <section id="finger-print-sec">
        <div class="container">
            <div class="finger-print-sec-full">
                <form class="form" action="<?php echo e(route('website.welcome', $shop->slug)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('get'); ?>
                <div class="finger-top text-center">
                    <img style="height: 70px !important;" src="<?php echo e(url('shops/' . $shop->logo)); ?>" alt="Pizzan">
                </div>
                <div class="finger-bottom">
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session('done')): ?>
                <div class="woocommerce-notices-wrapper bg-success">
                    <div class="woocommerce-message">
                        <?php echo e(session('done')); ?>

                    </div>
                </div>
            <?php endif; ?>
                </div>
                <div class="finger-print-sec-btn">

                    <div class="finger-print-sec-btn-wrapp">
                        <p class=""><?php echo e($shop->slug); ?></p>
                        
                        <div style="width: 100%" class="print-continue-btn">
                            <button >Make an Order</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>







    <script src="<?php echo e(url('website/new/assets/js/jquery-min-3.6.0.js')); ?>"></script>
    <script src="<?php echo e(url('website/new/assets/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(url('website/new/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('website/new/assets/js/custom.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
</div>
</body>


</html>
<?php /**PATH /home/mhxh44ujg805/public_html/resources/views/website/welcome.blade.php ENDPATH**/ ?>