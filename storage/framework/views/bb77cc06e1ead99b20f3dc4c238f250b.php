<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>Admin Panel</span><i class=" feather icon-minus" data-toggle="tooltip"
                                                                  data-placement="right"
                                                                  data-original-title="General"></i>
            </li>
          
                <li class=" nav-item"><a href="<?php echo e(url('/manager/dashboard')); ?>"><i class="fa fa-magic"></i><span
                            class="menu-title" data-i18n="Dashboard">Restaurant</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo e(url('/dashboard/shop')); ?>">All Restaurants</a>
                        </li>
                        <li><a class="menu-item" href="<?php echo e(url('/dashboard/shop/create')); ?>">Add Restaurant</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="<?php echo e(url('/manager/dashboard')); ?>"><i class="fa fa-dollar"></i><span
                    class="menu-title" data-i18n="Dashboard">Currency</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="<?php echo e(url('/dashboard/currency')); ?>">All Currency</a>
                </li>
                <li><a class="menu-item" href="<?php echo e(url('/dashboard/currency/create')); ?>">Add Currency</a>
                </li>
            </ul>
        </li>
 
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<?php /**PATH /home/jcwbgkteayia/public_html/Menu/resources/views/dashboard/managerinclude/menu.blade.php ENDPATH**/ ?>