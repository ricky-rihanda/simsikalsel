<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelInfo extends Model
{
    protected $table = 'tbl_sengketa';
    protected $primarykey = 'id_sengketa';

    protected $allowedFields = ['id_individu', 'id_kategorisengketa', 'deskripsi_sengketa', 'alasan_sengketa', 'dok_sengketa', 'dokk_sengketa', 'dokkk_sengketa'];

    public function joinReg()
    {
        return $this->db->table('tbl_sengketa')->select('*')->join('tbl_kategorisengketa', 'tbl_sengketa.id_kategorisengketa = tbl_kategorisengketa.id_kategorisengketa')->get()->getResultArray();
    }
}