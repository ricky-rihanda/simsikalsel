<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelBerat extends Model
{
    protected $table = 'tbl_keberatan';
    protected $primarykey = 'id_keberatan';

    protected $allowedFields = ['deskripsi_keberatan','dok_keberatan','tanggal_keberatan','pejabat_keberatan','dokttd_keberatan'];
}