<p>決済ページへリダイレクトします。</p>
<script src="https://js.stripe.com/v3/"></script>
<script>
    const publicKey = '<?php echo e($publicKey); ?>';
    const stripe = Stripe(publicKey);
    window.onload = function() {
        stripe.redirectToCheckout({
            sessionId: '<?php echo e($session->id); ?>'
        }).then(function (result) {
            window.location.href = 'http://localhost/cart';
        });
    }
</script><?php /**PATH /var/www/resources/views/cart/checkout.blade.php ENDPATH**/ ?>