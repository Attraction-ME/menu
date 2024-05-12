<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>Waiter Panel</span><i class=" feather icon-minus" data-toggle="tooltip"
                                                                  data-placement="right"
                                                                  data-original-title="General"></i>
            </li>



                <li class=" nav-item"><a href="<?php echo e(url('/waiter/dashboard')); ?>"><i class="feather icon-file-text"></i><span
                            class="menu-title">Orders</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo e(url('/dashboard/waiter/orders')); ?>"
                               data-i18n="Basic Buttons">All Pending Orders</a>
                        </li>

                        <li><a class="menu-item" href="<?php echo e(url('/dashboard/waiter/acceptedOrder')); ?>"
                               data-i18n="Basic Buttons">All Accepted Orders</a>
                        </li>
                    </ul>
                </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<?php /**PATH /home/mhxh44ujg805/public_html/resources/views/dashboard/waiterinclude/menu.blade.php ENDPATH**/ ?>