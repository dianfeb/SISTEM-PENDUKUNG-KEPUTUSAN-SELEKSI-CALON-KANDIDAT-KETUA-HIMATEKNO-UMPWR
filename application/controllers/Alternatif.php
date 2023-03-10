    <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    // TODO : Buat Fungsi Update 

    class Alternatif extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            if ($this->session->userdata('username') == NULL) {
                redirect('home');
            }
            $this->load->model('M_Alternatif');
            $this->load->library('form_validation');
        }

        public function index()
        {
                $data['judul'] = 'Data Alternatif';
                $data['alternatif'] = $this->M_Alternatif->getAllAlternatif();
                $data['kode'] = $this->M_Alternatif->KodeAlternatif();

                $this->load->view('layouts/header', $data);

                $this->load->view('alternatif/index', $data);
                $this->load->view('layouts/footer');
        }
        public function tambah()
        {
            $this->form_validation->set_rules('nim', 'NIM', 'required|exact_length[9]|is_unique[alternatif.nim]', [
                'is_unique' => 'NIM sudah digunakan untuk data Alternatif yang lain',
                'required' => 'NIM Harus diisi',
                'exact_length' => 'NIM harus 9 digit'
            ]);
            $this->form_validation->set_rules('nama', 'Nama', 'required', [
                'required' => 'Nama Harus diisi'
            ]);
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
                'required' => 'Jenis kelamin Harus diisi'
            ]);
            $this->form_validation->set_rules('kelas', 'Kelas', 'required', [
                'required' => 'kelas Harus diisi'
            ]);
            $this->form_validation->set_rules('telepon', 'Telepon', 'required', [
                'required' => 'telepon Harus diisi'
            ]);


            if ($this->form_validation->run() == false) {
                $data['judul'] = 'Data Alternatif';
                $data['alternatif'] = $this->M_Alternatif->getAllAlternatif();
                $data['kode'] = $this->M_Alternatif->KodeAlternatif();

                $this->load->view('layouts/header',);
                $this->load->view('alternatif/index', $data);
                $this->load->view('layouts/footer');
            } else {
                $this->M_Alternatif->tambahAlternatif();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Alternatif berhasil Ditambahkan !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'
                );
                redirect('alternatif');
            }
        }

        public function update()
        {

            $this->M_Alternatif->updateAlternatif();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Alternatif berhasil Diubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>'
            );
            redirect('alternatif');
        }

        public function hapus($id_alternatif)
        {
            $this->M_Alternatif->hapusAlternatif($id_alternatif);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Alternatif berhasil Dihapus !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>'
            );
            redirect('alternatif');
        }
    }
