<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelKuasa extends Model
{
    protected $table = 'tbl_kuasa';
    protected $primarykey = 'id_kuasa';

    protected $allowedFields = ['id_individu', 'nama_kuasa', 'noktp_kuasa', 'email_kuasa', 'notelp_kuasa', 'id_kota', 'detailalamat_kuasa'];

    public function joinReg()
    {
        return $this->db->table('tbl_kuasa')->select('*')->join('tbl_kota', 'tbl_kuasa.id_kota = tbl_kota.id_kota')->get()->getResultArray();
    }
}