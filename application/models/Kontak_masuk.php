<?php
class Kontak_masuk extends CI_Model
{
    public function simpan_data($data)
    {
        // var_dump($data);
        $this->db->insert('kontak_masuk', $data);
    }
}
