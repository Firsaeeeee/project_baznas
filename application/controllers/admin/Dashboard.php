<?php
class Dashboard extends CI_Controller
{

    function __construct()
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
            "page" => "dashboard"
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function hello($params)
    {
        // echo $this->uri->segment('4');
        echo $params;
    }
}
