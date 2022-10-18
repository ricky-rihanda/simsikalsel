<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelTermohon extends Model
{
    protected $table = 'tbl_termohon';
    protected $primarykey = 'id_termohon';

    protected $allowedFields = ['id_individu', 'namabadanpublik_termohon', 'unitkerja_termohon', 'id_kategoritermohon', 'id_kota', 'detailalamat_termohon', 'nama_termohon', 'jabatan_termohon', 'notelp_termohon', 'email_termohon'];

    public function joinReg()
    {
        return $this->db->table('tbl_termohon')->select('*')
            ->join('tbl_kategoritermohon', 'tbl_termohon.id_kategoritermohon = tbl_kategoritermohon.id_kategoritermohon')
            ->join('tbl_kota', 'tbl_termohon.id_kota = tbl_kota.id_kota')
        ->get()->getResultArray();
    }
}