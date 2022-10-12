<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelDok extends Model
{
    protected $table = 'tbl_doklengkap';
    protected $primarykey = 'id_doklengkap';

    protected $allowedFields = ['doklengkap','doklengkapp','doklengkappp'];
}