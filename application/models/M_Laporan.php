<?php

class M_Laporan extends CI_model
{

    public function resetRanking()
    {
        $this->db->truncate('ranking');
    }

    public function inputRanking()
    {

        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $nilai = $this->input->post('total');

        $i = 0;
        for ($i = 0; $i < sizeof($kode); $i++) {
            $hasil[] = array(
                'kode' => $_POST['kode'][$i],
                'nama' => $_POST['nama'][$i],
                'total' => $_POST['total'][$i]
            );
        }
        // var_dump($hasil);
        // die;

        $this->db->insert_batch('ranking', $hasil);
    }


    public function Final()
    {
        $queryFinal = "SELECT * FROM `ranking` 
                 ORDER BY `ranking`.`total` 
                 DESC
                 ";
        return $this->db->query($queryFinal)->result_array();
    }

        public function chart()
        {
            // return $this->db->order_by('total','desc')->limit(2)->get('ranking')->result();
            return $this->db->get('ranking')->result_array();
    }
}
