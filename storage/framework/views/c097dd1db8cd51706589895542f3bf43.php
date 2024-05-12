<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>Admin Panel</span><i class=" feather icon-minus" data-toggle="tooltip"
                                                                  data-placement="right"
                                                                  data-original-title="General"></i>
            </li>
          

            <li class=" nav-item"><a href=""><i class="feather icon-shopping-cart">

                    </i><span class="menu-title" data-i18n="Dashboard">Resturant Items</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo e(url('/dashboard/products')); ?>">Products</a>
                    </li>
                    <li class=""><a class="menu-item" href="<?php echo e(url('/dashboard/categories')); ?>">Categories</a>
                    </li>
                    <li class=""><a class="menu-item" href="<?php echo e(url('/dashboard/tables')); ?>">Tables</a>
                    </li>
                    <li class=""><a class="menu-item" href="<?php echo e(url('/dashboard/waiters')); ?>">Waiters</a>
                    </li>
                </ul>
            </li>


                <li class=" nav-item"><a href="<?php echo e(url('/superAdmin/dashboard')); ?>"><i class="feather icon-file-text"></i><span
                            class="menu-title">Orders</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo e(url('/dashboard/orders')); ?>"
                               data-i18n="Basic Buttons">All Pending Orders</a>
                        </li>

                        <li><a class="menu-item" href="<?php echo e(url('/dashboard/acceptedOrder')); ?>"
                               data-i18n="Basic Buttons">All Accepted Orders</a>
                        </li>
                    </ul>
                </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<?php /**PATH /home/mhxh44ujg805/public_html/resources/views/dashboard/menu.blade.php ENDPATH**/ ?>