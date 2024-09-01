<?php
class galleryModel extends CI_Model
{
    public function create($data)
    {
        $this->db->insert("gallery", $data);
    }

    public function hapus($id)
    {
        $nama_file = $this->db->get_where('gallery', ['id' => $id])->row_array()['image'];
        if ($nama_file != null) {

            // menghapus file dari directory
            unlink("assets/upload/gallery/$nama_file");

            // menghapus nama file dari databse
            $this->db->delete('gallery', ['id' => $id]);
            return 1;
        } else {
            // echo "internal server Error";
            return 0;
        }
    }
}
