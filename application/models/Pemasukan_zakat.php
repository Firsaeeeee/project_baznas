<?php
class Pemasukan_zakat extends CI_Model
{
    public function simpan_data($data)
    {
        // var_dump($data);
        $this->db->insert('Pemasukan_zakat', $data);
    }
}
