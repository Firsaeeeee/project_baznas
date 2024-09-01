<?php
class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('galleryModel');

        // cek aksess
        if ($this->session->userdata('role_id') == null) {
            // jika tidak ada session alihkan ke halaman login
            redirect('auth');
        }
    }
    public function index()
    {
        $data = [
            "page" => "gallery",
            "albums" => $this->db->get("album")->result_array()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/gallery/index', $data);
        $this->load->view('admin/gallery/modal');

        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        // jika requesst methode sama dengan post
        if ($this->input->method() === "post") {
            // maka masuk kesini



            // config upload gambar
            $config['upload_path'] = FCPATH . 'assets/upload/gallery';
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
                redirect("admin/gallery");
            } else {
                // jika berhasil ambil nama file yg dihasilkan dari proses upload
                $nama_image = $this->upload->data()["file_name"];

                // simpan data kedalam database dengan fungsi simpan yg ada di model beritaModel
                $data = [
                    "image" => $nama_image,
                    "id_album" => $this->input->post("id_album", true),
                ];




                $this->load->model("galleryModel");
                $this->galleryModel->create($data);

                // membuat session flash data untuk notifikasi
                $this->session->set_flashdata('success', 'Foto berhasil ditambahkan');

                // kembali kehalaman admin slide show
                return redirect("admin/gallery");
            }


            // jika tidak sama dengan
        } else {
            // maka masuk kesinis
            $data = [
                "page" => "gallery",
                "albums" => $this->db->get("album")->result_array()
            ];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('admin/gallery/tambah', $data);
            $this->load->view('templates/footer');
        }
    }


    public function foto($id)
    {
        $data = [
            "page" => "gallery",
            "photos" => $this->db->query("SELECT * FROM album JOIN gallery ON gallery.id_album=album.id WHERE gallery.id_album =" . $id)->result_array()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('admin/gallery/foto', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $id_album = $this->uri->segment(5);

        if ($this->galleryModel->hapus($id)) {
            $this->session->set_flashdata('success', 'Gambar berhasil dihapus');
            redirect("admin/gallery/foto/$id_album");
        } else {
            $this->session->set_flashdata('fail', 'Gambar gagal dihapus');
            redirect("admin/gallery/foto/$id_album");
        }
    }
    public function hello($params)
    {
        // echo $this->uri->segment('4');
        echo $params;
    }
}
