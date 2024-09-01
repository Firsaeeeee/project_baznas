<!DOCTYPE html>
<html>

<head>
    <title>Payment Page</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo $this->config->item('midtrans_client_key'); ?>"></script>
</head>

<body>
    <input name="nominal" type="number">
    <button id="pay-button">Pay</button>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            snap.pay('<?php echo $snap_token; ?>', {
                onSuccess: function(result) {
                    console.log(result);
                },
                onPending: function(result) {
                    console.log(result);
                },
                onError: function(result) {
                    console.log(result);
                }
            });
        };
    </script>
</body>

</html>