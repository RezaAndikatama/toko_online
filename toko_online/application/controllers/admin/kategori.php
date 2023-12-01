<?php

class Kategori extends CI_Controller{
    public function birthday()
    {
        $data['birthday'] = $this->model_kategori->data_birthday()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('birthday', $data);
        $this->load->view('templates/footer');
        
    }
     public function kue_kering()
    {
        $data['kue_kering'] = $this->model_kategori->data_kue_kering()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kue_kering', $data);
        $this->load->view('templates/footer');
        
    }
}