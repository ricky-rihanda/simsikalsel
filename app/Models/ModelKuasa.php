<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelKuasa extends Model
{
    protected $table = 'tbl_identitaskuasa';
    protected $primarykey = 'id_kuasa';

    protected $allowedFields = ['nama_kuasa','noktp_kuasa','email_kuasa','jenis_kelamin','fax_kuasa','notelp_kuasa','id_kota','detailalamat_kuasa','kodepos_kuasa'];

    public function joinReg()
    {
        return $this->db->table('tbl_identitaskuasa')->select('*')->join('tbl_kota', 'tbl_identitaskuasa.id_kota = tbl_kota.id_kota')->get()->getResultArray();
    }
}