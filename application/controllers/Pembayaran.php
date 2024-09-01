<?php
require 'pembayaran.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['stripeToken'];
    $amount = 5000; // Jumlah dalam sen, misalnya $50.00 = 5000

    try {
        $charge = \Stripe\Charge::create([
            'amount' => $amount,
            'currency' => 'usd',
            'description' => 'Example Charge',
            'source' => $token,
        ]);

        echo 'Pembayaran berhasil!';
    } catch (\Stripe\Exception\CardException $e) {
        echo 'Pembayaran gagal: ' . $e->getError()->message;
    }
}
?>
    