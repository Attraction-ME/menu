<?php $__env->startSection('title' , 'Products'); ?>
<?php $__env->startSection('body'); ?>
    <!-- Scroll - horizontal table -->
    <!-- DOM - jQuery events table -->
    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">All Products</h4>
                        <a class="btn btn-outline-primary btn-md mt-1 " href="<?php echo e(asset('/dashboard/products/create')); ?>">
                            Add Product
                        </a>
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
                        <div class="card-body card-dashboard">
                            <?php if(session('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>



                            <table class="table table-striped table-bordered dom-jQuery-events">
                                <thead>
                                    <tr>
                                        <th>Image_temp</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Sale</th>
                                        <th>FinalPrice</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th>Operation</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td>
                                            <img src="<?php echo e(url('products/' . $product->image_temp)); ?>" width="50" height="50" alt="">
                                        </td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td><?php echo e($product->sale); ?> % </td>
                                        <td><?php echo e($product->finalprice); ?></td>



                                        <td><?php echo e($product->category->name); ?></td>

                                        <td><?php echo e($product->created_at->toDateString()); ?></td>
                                        <td>

                                            <a href="<?php echo e(route('products.edit', $product->id)); ?>"  class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o "></i></a>
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#danger<?php echo e($product->id); ?>"> <i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="danger<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger white">
                                                        <h4 class="modal-title" id="myModalLabel10">Confirm Delete</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>
                                                            Are You Sure You Want To Delete
                                                            " <?php echo e($product->name); ?> "
                                                            ?
                                                        </h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- DOM - jQuery events table -->   <!--/ Scroll - horizontal table -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mhxh44ujg805/public_html/resources/views/dashboard/products/index.blade.php ENDPATH**/ ?>