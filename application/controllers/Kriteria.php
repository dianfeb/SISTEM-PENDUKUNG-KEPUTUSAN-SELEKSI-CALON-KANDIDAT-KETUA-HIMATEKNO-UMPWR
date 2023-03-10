<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') != 'dian') {
          redirect('home');
      }
        $this->load->model('M_Kriteria');
    }

    public function index()
    {
        $data['judul'] = 'Data Kriteria';

        $data['kode'] = $this->M_Kriteria->KodeKriteria();
        $data['jumlah'] = $this->M_Kriteria->sumBobot();
        $data['kriteria'] = $this->M_Kriteria->getAllKriteria();

        $this->load->view('layouts/header', $data);

        $this->load->view('kriteria/index', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $this->M_Kriteria->tambahKriteria();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Kriteria berhasil Ditambahkan !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>'
        );
        redirect('kriteria');
    }

    public function hapus($id)
    {
        $this->M_Kriteria->hapusKriteria($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Kriteria berhasil Dihapus !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>'
        );
        redirect('kriteria');
    }

    public function update()
    {
        $this->M_Kriteria->updateKriteria();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-info alert-dismissible fade show" role="alert">
    Data Kriteria berhasil Diubah !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>'
        );
        redirect('kriteria');
    }
}
