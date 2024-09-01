<?php
class beritaModel extends CI_Model
{
    public function create($data)
    {
        $this->db->insert('berita', $data);
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('berita', $data);
    }

    public function delete($id)
    {
        $nama_file = $this->db->get_where('berita', ['id' => $id])->row_array()['image'];
        if ($nama_file != null) {

            // menghapus file dari directory
            unlink("assets/upload/berita/$nama_file");

            // menghapus nama file dari databse
            $this->db->delete('berita', ['id' => $id]);
            return 1;
        } else {
            // echo "internal server Error";
            return 0;
        }
    }
}
