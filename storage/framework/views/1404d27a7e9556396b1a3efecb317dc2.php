<?php $__env->startSection('title' , 'Add Sale Invoice'); ?>

<?php $__env->startSection('body'); ?>
    <div class="content-header-left col-md-6 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Invoice</a></li>
                    <li class="breadcrumb-item active">Invoice Add</li>
                </ol>
            </div>
        </div>
        <h3 class="content-header-title mb-0">New Invoice</h3>
    </div>

    <div class="content-body">
        <!-- invoice add wrapper -->
        <div class="invoice-add-wrapper">
            <!-- defining a Bootstrap row -->
            <div class="row">
                <!-- defining Bootstrap columns for different screen sizes -->
                <div class="col-xl-12 col-md-12 col-12">
                    <!-- Bootstrap card component -->
                    <form action="<?php echo e(route('orderapprove.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card">
                            <div class="card-body">
                                <!-- card header -->
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div
                                            class="col-md-3 col-12 order-md-1 order-2 d-flex justify-content-end align-items-center mb-2 mb-md-0">
                                            <img
                                                src="<?php echo e(url('public/shops/' . $order->shop_order->logo)); ?>"
                                                alt="logo" height="46" width="164">
                                        </div>
                                        <div
                                            class="col-md-9 col-12 d-flex align-items-start align-items-md-start align-items-center flex-wrap pl-0">
                                            <div
                                                class="issue-date d-flex align-items-center justify-content-start mr-2 mb-75 mb-xl-0">
                                                <h6 class="invoice-text mr-1 font-weight-bold">Date & Time: </h6>
                                                <input type="text"
                                                       class="form-control" value="<?php echo e(date_format($order->created_at ,'m/d/Y, g:i A')); ?>"readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <!-- logo and invoice title -->

                                <!-- bill address section -->
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12 col-xs-12 col-sm-12">
                                        <h5 class="form-section"><i class="feather icon-user"></i> Bill to</h5>
                                        <div class="row d-flex">
                                            <div class="col-2 col-md-1 mb-2">
                                                <label class="">Table Number: </label>
                                            </div>
                                            <div class="col-10 col-md-5 mb-2">
                                                <input type="text" class="form-control"  value="<?php echo e($order->table->name); ?>" readonly>
                                                <input type="hidden" class="form-control" name="table_id" value="<?php echo e($order->table->id); ?>">
                                                <input type="hidden" class="form-control" name="order_id" value="<?php echo e($order->id); ?>">
                                                <input type="hidden" class="form-control" name="shop_id" value="<?php echo e($order->shop_id); ?>">

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div id="invoiceContainer">
                                    <!-- Existing invoice info form -->
                                    <div class="row ">

                                        <div id="addtoorder" class="col-lg-12 col-xl-12 col-xs-12 col-sm-12">
                                            <h5 class="form-section"><i class="feather icon-file-text"></i> Order
                                                details</h5>
                                            <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="d-flex flex-wrap">
                                                <div class=" col-md-4 col-sm-12 mb-2">
                                                    <label>Item</label>
                                                    <select name="product_id[]"  class="select2 form-control class">
                                                        <option value="<?php echo e($order_detail->order_product->id); ?>" ><?php echo e($order_detail->order_product->name); ?></option>
                                                    <?php $__currentLoopData = $productss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($product->id); ?>" ><?php echo e($product->name); ?></option>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class=" col-md-2 col-sm-3 mb-1">
                                                    <label>Amount</label>
                                                    <input class="form-control quantityy" type="number" name="quantity[]" value="<?php echo e($order_detail->quantity); ?>">
                                                </div>
                                                <div class=" col-md-2 col-sm-3 mb-1">
                                                    <label>Price</label>
                                                    <input type="number" id="" class="form-control request_price" name="price[]" value="<?php echo e($order_detail->order_product->price); ?>">
                                                </div>
                                                <div class=" col-md-2 col-sm-3 mb-1">
                                                    <label>SubTotal</label>
                                                    <input type="number" id="" class="form-control subtotal" name="subtotal[]" value="<?php echo e($order_detail->total); ?>" readonly>
                                                </div>

                                                <div class=" col-md-2 col-sm-3 mb-1">

                                                        <button id="" class="removeInvoiceBtn btn btn-danger mt-2" type="button"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                </div>


                                <button id="addInvoiceBtn"  type="button" class="btn btn-primary"><i
                                        class="fa fa-plus-circle"></i> Add new item
                                </button>
                            </div>
                            <hr>
                            <div class="d-flex flex-wrap">
                                <div class="col-12 col-md-4 mb-2">
                                    <label>SubTotal</label>
                                    <input id="" type="number" class="form-control ordertotal" name="ordertotal" value="<?php echo e($order->total); ?>" readonly>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <label>Discount</label>
                                    <input type="number" class="form-control discount" name="discount" value="0">
                                </div>

                                <div class="col-12 col-md-4 mb-2">
                                    <label>Total</label>
                                    <input id="" type="number" class="form-control total" name="total" value="<?php echo e($order->total); ?>" readonly>
                                </div>

                            </div>


                            <div class="form-actions container d-flex justify-content-end mt-2 mb-2">
                                <button type="submit" class="btn btn-primary" style="margin-right: 25px;">
                                    <i class="feather icon-check-square"></i> Submit invoice
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


    <script>
        $(document).ready(function() {

            $("#addInvoiceBtn").click(function(){

                $("#addtoorder").append(`   <div class="d-flex flex-wrap">
                                                <div class="col-sm-4 col-md-4 mb-2">
                                                    <label>Item</label>
                                                    <select name="product_id[]" id="" class="select2 form-control class">
                                                        <option value="" >Select Product</option>
                                                    <?php $__currentLoopData = $productss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($product->id); ?>" ><?php echo e($product->name); ?></option>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-sm-2 col-md-2 mb-1">
                <label>Amount</label>
                <input class="form-control quantityy" type="number" name="quantity[]" value="1">
                                                </div>
                                                <div class="col-sm-2 col-md-2 mb-1">
                                                    <label>Price</label>
                                                    <input type="number" id="" class="form-control request_price" name="price[]" value="">
                                                </div>
                                                <div class="col-sm-2 col-md-2 mb-1">
                                                    <label>SubTotal</label>
                                                    <input type="number" id="" class="form-control subtotal" name="subtotal[]" value="" readonly>
                                                </div>

                                                <div class="col-sm-2 col-md-2 mb-1">

                                                        <button id="" class="removeInvoiceBtn btn btn-danger mt-2" type="button"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </div>
`);

                $('.class').select2();

                $('.class').on('change', function() {


                    var product_id = this.value;
                    var request_price_input = $(this).parent().parent().find('.request_price');
                    var subtotal_input = $(this).parent().parent().find('.subtotal');


                    // Make an AJAX request to the server to get the price
                    $.ajax({
                        url: "<?php echo e(url('waiter/get-price')); ?>", // Change this to the URL you want to use
                        type: "POST",
                        data: {
                            product_id: product_id,
                            _token: '<?php echo e(csrf_token()); ?>'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $.each(result.AllPrices,function(key,value){
                                request_price_input.val(value.price);
                                subtotal_input.val(value.price);

                            });

                            var quan = parseFloat($(this).closest('.d-flex').find('.quantityy').val());
                            var price = parseFloat($(this).closest('.d-flex').find('.request_price').val());
                            parseFloat($(this).closest('.d-flex').find('.subtotal').val(quan * price));
                            //get total
                            var disc = $(".discount").val();
                            var temp = 0;
                            $(".subtotal").each(function(){
                                var tdTxt = $(this).val();
                                temp+= parseFloat(tdTxt);
                                $(".ordertotal").val(temp);
                                $(".total").val(temp - disc);
                            });
                        },

                    });



                    $(".quantityy").on('change',function(){


                        var quan = $(this).val();
                        var price = parseFloat($(this).closest('.d-flex').find('.request_price').val());
                        parseFloat($(this).closest('.d-flex').find('.subtotal').val(quan * price));
                        //get total
                        var temp = 0;
                        $(".subtotal").each(function(){
                            var tdTxt = $(this).val();
                            temp+= parseFloat(tdTxt);
                            $(".ordertotal").val(temp);
                            $(".total").val(temp);
                        });




                    });
                    $(".request_price").on('change',function(){


                        var price = $(this).val();
                        var quan = parseFloat($(this).closest('.d-flex').find('.quantityy').val());
                        parseFloat($(this).closest('.d-flex').find('.subtotal').val(quan * price));
                        //get total
                        var disc = $(".discount").val();
                        var temp = 0;
                        $(".subtotal").each(function(){
                            var tdTxt = $(this).val();
                            temp+= parseFloat(tdTxt);
                            $(".ordertotal").val(temp);
                            $(".total").val(temp - disc);
                        });




                    });



                });

                $(".removeInvoiceBtn").click(function(){
                    $(".ordertotal").val(0);
                    $(".total").val(0);

                    $(this).parent().parent().remove();
                    var disc = $(".discount").val();
                    //get total
                    var temp = 0;
                    $(".subtotal").each(function(){
                        var tdTxt = $(this).val();
                        temp+= parseFloat(tdTxt);
                        $(".ordertotal").val(temp);
                        $(".total").val(temp - disc);
                    });

                });

            });



            $('.class').on('change', function() {

                var product_id = this.value;
                var request_price_input = $(this).parent().parent().find('.request_price');
                var subtotal_input = $(this).parent().parent().find('.subtotal');


                // Make an AJAX request to the server to get the price
                $.ajax({
                    url: "<?php echo e(url('waiter/get-price')); ?>", // Change this to the URL you want to use
                    type: "POST",
                    data: {
                        product_id: product_id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $.each(result.AllPrices,function(key,value){
                            request_price_input.val(value.price);
                            subtotal_input.val(value.price);

                        });

                        var quan = parseFloat($(this).closest('.d-flex').find('.quantityy').val());
                        var price = parseFloat($(this).closest('.d-flex').find('.request_price').val());
                        var disc = $(".discount").val();

                        parseFloat($(this).closest('.d-flex').find('.subtotal').val(quan * price));
                        //get total
                        var temp = 0;
                        $(".subtotal").each(function(){
                            var tdTxt = $(this).val();
                            temp+= parseFloat(tdTxt);
                            $(".ordertotal").val(temp);
                            $(".total").val(temp - disc);
                        });

                    },

                });

                $(".quantityy").on('change',function(){


                    var quan = $(this).val();
                    var price = parseFloat($(this).closest('.d-flex').find('.request_price').val());
                    parseFloat($(this).closest('.d-flex').find('.subtotal').val(quan * price));
                    //get total
                    var temp = 0;
                    $(".subtotal").each(function(){
                        var tdTxt = $(this).val();
                        temp+= parseFloat(tdTxt);
                        $(".ordertotal").val(temp);
                        $(".total").val(temp);
                    });




                });


            });

            $(".removeInvoiceBtn").click(function(){
                $(".ordertotal").val(0);
                $(".total").val(0);

                $(this).parent().parent().remove();
                var disc = $(".discount").val();
                //get total
                var temp = 0;
                $(".subtotal").each(function(){
                    var tdTxt = $(this).val();
                    temp+= parseFloat(tdTxt);
                    $(".ordertotal").val(temp);
                    $(".total").val(temp - disc);
                });

            });

            $(".discount").on('change',function(){

                var total = $(".ordertotal").val();
                var disc =  $(".discount").val();

                $(".total").val(total - disc);

            });

            $(".quantityy").on('change',function(){


                var quan = $(this).val();
                var price = parseFloat($(this).closest('.d-flex').find('.request_price').val());
                parseFloat($(this).closest('.d-flex').find('.subtotal').val(quan * price));
                //get total
                var disc = $(".discount").val();
                var temp = 0;
                $(".subtotal").each(function(){
                    var tdTxt = $(this).val();
                    temp+= parseFloat(tdTxt);
                    $(".ordertotal").val(temp);
                    $(".total").val(temp - disc);
                });




            });

            $(".request_price").on('change',function(){


                var price = $(this).val();
                var quan = parseFloat($(this).closest('.d-flex').find('.quantityy').val());
                parseFloat($(this).closest('.d-flex').find('.subtotal').val(quan * price));
                //get total
                var disc = $(".discount").val();
                var temp = 0;
                $(".subtotal").each(function(){
                    var tdTxt = $(this).val();
                    temp+= parseFloat(tdTxt);
                    $(".ordertotal").val(temp);
                    $(".total").val(temp - disc);
                });




            });


        });

    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.waiterinclude.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jcwbgkteayia/public_html/Menu/resources/views/dashboard/waiterorders/create.blade.php ENDPATH**/ ?>