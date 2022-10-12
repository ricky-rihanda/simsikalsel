<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelPemohon extends Model
{
    protected $table = 'tbl_identitaspemohonindividu';
    protected $primarykey = 'id_individu';

    protected $allowedFields = ['jenis_sengketa','nama_pemohon','noktp_pemohon','pekerjaan_pemohon','fax_pemohon','notelp_pemohon','tempatlahir_pemohon','tanggallahir_pemohon','email_pemohon','jenis_kelamin','id_kota','detailalamat_pemohon','kodepos_pemohon','dok_pemohon','id_kuasa','id_termohon','id_jawaban','id_informasiyangdimohon','id_keberatan','id_tanggapanberat','id_doklengkap'];

    public function joinReg()
    {
        return $this->db->table('tbl_identitaspemohonindividu')->select('*')->join('tbl_kota', 'tbl_identitaspemohonindividu.id_kota = tbl_kota.id_kota')->get()->getResultArray();
    }
}