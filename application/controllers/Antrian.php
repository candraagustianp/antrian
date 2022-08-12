<?php 

class Antrian extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('LayananModel','l');
        $this->load->model('AntrianModel','a');
    }

    function index() {
        $this->load->view("template",[
            "content" => $this->load->view('antrian',[
                'layanan' => $this->l->get(),
                'waktu_layanan' => 20,
                'jam_buka' => '08:00:00',
                'jam_tutup' => '11:00:00'
            ],true)
        ]);
    }

    function save() {
        $this->a->save($this->input->post());
        redirect('Antrian');
    }
}

?>