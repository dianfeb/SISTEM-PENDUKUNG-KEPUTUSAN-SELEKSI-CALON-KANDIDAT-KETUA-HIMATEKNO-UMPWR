<?php

class M_Kriteria extends CI_model
{
    public function getAllKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }

    public function getKriteriaById($id_kriteria)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id_kriteria])->row_array();
    }

    public function sumBobot()
    {
        $this->db->select_sum('bobot');
        $query = $this->db->get('kriteria');
        if ($query->num_rows() > 0) {
            return $query->row()->bobot;
        } else {
            return 0;
        }
    }

    public function KodeKriteria()
    {
        $query = $this->db->query("select max(kode_kriteria) as max_id from kriteria");
        $rows = $query->row();
        $kode = $rows->max_id;
        $noUrut = (int) substr($kode, 1, 2);
        $noUrut++;
        $char = "C";
        $kode = $char . sprintf("%s", $noUrut);
        return $kode;
    }

    // public function tambahKriteria()
    // {
    //     $jumlahB = $this->sumBobot();
    //     $bobot = $this->input->post('bobot');

    //     // Atur Jumlah nilai Bobot
    //     // Cek apakah jumlah bobot masih <10,jika iya masukkan data, jika tidak tampilkan error
    //     if ($jumlahB + $bobot > 15) {
    //         $this->session->set_flashdata(
    //             'message',
    //             '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //   Jumlah Bobot lebih dari 10, Data Kriteria Gagal ditambahkan !
    // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //   <span aria-hidden="true">&times;</span>
    // </button>
    // </div>'
    //         );
    //         redirect('kriteria');
    //     } else {
    //         $data = [
    //             'kode_kriteria' => $this->input->post('kode_kriteria'),
    //             'nama_kriteria' => $this->input->post('nama_kriteria'),
    //             'atribut' => $this->input->post('atribut'),
    //             'bobot' => $bobot
    //         ];
    //         $this->db->insert('kriteria', $data);
    //     }
    // }


    public function tambahKriteria()
    {
        $jumlahB = $this->sumBobot();
        $bobot = $this->input->post('bobot');

        
        if ($bobot > 5) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Jumlah Bobot lebih dari 5, Data Kriteria Gagal ditambahkan !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'
            );
            redirect('kriteria');
        } else {
            $data = [
                'kode_kriteria' => $this->input->post('kode_kriteria'),
                'nama_kriteria' => $this->input->post('nama_kriteria'),
                'atribut' => $this->input->post('atribut'),
                'bobot' => $bobot
            ];
            $this->db->insert('kriteria', $data);
        }
    }

    public function updateKriteria()
    {
        $id_kriteria = $this->input->post('id_kriteria');

        $data = [
            'kode_kriteria' => $this->input->post('kode_kriteria'),
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'atribut' => $this->input->post('atribut'),
            'bobot' => $this->input->post('bobot'),
        ];

        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->update('kriteria', $data);
        // }
    }

    public function hapusKriteria($id_kriteria)
    {
        $this->db->delete('kriteria', ['id_kriteria' => $id_kriteria]);
    }
}
