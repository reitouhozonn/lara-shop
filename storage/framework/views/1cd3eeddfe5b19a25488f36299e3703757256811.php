<?php $__env->startSection('title'); ?>
    カート
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="cart__title">
        Shopping Cart
    </div>
    <?php if(count($line_items) > 0): ?>
    <div class="cart-wrapper">
        <?php $__currentLoopData = $line_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-3">
            <div class="row">
                <img src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->name); ?>" class="product-cart-img"/>
                <div class="card-body">
                    <div class="card-product-name col-6">
                        <?php echo e($item->name); ?>

                    </div>
                    <div class="card-quantity col-2">
                        <?php echo e($item->pivot->quantity); ?>個
                    </div>
                    <div class="card__total-price col-3 text-center">
                        ￥<?php echo e(number_format($item->price * $item->pivot->quantity)); ?>

                    </div>
                    <form action="<?php echo e(route('line_item.delete')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card__btn-trash col-1">
                            <input type="hidden" name="id" value="<?php echo e($item->pivot->id); ?>"/>
                            <button type="submit" class="fas fa-trash-alt btn"></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="cart__sub-total">
        小計：￥<?php echo e(number_format($total_price)); ?> 円
    </div>
    <button onClick="location.href='<?php echo e(route('cart.checkout')); ?>'" class="cart__purchase btn btn-primary">
        購入する
    </button>
    <?php else: ?>
    <div class="cart__empty">
        カートに商品が入っていません。
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/cart/index.blade.php ENDPATH**/ ?>