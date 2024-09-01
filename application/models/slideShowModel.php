<?php
class slideShowModel extends CI_Model
{

    public function simpan($nama_file)
    {

        $data = [
            "id" => time(),
            "nama_file" => $nama_file
        ];
        $this->db->insert("slide-show", $data);
    }

    public function hapus($id)
    {
        $nama_file = $this->db->get_where('slide-show', ['id' => $id])->row_array()['nama_file'];
        if ($nama_file != null) {

            // menghapus file dari directory
            unlink("assets/upload/slide-show/$nama_file");

            // menghapus nama file dari databse
            $this->db->delete('slide-show', ['id' => $id]);
            return 1;
        } else {
            // echo "internal server Error";
            return 0;
        }
    }
}
