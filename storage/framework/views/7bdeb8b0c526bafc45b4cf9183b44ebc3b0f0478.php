<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(route('product.index')); ?>"><?php echo e(config('app.name')); ?></a>
                <a class="fas fa-shopping-cart" href="<?php echo e(route('cart.index')); ?>"></a>
            </div>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
<?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>