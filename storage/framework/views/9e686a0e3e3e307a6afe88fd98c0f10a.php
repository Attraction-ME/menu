<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(url('/public/dashboard/app-assets/images/logo/logoo.ico')); ?>" type="image/x-icon">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/vendors/css/charts/morris.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/vendors/css/extensions/unslider.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/vendors/css/weather-icons/climacons.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">


    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/css/bootstrap-extended.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/css/colors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/css/components.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/fonts/font-awesome/css/font-awesome.min.css')); ?>">

    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/app-assets/css/core/colors/palette-gradient.css')); ?>">
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/public/dashboard/assets/css/style.css')); ?>">


<!-- END: Custom CSS-->
</head>
<body>
    <div id="app">
        

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH /home/mhxh44ujg805/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>