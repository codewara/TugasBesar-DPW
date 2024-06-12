<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    </head>
    <body>
        <form id="payment-form" method="post" action="">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="json_callback" id="json_callback">
            <button id="pay-button">Pay!</button>
            </form>
            
</body>
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo e(config('midtrans.client_key')); ?>"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(event) {
        event.preventDefault();
        snap.pay('<?php echo e($snapToken); ?>', {
            // Optional
            onSuccess: function(result) {
                document.getElementById('json_callback').value = JSON.stringify(result);
                document.getElementById('payment-form').submit();
            },
            onPending: function(result) {
                document.getElementById('json_callback').value = JSON.stringify(result);
                document.getElementById('payment-form').submit();
            },
            onError: function(result) {
                document.getElementById('json_callback').value = JSON.stringify(result);
                document.getElementById('payment-form').submit();
            }
        });
    };
</script>
</html>
<?php /**PATH C:\laragon\www\carvent\resources\views/pages/tes.blade.php ENDPATH**/ ?>