<?php $__env->startSection('title'); ?>
<?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="product">
        <img src="<?php echo e(asset($product->image)); ?>" class="product-img"/>
        <div class="product__content-header text-center">
            <div class="product__name">
                <?php echo e($product->name); ?>

            </div>
            <div class="product__price">
                ¥<?php echo e(number_format($product->price)); ?>

            </div>
        </div>
        <?php echo e($product->description); ?>

        <form action="<?php echo e(route('line_item.create')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($product->id); ?>"/>
            <div class="product__quantity">
                <input type="number" name="quantity" min="1" value="1" require/>
            </div>
            <div class="product__btn-add-cart">
                <button type="submit" class="btn btn-outline-secondary">カートに追加する</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/show.blade.php ENDPATH**/ ?>