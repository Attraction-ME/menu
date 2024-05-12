<?php $__env->startSection('title' , 'Add Waiter'); ?>
<?php $__env->startSection('body'); ?>

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Add Waiter</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/dashboard/homepage')); ?>">Home Page</a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/dashboard/waiters')); ?>">Waiters</a>
                            </li>
                            <li class="breadcrumb-item active">Add Waiter </li>
                        </ol>
                    </div>
                </div>
            </div>








        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-colored-form-control">Add Waiter</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php if($errors->any()): ?>
                                        <div class="alert alert-danger">
                                            <ul>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    <form class="form" action="<?php echo e(route('waiters.store')); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"></i>Email</h4>
                                                    <div class="form-group">
                                                        <input value="<?php echo e(old('email')); ?>" type="email" id="userinput1" class="form-control border-primary" placeholder="Email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"></i>Password</h4>
                                                    <div class="form-group">
                                                        <input value="<?php echo e(old('password')); ?>" type="password" id="userinput1" class="form-control border-primary" placeholder="Password" name="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 class="form-section text-dark"></i>Name</h4>
                                                    <div class="form-group">
                                                        <input value="<?php echo e(old('name')); ?>" type="text" id="userinput1" class="form-control border-primary" placeholder="name" name="name">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <h4 class="form-section text-dark"></i>Tables</h4>

                                                    <div class="form-group text-center">
                                                        <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <div class="form-check form-check-inline ">
                                                        <label class="text-dark font-weight-bold">Tabel : <?php echo e($table->name); ?></label>
                                                        <input style="height: 30px !important;width:100% !important" type="checkbox" value="<?php echo e($table->id); ?>" id="userinput1" class="form-check-input"  name="tables[]">
                                                        </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </div>

                                                </div>
                                                
                                            </div>

                                        </div>

                                        <div class="form-actions right">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                            <button type="reset" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> Cancel
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mhxh44ujg805/public_html/resources/views/dashboard/waiters/create.blade.php ENDPATH**/ ?>