<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelKategoriTermohon extends Model
{
    protected $table = 'tbl_kategoritermohon';
    protected $primarykey = 'id_kategoritermohon';

    protected $allowedFields = ['nama_kategoritermohon'];
}