<?php
class Infaq extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('midtrans_lib');
    }

    public function index()
    {
        $this->load->view('infaq.php');
    }


    public function bayar_infaq()
    {
        $nominal = $this->input->post('nominal');
        // var_dump($nominal);
        // die;
        $data = $this->input->post();
        $this->load->model('Pemasukan_infaq');
        $this->Pemasukan_infaq->simpan_data($data);
        $data['snap_token'] = $this->generate_snap_token($nominal);
        $data['data_bayar'] = $this->input->post();
        $this->load->view('bayar_infaq', $data);
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
