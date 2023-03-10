<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') != 'dian') {
            redirect('home');
        }
        $this->load->model('M_Nilai');
        $this->load->model('M_Kriteria');
    }
    public function index()
    {
        $data['judul'] = 'Penilaian Alternatif';
        $data['penilaian'] = $this->M_Nilai->QueryJoinNilaiAlternatif();
        $data['kriteria'] = $this->M_Kriteria->getAllKriteria();


        $this->load->view('layouts/header', $data);
        $this->load->view('nilai/index', $data);
        $this->load->view('layouts/footer');
        $this->load->view('nilai/penilaian', $data);
    }

    public function penilaianAlternatif()
    {
        $this->M_Nilai->NilaiAlternatif();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Alternatif Berhasil!</div>');
        redirect('nilai');
    }
}
