<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek_login();
        // $this->load->model('Admin_M');
        // $this->load->model('Menu_M');
      
        $this->load->model('M_Laporan');
    }

    public function laporan()
    {
        if ($this->session->userdata('username') == NULL) {
            redirect('home');
        }
        $data['judul'] = 'Laporan Perankingan';
        $data['rank'] = $this->M_Laporan->Final();

        $this->load->view('layouts/header', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('layouts/footer');
    }

    public function cetakLaporan()
    {
        if ($this->session->userdata('username') == NULL) {
            redirect('home');
        }
        $data['judul'] = 'Cetak Laporan';
        $data['rank'] = $this->M_Laporan->Final();

        $this->load->view('admin/cetakLaporan', $data);
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->db->where('username', $username)->where('password', $password)->get('user')->row();

        if ($cek != NULL){
            $data = array(
                'username' => $username,
            );

            $this->session->set_userdata($data);
            redirect('dashboard');
        }
        else {
            echo "<script>
            alert('username atau password yang anda masukan salah');
            window.location.href = '" . site_url('home') . "';
        
            </script>";
        }
        
        
     
        
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
