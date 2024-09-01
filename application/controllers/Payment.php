<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('midtrans_lib');
    }

    public function index()
    {
        $this->load->view('payment');
    }

    public function bayar()
    {
        $nominal = $this->input->post('nominal');
        $data['snap_token'] = $this->generate_snap_token($nominal);
        $this->load->view('payment_view', $data);
    }

    private function generate_snap_token($nominal)
    {
        $transaction_data = [
            'transaction_details' => [
                'order_id' => 'ORDER-ID-' . time(),
                'gross_amount' => $nominal, // Ubah sesuai dengan harga transaksi
            ],
            'credit_card' => [
                'secure' => true
            ]
        ];

        return $this->midtrans_lib->get_snap_token($transaction_data);
    }
}
