<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'form_validation');
        $this->load->model('M_Laporan');
    }

    public function index()
    {

        $data['judul'] = 'SPK | HIMATEKNO';


        $this->load->view('home', $data);
    }

    public function hasil()
    {

        $data['judul'] = 'SPK | HIMATEKNO';


        $this->load->view('hasil', $data);
    }

    public function chartRanking()
    {
        $data = $this->M_Laporan->chart();
        echo json_encode($data);
    }
}
