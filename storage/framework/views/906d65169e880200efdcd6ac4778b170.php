
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php echo $__env->make('dashboard.waiterinclude.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">


<?php echo $__env->make('dashboard.waiterinclude.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('dashboard.waiterinclude.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <?php echo $__env->yieldContent('body'); ?>
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?php echo $__env->make('dashboard.waiterinclude.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('dashboard.waiterinclude.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
<!-- END: Body-->

</html>
<?php /**PATH /home/mhxh44ujg805/public_html/resources/views/dashboard/waiterinclude/master.blade.php ENDPATH**/ ?>