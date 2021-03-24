<?php $__env->startSection('title'); ?>
    商品一覧
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="jumbotron top-img">
    <p class="text-center text-white top-img-text"><?php echo e(config('app.name', 'Laravel')); ?></p>
</div>

<div class="container">
    <div class="top__title text-center">
        All Products
    </div>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('product.show', $product->id)); ?>" class="col-lg-4 col-md-6">
            <div class="card">
                <img src="<?php echo e(asset($product->image)); ?>" class="card-img"/>
                <div class="card-body">
                    <p class="card-title"><?php echo e($product->name); ?></p>
                    <p class="card-text">¥<?php echo e(number_format($product->price)); ?></p>
                </div>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/index.blade.php ENDPATH**/ ?>