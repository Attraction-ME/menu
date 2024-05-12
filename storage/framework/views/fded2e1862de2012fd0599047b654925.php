<!-- BEGIN: Header-->
<script>
    const shopId = "<?php echo e($userShop->id); ?>";
</script>

<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto pb-3"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="<?php echo e(url('/superAdmin/dashboard')); ?>"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item pb-3 move-up-li"><a class="navbar-brand" href="<?php echo e(url('/superAdmin/dashboard')); ?>"><img class="brand-logo" style="width: 40px" alt="stack admin logo" src="<?php echo e(url('public/shops/' .  $userShop->logo)); ?>">
                        <h3 class="brand-text"><?php echo e(auth()->user()->name); ?></h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a></li>

                </ul>
                <ul class="nav navbar-nav float-right">

                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span id="orderCountt"  class="badge badge-pill badge-danger badge-up"></span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span id="orderCount"  class="notification-tag badge badge-danger float-right m-0">New</span></h6>
                            </li>
                            <audio id="notificationSound">
                                <source src="<?php echo e(url('public/sound/notifaction.mp3')); ?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            <li id="noti" class="scrollable-container media-list">
                                
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="<?php echo e(url('/dashboard/orders')); ?>">Read all notifications</a></li>
                        </ul>
                    </li>



                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="avatar avatar-online"><img src="<?php echo e(url('public/shops/' .  $userShop->logo)); ?>" alt="avatar"><i></i></div><span class="user-name"><?php echo e(auth()->user()->name); ?></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                                <i class="feather icon-power"></i></a>


                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
<?php /**PATH /home/mhxh44ujg805/public_html/resources/views/dashboard/header.blade.php ENDPATH**/ ?>