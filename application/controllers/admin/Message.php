<?php
class Message extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // cek aksess
        if ($this->session->userdata('role_id') == null) {
            // jika tidak ada session alihkan ke halaman login
            redirect('auth');
        }
    }
    public function index()
    {
        $data = [
            "page" => "pesan",
            "messages" => $this->db->get('kontak_masuk')->result_object()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/message/index', $data);


        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data = [
            "page" => "pesan",
            "message" => $this->db->get_where('kontak_masuk', ["id" => $id])->row_object()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/message/detail', $data);


        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->delete('kontak_masuk', ["id" => $id]);
        $this->session->set_flashdata('success', "data pesan berhasil dihapus");
        redirect('/admin/message');
    }
}
