<?php 

class Antrian extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('LayananModel','l');
        $this->load->model('AntrianModel','a');
    }

    function index() {
        $this->load->view("user/template",[
            "content" => $this->load->view('user/antrian',[
                'layanan' => $this->l->get(),
                'waktu_layanan' => 20,
                'jam_buka' => '08:00:00',
                'jam_tutup' => '16:00:00',
                'mulai_istirahat' => '12:00:00',
                'selesai_istirahat' => '13:00:00'
            ],true)
        ]);
    }

    function save() {
        $this->a->save($this->input->post());
        $this->load->view("user/template",[
            "content" => $this->load->view('user/pendaftaran',[
                'data' => $this->input->post()
            ],true)
        ]);
    }

    function getAntrian($tanggal){
        echo json_encode($this->a->findAntrian($tanggal));

    }
}

?>