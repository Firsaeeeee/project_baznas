<?php
class Slide_show extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //load Helper for Form
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('slideShowModel');
    }
    public function index()
    {
        $data = [
            "page" => "slide-show",
            "slides" => $this->db->get('slide-show')->result_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/slide-show', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {

        // config upload gambar
        $config['upload_path'] = FCPATH . 'assets/upload/slide-show';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;

        // panggil libarary upload dan  memasukan config diatas
        $this->load->library('upload', $config);

        // cek apakah gambar berhasil di upload
        if (!$this->upload->do_upload('gambar')) {
            // jika gagal ambil peasan error nya
            $error = array('error' => $this->upload->display_errors());

            // membuat session flash data untuk notifikasi
            $this->session->set_flashdata('fail', $error["error"]);

            // kembali kehalaman admin slide show
            redirect("admin/slide_show");
        } else {
            // jika berhasil ambil nama file yg dihasilkan dari proses upload
            $nama_file = $this->upload->data()["file_name"];

            // simpan nama file kedalam database dengan fungsi simpan yg ada di model slideshowModel 
            $this->slideShowModel->simpan($nama_file);

            // membuat session flash data untuk notifikasi
            $this->session->set_flashdata('success', 'Gambar berhasil di upload');

            // kembali kehalaman admin slide show
            redirect("admin/slide_show");
        }
    }

    public function delete($id)
    {
        if ($this->slideShowModel->hapus($id)) {
            $this->session->set_flashdata('success', 'Gambar berhasil dihapus');
            redirect("admin/slide_show");
        } else {
            $this->session->set_flashdata('fail', 'Gambar gagal dihapus');
            redirect("admin/slide_show");
        }
    }
}
