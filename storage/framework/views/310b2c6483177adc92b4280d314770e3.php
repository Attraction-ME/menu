<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($table->shop->name); ?></title>
</head>
<body>
    <div style="text-align: center">
        <img src="<?php echo e(url('public/qr/' . $table->qrcode)); ?>" width="500" height="500" alt="">
        <h1> <?php echo e($table->shop->name); ?> </h1>
        <h2>Table Number : <?php echo e($table->name); ?> </h2>
    </div>
</body>
</html>
<?php /**PATH /home/mhxh44ujg805/public_html/resources/views/dashboard/tables/show.blade.php ENDPATH**/ ?>