<?php

class M_Nilai extends CI_model
{
    // ? Query Untuk menampilkan kd.Alternatif-Nama-dan seluruh isi tabel Nilai
    public function QueryJoinNilaiAlternatif()
    {
        $query = "SELECT `alternatif`.`kode_alternatif`,`alternatif`.`nama`,`nilai`.*
              FROM `nilai` JOIN `alternatif`
              ON `nilai`.`id_nilai`=`alternatif`.`id_alternatif`
              WHERE `nilai`.`id_nilai`=`alternatif`.`id_alternatif`
    ";
        return $this->db->query($query)->result_array();
    }

    public function NilaiAlternatif()
    {
        $id_nilai = $this->input->post('id_nilai');
        $id_alternatif = $this->input->post('id_alternatif');

        $c1 = $this->input->post('C1');
        $c2 = $this->input->post('C2');
        $c3 = $this->input->post('C3');
        $c4 = $this->input->post('C4');
        $c5 = $this->input->post('C5');
        $c6 = $this->input->post('C6');

        $data = [
            'id_alternatif' => $id_alternatif,
            'C1' => $c1,
            'C2' => $c2,
            'C3' => $c3,
            'C4' => $c4,
            'C5' => $c5,
            'C6' => $c6
        ];

        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai', $data);

        // ! Buat bagian Matriksnya

        $C1 = $this->MatriksC1($c1);
        $C2 = $this->MatriksC2($c2);
        $C3 = $this->MatriksC3($c3);
        $C4 = $this->MatriksC4($c4);
        $C5 = $this->MatriksC5($c5);
        $C6 = $this->MatriksC6($c6);

        $parameters = [
            'C1' => $C1,
            'C2' => $C2,
            'C3' => $C3,
            'C4' => $C4,
            'C5' => $C5,
            'C6' => $C6
        ];

        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->update('matriks', $parameters);
    }


    public function getMatriks()
    {
        return $this->db->get('matriks')->result_array();
    }

    public function MatriksC1($c1)
    {
        if ($c1 == 'Ya') {
            $c1 = 5;
        } else {
            $c1 = 1;
        }
        return $c1;
    }

    public function MatriksC2($c2)
    {
        if ($c2 == '> 95') {
            $c2 = 5;
        } elseif ($c2 == '81 - 95') {
            $c2 = 4;
        } elseif ($c2 == '66 - 80') {
            $c2 = 3;
        } elseif ($c2 == '50 - 65') {
            $c2 = 2;
        } else {
            $c2 = 1;
        }
        return $c2;
    }

    public function MatriksC3($c3)
    {
        if ($c3 == '> 3,70') {
            $c3 = 5;
        } elseif ($c3 == '3,51 - 3,70') {
            $c3 = 4;
        } elseif ($c3 == '3,26 - 3,50') {
            $c3 = 3;
        } elseif ($c3 == '3,00 - 3,25') {
            $c3 = 2;
        } else {
            $c3 = 1;
        }
        return $c3;
    }

    public function MatriksC4($c4)
    {
        if ($c4 == '> 95') {
            $c4 = 5;
        } elseif ($c4 == '81 - 95') {
            $c4 = 4;
        } elseif ($c4 == '66 - 80') {
            $c4 = 3;
        } elseif ($c4 == '50 - 65') {
            $c4 = 2;
        } else {
            $c4 = 1;
        }
        return $c4;
    }

    public function MatriksC5($c5)
    {
        if ($c5 == '> 95') {
            $c5 = 5;
        } elseif ($c5 == '81 - 95') {
            $c5 = 4;
        } elseif ($c5 == '66 - 80') {
            $c5 = 3;
        } elseif ($c5 == '50 - 65') {
            $c5 = 2;
        } else {
            $c5 = 1;
        }
        return $c5;
    }

    public function MatriksC6($c6)
    {
        if ($c6 == '> 95') {
            $c6 = 5;
        } elseif ($c6 == '81 - 95') {
            $c6 = 4;
        } elseif ($c6 == '66 - 80') {
            $c6 = 3;
        } elseif ($c6 == '50 - 65') {
            $c6 = 2;
        } else {
            $c6 = 1;
        }
        return $c6;
    }
}
