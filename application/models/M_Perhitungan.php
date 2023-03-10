<?php

class M_Perhitungan extends CI_model
{
    // ? Query Untuk menampilkan kd.Alternatif-Nama-dan seluruh isi tabel Kecocokan
    public function JoinMatriksAlternatif()
    {
        $query = "SELECT `alternatif`.`id_alternatif`, `alternatif`.`kode_alternatif`,`alternatif`.`nama`,`matriks`.*
                FROM `matriks`JOIN `alternatif`
                ON `matriks`.`id_nilai`=`alternatif`.`id_alternatif`
                WHERE `matriks`.`id_nilai`=`alternatif`.`id_alternatif`
                ";
        return $this->db->query($query)->result_array();
    }

    // * Jika Benefit, maka cari Maxnya. Jika Cost, maka cari Minnya.
    public function MaxC1()
    {
        $queryMaxC1 = "SELECT MAX(`C1`) AS `C1`
                   FROM `matriks`
    ";
        return $this->db->query($queryMaxC1)->row_array();
    }
    // public function MinC2()
    // {
    //     $queryMinC2 = "SELECT MIN(`C2`) AS `C2`
    //                FROM `matriks`
    // ";
    //     return $this->db->query($queryMinC2)->row_array();
    // }
    public function MaxC2()
    {
        $queryMaxC2 = "SELECT MAX(`C2`) AS `C2`
                   FROM `matriks`
    ";
        return $this->db->query($queryMaxC2)->row_array();
    }
    public function MaxC3()
    {
        $queryMaxC3 = "SELECT MAX(`C3`) AS `C3`
                   FROM `matriks`
    ";
        return $this->db->query($queryMaxC3)->row_array();
    }
    public function MaxC4()
    {
        $queryMaxC4 = "SELECT MAX(`C4`) AS `C4`
                   FROM `matriks`
    ";
        return $this->db->query($queryMaxC4)->row_array();
    }
    public function MaxC5()
    {
        $queryMaxC5 = "SELECT MAX(`C5`) AS `C5`
                   FROM `matriks`
    ";
        return $this->db->query($queryMaxC5)->row_array();
    }
    public function MaxC6()
    {
        $queryMaxC6 = "SELECT MAX(`C6`) AS `C6`
                   FROM `matriks`
    ";
        return $this->db->query($queryMaxC6)->row_array();
    }

    public function bobotC1()
    {
        return $this->db->get_where('kriteria', ['kode_kriteria' => 'C1'])->row_array();
    }
    public function bobotC2()
    {
        return $this->db->get_where('kriteria', ['kode_kriteria' => 'C2'])->row_array();
    }
    public function bobotC3()
    {
        return $this->db->get_where('kriteria', ['kode_kriteria' => 'C3'])->row_array();
    }
    public function bobotC4()
    {
        return $this->db->get_where('kriteria', ['kode_kriteria' => 'C4'])->row_array();
    }
    public function bobotC5()
    {
        return $this->db->get_where('kriteria', ['kode_kriteria' => 'C5'])->row_array();
    }
    public function bobotC6()
    {
        return $this->db->get_where('kriteria', ['kode_kriteria' => 'C6'])->row_array();
    }
}
