<?php

class M_Alternatif extends CI_model
{
    public function getAllAlternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    public function getAlternatifbyId($id_alternatif)
    {
        return $this->db->get_where('alternatif', ['id_alternatif' => $id_alternatif])->row_array();
    }

    public function KodeAlternatif()
    {
        $query = $this->db->query("select max(kode_alternatif) as max_id from alternatif");
        $rows = $query->row();
        $kode = $rows->max_id;
        $noUrut = (int) substr($kode, 1, 2);
        $noUrut++;
        $char = "A";
        $kode = $char . sprintf("%s", $noUrut);
        return $kode;
    }

    public function tambahAlternatif()
    {
        $data = [
            'kode_alternatif' => $this->input->post('kode'),
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kelas' => $this->input->post('kelas'),
            'telepon' => $this->input->post('telepon'),
        ];
        $this->db->insert('alternatif', $data);

        // ? Memasukkan id_alternatif ke tabel nilai dan kecocokan
        $id_alternatif = $this->db->insert_id();
        $parameter = [
            'id_alternatif' => $id_alternatif
        ];
        $this->db->insert('nilai', $parameter);
        $this->db->insert('matriks', $parameter);
    }

    public function updateAlternatif()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $data = [
            'kode_alternatif' => $this->input->post('kode'),
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kelas' => $this->input->post('kelas'),
            'telepon' => $this->input->post('telepon'),
        ];
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->update('alternatif', $data);
    }

    public function hapusAlternatif($id_alternatif)
    {
        $this->db->delete('alternatif', ['id_alternatif' => $id_alternatif]);
    }
}
