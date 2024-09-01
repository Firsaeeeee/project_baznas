<?php

class Album extends CI_Controller
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
    public function tambah()
    {
        $this->load->model('albumModel');

        $nama_album = $this->input->post("nama_album");

        $data = [
            "nama_album" => $nama_album
        ];

        $this->albumModel->create($data);
        $this->session->set_flashdata('success', "$nama_album berhasil dibuat");
        redirect("admin/gallery/tambah");
    }

    public function hapus($id)
    {
        $this->load->model('albumModel');
        if ($this->albumModel->delete($id)) {
            $this->session->set_flashdata('success', 'Album berhasil dihapus');
            redirect("admin/gallery");
        } else {
            $this->session->set_flashdata('fail', 'Album gagal dihapus');
            redirect("admin/gallery");
        }
    }
}
