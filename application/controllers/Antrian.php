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
                'layanan' => $this->l->get()
            ],true)
        ]);
    }

    function save() {
        $this->a->save($this->input->post());
        redirect('Antrian');
    }
}

?>