<?php
class Beranda extends CI_Controller
{
    public function index()
    {
        $data = [
            "slides" => $this->db->get("slide-show")->result_object(),
            "articels" => $this->db->get("berita")->result_object(),
            "albums" => $this->db->query('
                                        SELECT 
                                            album.*, 
                                            (SELECT gallery.image 
                                                FROM gallery 
                                                WHERE gallery.id_album = album.id 
                                                ORDER BY gallery.id ASC 
                                                LIMIT 1) AS gallery_image 
                                            FROM 
                                        album;
                                        ')->result_object()
        ];
        $this->load->view('beranda.php', $data);
    }
}
