<!DOCTYPE html>
<html>

<head>
    <title>Payment Page</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo $this->config->item('midtrans_client_key'); ?>"></script>
</head>

<body>
    <form method="post" action="<?= base_url('payment/bayar') ?>">
        <input name="nominal" type="number">
        <button type="submit" id="pay-button">Pay</button>
    </form>


</body>

</html>