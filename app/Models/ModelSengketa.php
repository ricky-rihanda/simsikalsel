<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelSengketa extends Model
{
    protected $table = 'tbl_kategorisengketa';
    protected $primarykey = 'id_kategorisengketa';

    protected $allowedFields = ['nama_kategorisengketa'];
}