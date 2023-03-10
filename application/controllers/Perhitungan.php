<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') != 'dian') {
            redirect('home');
        }
        $this->load->model('M_Nilai');
        $this->load->model('M_Kriteria');
        $this->load->model('M_Perhitungan');
        $this->load->model('M_Laporan');
    }

    public function matriks()
    {
        $data['judul'] = 'Nilai Matriks';
        $data['penilaian'] = $this->M_Nilai->QueryJoinNilaiAlternatif();
        $data['kriteria'] = $this->M_Kriteria->getAllKriteria();
        $data['matriks'] = $this->M_Perhitungan->JoinMatriksAlternatif();

        $this->load->view('layouts/header', $data);
        $this->load->view('matriks/index', $data);
        $this->load->view('layouts/footer');
    }

    public function normalisasi()
    {
        $data['judul'] = 'Normalisasi';

        $data['matriks'] = $this->M_Perhitungan->JoinMatriksAlternatif();

        $data['maxC1'] = $this->M_Perhitungan->MaxC1();
        // $data['minC2'] = $this->M_Perhitungan->minC2(); // ini min karena dia cost
        $data['maxC2'] = $this->M_Perhitungan->MaxC2();
        $data['maxC3'] = $this->M_Perhitungan->MaxC3();
        $data['maxC4'] = $this->M_Perhitungan->MaxC4();
        $data['maxC5'] = $this->M_Perhitungan->MaxC5();
        $data['maxC6'] = $this->M_Perhitungan->MaxC6();

        $this->load->view('layouts/header', $data);
        $this->load->view('nilai/normalisasi', $data);
        $this->load->view('layouts/footer');
    }

    public function perankingan()
    {
        $data['judul'] = 'Hasil Perankingan';
        $data['matriks'] = $this->M_Perhitungan->JoinMatriksAlternatif();

        $data['maxC1'] = $this->M_Perhitungan->MaxC1();
        $data['maxC2'] = $this->M_Perhitungan->maxC2(); 
        $data['maxC3'] = $this->M_Perhitungan->MaxC3();
        $data['maxC4'] = $this->M_Perhitungan->MaxC4();
        $data['maxC5'] = $this->M_Perhitungan->MaxC5();
        $data['maxC6'] = $this->M_Perhitungan->MaxC6();

        $data['bobotC1'] = $this->M_Perhitungan->bobotC1();
        $data['bobotC2'] = $this->M_Perhitungan->bobotC2();
        $data['bobotC3'] = $this->M_Perhitungan->bobotC3();
        $data['bobotC4'] = $this->M_Perhitungan->bobotC4();
        $data['bobotC5'] = $this->M_Perhitungan->bobotC5();
        $data['bobotC6'] = $this->M_Perhitungan->bobotC6();

        $this->load->view('layouts/header', $data);
        $this->load->view('nilai/perankingan', $data);
        $this->load->view('nilai/modal_Ranking', $data);
        $this->load->view('layouts/footer');
    }

    public function hasilAkhir()
    {
        $this->M_Laporan->resetRanking();
        $this->M_Laporan->inputRanking();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Dirangking!</div>');
        redirect('admin/laporan');
    }
}
