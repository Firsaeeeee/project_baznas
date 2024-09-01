<?php
class galeri extends CI_Controller
{
    public function show($id)
    {
        $data = [
            "photos" => $this->db->get_where('gallery', ["id_album" => $id])->result_object()
        ];
        $this->load->view('galeri.php', $data);
    }
}
