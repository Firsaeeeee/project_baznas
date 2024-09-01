<?php
class Kontak extends CI_Controller
{
    public function index()
    {
        $this->load->view('kontak.php');
    }
    public function simpan()
    {
        $data = $this->input->post();
        $this->load->model('Kontak_masuk');
        $this->Kontak_masuk->simpan_data($data);
        $this->session->set_flashdata('message', 'Pesan berhasil dikirim!');
        redirect("/kontak");
        // var_dump($this->input->post());
    }
}
