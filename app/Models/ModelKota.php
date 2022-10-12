<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelKota extends Model
{
    protected $table = 'tbl_kota';
    protected $primarykey = 'id_kota';

    protected $allowedFields = ['nama_kota'];
}