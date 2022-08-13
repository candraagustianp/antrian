<?php 

class AntrianModel extends CI_Model {
    function get() {
        return $this->db->get('antri')->result_array();
    }

    function save($data) {
        $this->db->insert('antri',$data);
    }

    function findAntrian($tanggal) {
        $this->db->select('pukul');
        return $this->db->where(['tanggal' => $tanggal])->get('antri')->result_array();
    }
}