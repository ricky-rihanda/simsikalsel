<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelJawabInfo extends Model
{
    protected $table = 'tbl_jawabanataspermohonaninformasi';
    protected $primarykey = 'id_jawaban';

    protected $allowedFields = ['deskripsi_jawaban','dok_jawaban','tanggal_jawaban','ttdpejabat_jawaban','dokttd_jawaban'];
}