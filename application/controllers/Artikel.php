<?php
class Artikel extends CI_Controller
{
    public function show($id)
    {
        $data = [
            "page" => "berita",
            "articel" => $this->db->get_where('berita', ["id" => $id])->row_object()
        ];
        $this->load->view('artikel', $data);
    }
}
