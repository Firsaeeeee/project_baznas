<?php
class albumModel extends CI_Model
{
    public function create($data)
    {
        $this->db->insert("album", $data);
    }

    public function delete($id)
    {

        // ambil semua nama foto dari databse berdasarkan idalmbum
        $photos = $this->db->get_where('gallery', ['id_album' => $id])->result_object();


        // hapus satu persatu foto 
        foreach ($photos as $photo) {
            // menghapus file dari directory
            // echo $photo->image;
            unlink("assets/upload/gallery/$photo->image");
            // hapus data dari database
            $this->db->delete('gallery', ['id' => $photo->id]);
        }


        // Setelah foto berhasil dihapus semua maka hapus data album
        $this->db->delete('album', ['id' => $id]);


        $photos = $this->db->get_where('gallery', ['id_album' => $id])->result_object();
        if ($photos == null) {
            // menghapus nama file dari databse
            return 1;
        } else {
            // echo "internal server Error";
            return 0;
        }
    }
}
