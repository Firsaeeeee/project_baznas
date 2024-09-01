<?php

use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Transaction;

defined('BASEPATH') or exit('No direct script access allowed');

class Midtrans_lib
{

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->config('midtrans');

        Config::$serverKey = $this->CI->config->item('midtrans_server_key');
        Config::$clientKey = $this->CI->config->item('midtrans_client_key');
        Config::$isProduction = $this->CI->config->item('midtrans_is_production');
        Config::$isSanitized = TRUE;
        Config::$is3ds = TRUE;
    }

    public function get_snap_token($transaction_data)
    {
        return Snap::getSnapToken($transaction_data);
    }
}
