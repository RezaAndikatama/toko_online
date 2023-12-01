<?php

class Model_kategori extends CI_Model{
    public function data_birthday(){
        return $this->db->get_where("tb_barang",array('kategori' => 'birthday'));
    }

     public function data_kue_kering(){
        return $this->db->get_where("tb_barang",array('kategori' => 'kue kering'));
    }

}