<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelPemohon extends Model
{
    protected $table = 'tbl_pemohon';
    protected $primarykey = 'id_individu';

    protected $allowedFields = ['jenis_sengketa', 'nama_pemohon', 'noktp_pemohon', 'pekerjaan_pemohon', 'notelp_pemohon', 'email_pemohon', 'id_kota', 'detailalamat_pemohon'];

    public function joinReg()
    {
        return $this->db->table('tbl_identitaspemohonindividu')->select('*')->join('tbl_kota', 'tbl_identitaspemohonindividu.id_kota = tbl_kota.id_kota')->get()->getResultArray();
    }
}