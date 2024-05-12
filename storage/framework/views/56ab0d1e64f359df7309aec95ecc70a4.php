<?php $__env->startSection('title', "cart"); ?>
<?php $__env->startSection('body'); ?>

<div class="th-cart-wrapper  space-top space-extra-bottom bg-light">
    <div class="container">

                <?php if(session('success')): ?>
                <div class="woocommerce-notices-wrapper">
                    <div class="woocommerce-message">
                    <?php echo e(session('success')); ?>

                    </div>
                </div>
            <?php endif; ?>
            <?php if(session('message')): ?>
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">
                <?php echo e(session('message')); ?>

                </div>
            </div>
            <?php endif; ?>

        <form action="<?php echo e(route('order.store')); ?>" method="post" enctype="multipart/form-data" class="woocommerce-cart-form">
            <?php echo csrf_field(); ?>
            <table id="cart" class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Product Name</th>
                        <th class="cart-col-price">Price</th>
                        <th class="cart-col-quantity">Quantity</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
            <?php $total = 0 ?>
            <?php if(session('cart')): ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr data-id="<?php echo e($id); ?>" class="cart_item">
                        <td data-th="Product" data-title="Product">
                            <a class="cart-productimage" href="#"><img width="91" height="91" src="<?php echo e(url('public/products/' .$details['image']  )); ?>" alt="Image"></a>
                            <input type="hidden" name="shop_id" class="form-control" value="<?php echo e($details['shop_id']); ?>">
                                <input type="hidden" name="product_id[]" class="form-control" value="<?php echo e($id); ?>">
                                <input type="hidden" name="price[]" class="form-control" value="<?php echo e($details['price']); ?>">
                                <input type="hidden" name="quantity[]" class="form-control" value="<?php echo e($details['quantity']); ?>">
                                <input type="hidden" name="subtotal[]" class="form-control" value="<?php echo e($details['price'] * $details['quantity']); ?>">
                                <input type="hidden" name="total" class="form-control" value="<?php echo e($total); ?>">
                                <input type="hidden" name="table_id" class="form-control" value="<?php echo e($table->id); ?>">
                                <input type="hidden" name="waiter_id" class="form-control" value="<?php echo e($selectWaiter->id); ?>">

                        </td>
                        <td data-title="Name">
                            <a class="cart-productname" href="#"><?php echo e($details['name']); ?></a>
                        </td>
                        <td data-title="Price">
                            <span class="amount"><bdi><?php echo e($details['price']); ?> <?php echo e($shop->currency->name); ?></bdi></span>
                        </td>
                        <td data-title="Quantity">
                            <div class="quantity">
                                <button class="quantity-minus qty-btn update-cart"><i class="far fa-minus"></i></button>
                                <input type="number" class="qty-input update-cart quantitty" value="<?php echo e($details['quantity']); ?>">
                                <button class="quantity-plus qty-btn update-cart"><i class="far fa-plus"></i></button>
                            </div>
                        </td>
                        <td data-title="Total">
                            <span class="amount"><bdi><?php echo e($details['price'] * $details['quantity']); ?> <?php echo e($shop->currency->name); ?></bdi></span>
                        </td>
                        <td data-title="Remove">
                            <a href="#" class="remove remove-from-cartt"><i class="fal fa-trash-alt"></i></a>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>

                </tbody>
            </table>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Cart Totals</h2>
                    <table class="cart_totals">
                        <tfoot>
                            <tr>
                                <td>Table No :</td>
                                <td data-title="Cart Subtotal">
                                    <span class="amount"><bdi><?php echo e($table->name); ?></bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Waiter :</th>
                                <td data-title="Shipping and Handling">
                                    <span class="amount"><bdi><?php echo e($selectWaiter->name); ?></bdi></span>
                                    
                                </td>
                            </tr>
                            <tr  class="order-total">
                                <td>Order Total :</td>
                                <td data-title="Total">
                                    <strong><span class="amount"><bdi><?php echo e($total); ?> <?php echo e($shop->currency->name); ?></bdi></span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="wc-proceed-to-checkout col-6">
                    <a href="<?php echo e(route('website.welcome',$shop->slug)); ?>" class="th-btn rounded-2">Continue Order</a>
                </div>
                <div class="wc-proceed-to-checkout col-6">
                    <button type="submit"  class="th-btn rounded-2 bg-success">Confirm Order</button>
                </div>
            </div>
        </form>

    </div>
</div>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<script>
    // Get client's location
    if ('geolocation' in navigator) {
      navigator.geolocation.getCurrentPosition(
        function (position) {
          // Assuming you have an order form with relevant inputs
          document.getElementById('latitude').value = position.coords.latitude;
          document.getElementById('longitude').value = position.coords.longitude;
        },
        function (error) {
            alert('Error getting location: ' + error.message);
        }
      );
    }
  </script>

<script type="text/javascript">
    

    

    
    
    



    
    
    
    
    
    
    
    
    
    
    

    
    $(".update-cart").click(function (e) {

e.preventDefault();

var ele = $(this);
var quantity = ele.closest("td").find(".quantity .qty-input").val();


$.ajax({
    url: '<?php echo e(route('update.cart')); ?>',
    method: "patch",
    data: {
        _token: '<?php echo e(csrf_token()); ?>',
        id: ele.parents("tr").attr("data-id"),
        quantity: quantity
    },
    success: function (response) {
        window.location.reload();
    }
});

});


    $(".remove-from-cartt").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if (confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '<?php echo e(route('remove.from.cart')); ?>',
                method: "DELETE",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();

                }
            });
        }
    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.includes.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mhxh44ujg805/public_html/resources/views/website/cart.blade.php ENDPATH**/ ?>