<?php

class PekerjaanModel extends CI_Model
{
    public function get_all_data_pekerjaan()
    {
        $query = "SELECT * FROM pekerjaan";
        return $this->db->query($query)->result_array();
    }

    public function list_get_pekerjaan($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get('pekerjaan');
        return $result = $q->num_rows() > 0 ? $q->result_array() : array();
    }
}
