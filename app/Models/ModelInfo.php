<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelInfo extends Model
{
    protected $table = 'tbl_informasiyangdimohon';
    protected $primarykey = 'id_informasiyangdimohon';

    protected $allowedFields = ['id_kategorisengketa','deskripsi_informasiyangdimohon','petugaspenerima_informasiyangdimohon','dok_informasiyangdimohon','alasan_informasiyangdimohon','tanggalpermohonan_informasiyangdimohon'];

    public function joinReg()
    {
        return $this->db->table('tbl_informasiyangdimohon')->select('*')->join('tbl_kategorisengketa', 'tbl_informasiyangdimohon.id_kategorisengketa = tbl_kategorisengketa.id_kategorisengketa')->get()->getResultArray();
    }
}