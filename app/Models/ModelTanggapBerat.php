<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelTanggapBerat extends Model
{
    protected $table = 'tbl_tanggapanataskeberatan';
    protected $primarykey = 'id_tanggapanberat';

    protected $allowedFields = ['deskripsi_tanggapanberat','dok_tanggapanberat','tanggal_tanggapanberat','pejabat_tanggapanberat','dokttd_tanggapanberat'];
}