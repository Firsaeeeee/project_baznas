<?php
class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //load Helper for Form
        // $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('beritaModel');

        // cek aksess
        if ($this->session->userdata('role_id') == null) {
            // jika tidak ada session alihkan ke halaman login
            redirect('auth');
        }
    }
    public function index()
    {
        $data = [
            "page" => "berita",
            "berita" => $this->db->get("berita")->result_array()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/berita/index', $data);
        $this->load->view('admin/berita/modal');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        // cek request methode,
        if ($this->input->method() === 'post') {
            // jika methode post lakukan prosedur dibawah ini

            // config upload gambar
            $config['upload_path'] = FCPATH . 'assets/upload/berita';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;

            // panggil libarary upload dan  memasukan config diatas
            $this->load->library('upload', $config);

            // cek apakah gambar berhasil di upload
            if (!$this->upload->do_upload('image')) {
                // jika gagal ambil peasan error nya
                $error = array('error' => $this->upload->display_errors());

                // membuat session flash data untuk notifikasi
                $this->session->set_flashdata('fail', $error["error"]);

                // kembali kehalaman admin slide show
                redirect("admin/berita");
            } else {
                // jika berhasil ambil nama file yg dihasilkan dari proses upload
                $nama_image = $this->upload->data()["file_name"];

                // simpan data kedalam database dengan fungsi simpan yg ada di model beritaModel
                $data = [
                    "title" => $this->input->post("title", true),
                    "body" => $this->input->post("body", true),
                    "image" => $nama_image,
                ];

                $this->beritaModel->create($data);

                // membuat session flash data untuk notifikasi
                $this->session->set_flashdata('success', 'Berita berhasil diposting');

                // kembali kehalaman admin slide show
                return redirect("admin/berita");
            }
        }


        $data = [
            "page" => "berita",

        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/berita/tambah', $data);
        $this->load->view('admin/berita/modal');
        $this->load->view('templates/footer');
    }

    public function lihat($id)
    {
        $data = [
            "page" => "berita",
            "berita" => $this->db->get_where('berita', ["id" => $id])->row_array()

        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/berita/detail', $data);
        $this->load->view('admin/berita/modal');
        $this->load->view('templates/footer');
    }
    public function ubah($id)
    {
        // cek request methode,
        if ($this->input->method() === 'post') {

            // config upload gambar
            $config['upload_path'] = FCPATH . 'assets/upload/berita';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;

            // panggil libarary upload dan  memasukan config diatas
            $this->load->library('upload', $config);

            // cek apakah ada gambar baru yg diupload
            if (!$this->upload->do_upload('image')) {
                // jika tidak ada
                $data = [
                    "title" => $this->input->post("title", true),
                    "body" => $this->input->post("body", true),
                    "updated_at" => date("Y-m-d", time()),
                ];
            } else {
                // menghapus file_lama dari directory
                $image_old = $this->input->post("image_old");
                unlink("assets/upload/berita/" . $image_old);

                // kemudian ambil nama file yg baru dari proses upload
                $new_image = $this->upload->data()["file_name"];
                $data = [
                    "title" => $this->input->post("title", true),
                    "body" => $this->input->post("body", true),
                    "image" => $new_image,
                    "updated_at" => date("Y-m-d", time()),
                ];
            }




            // simpan data kedalam database dengan fungsi simpan yg ada di model beritaModel


            $this->beritaModel->update($id, $data);

            // membuat session flash data untuk notifikasi
            $this->session->set_flashdata('success', 'Berita berhasil dirubah');

            // kembali kehalaman admin slide show
            return redirect("admin/berita/");
        }
        $data = [
            "page" => "berita",
            "berita" => $this->db->get_where('berita', ["id" => $id])->row_array()

        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/berita/ubah', $data);
        $this->load->view('admin/berita/modal');
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->beritaModel->delete($id)) {
            $this->session->set_flashdata('success', 'Gambar berhasil dihapus');
            redirect("admin/berita");
        } else {
            $this->session->set_flashdata('fail', 'Gambar gagal dihapus');
            redirect("admin/berita");
        }
    }




    public function hello($params)
    {
        // echo $this->uri->segment('4');
        echo $params;
    }
}
