<?php

namespace App\Controllers;

use App\Models\ModelInfo;
use App\Models\ModelKuasa;
use App\Models\ModelTermohon;
use App\Models\ModelPemohon;
use App\Models\ModelJawabInfo;
use App\Models\ModelBerat;
use App\Models\ModelTanggapBerat;
use App\Models\ModelDok;
use App\Models\ModelKategoriTermohon;
use App\Models\ModelKota;
use App\Models\ModelSengketa;

class hanyar extends BaseController
{

public function simpanAju()

    {
        if (!$this->validate([
            'jenis_sengketa' => [
                'rules' => 'required',
                'errors' => [
                    'Harus memilih salah satu jenis sengketa'
                ]
            ],
            'nama_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'Nama pemohon harus diisi'
                ]
            ],
            'noktp_pemohon' => [
                'rules' => 'required|numeric|max_length[16]|min_length[16]',
                'errors' => [
                    'required'=>'No. KTP harus diisi',
                    'numeric'=>'No. KTP harus diisi dengan angka',
                    'max_length'=>'Masukkan 16 angka untuk No. KTP',
                    'min_length'=>'Masukkan 16 angka untuk No. KTP'
                ]
            ],
            'pekerjaan_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'Pekerjaan harus diisi'
                ]
            ],
            'notelp_pemohon' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required'=>'Nomor Telepon harus diisi',
                    'numeric'=>'Nomor Telepon harus diisi dengan angka'
                ]
            ],
            'tempatlahir_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'Pekerjaan harus diisi'
                ]
            ],
            'tanggallahir_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'Pekerjaan harus diisi'
                ]
            ],
            'email_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'Pekerjaan harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'Jenis Kelamin harus dipilih'
                ]
            ],
            'kota_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'Kota Alamat Pemohon harus dipilih'
                ]
            ],
            'detailalamat_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'Detail Alamat harus di isi'
                ]
            ],
            'kodepos_pemohon' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required'=>'Kode Pos harus diisi',
                    'numeric'=>'Kode Pos harus diisi dengan angka'
                ]
            ],
            'dok_pemohon' => [
                'rules' => 'ext_in[surat_lapak,pdf,docx,png]|max_size[surat_lapak,5120]',
                'errors' => [
                    'ext_in' => 'Masukkan Dokumen dengan format .pdf, .docx, atau .png',
                    'max_size' => "Surat Lapak maksimal 5 mb"
                    
                ]
            ],
            'namabadanpublik_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'Nama Badan Publik harus di isi'
                ]
            ],
            'unitkerja_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'Unit Kerja harus di isi'
                ]
            ],
            'kategori_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'Kategori termohon harus dipilih'
                ]
            ],
            'kota_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'Kota termohon harus dipilih'
                ]
            ],
            'detailalamat_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'Detail Alamat termohon harus di isi'
                ]
            ],
            'nama_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'Nama termohon harus di isi'
                ]
            ],
            'jabatan_termohon' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Jabatan termohon harus di isi'
                ]
            ],
            'notelp_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'Nomor Telepon termohon harus di isi'
                ]
            ],
            'email_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'email termohon harus di isi'
                ]
            ],
            'kategori_sengketa' => [
                'rules' => 'required',
                'errors' => [
                    'Kategori sengketa harus di isi'
                ]
            ],
            'deskripsi_informasiyangdimohon' => [
                'rules' => 'required',
                'errors' => [
                    'Deskripsi harus di isi'
                ]
            ],
            'petugaspenerima_informasiyangdimohon' => [
                'rules' => 'required',
                'errors' => [
                    'Petugas penerima harus di isi'
                ]
            ],
            'dok_informasiyangdimohon' => [
                'rules' => 'ext_in[surat_lapak,pdf,docx,png]|max_size[surat_lapak,5120]',
                'errors' => [
                    'ext_in' => 'Masukkan Dokumen dengan format .pdf, .docx, atau .png',
                    'max_size' => "Surat Lapak maksimal 5 mb"
                    
                ]
            ],
            'alasan_informasiyangdimohon' => [
                'rules' => 'required',
                'errors' => [
                    'Deskripsi harus di isi'
                ]
            ],
            'tanggal_informasiyangdimohon' => [
                'rules' => 'required',
                'errors' => [
                    'Deskripsi harus di isi'
                ]
            ]
               ]))
        {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        else
        {
            session()->setFlashdata('success', "Pengajuan berhasil dilakukan");
            $pemohon = new ModelPemohon();
            $pemohon->insert([
                'jenis_sengketa' => $this->request->getPost('jenis_sengketa'),
                'nama_pemohon' => $this->request->getPost('nama_pemohon'),
                'noktp_pemohon' => $this->request->getPost('noktp_pemohon'),
                'pekerjaan_pemohon' => $this->request->getPost('pekerjaan_pemohon'),
                'fax_pemohon' => $this->request->getPost('fax_pemohon'),
                'notelp_pemohon' => $this->request->getPost('notelp_pemohon'),
                'tempatlahir_pemohon' => $this->request->getPost('tempatlahir_pemohon'),
                'tanggallahir_pemohon' => $this->request->getVar('tanggallahir_pemohon'),
                'email_pemohon' => $this->request->getPost('email_pemohon'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'id_kota' => $this->request->getPost('kota_pemohon'),
                'detailalamat_pemohon' => $this->request->getPost('detailalamat_pemohon'),
                'kodepos_pemohon' => $this->request->getPost('kodepos_pemohon'),
                'dok_pemohon' => $this->request->getPost('dok_pemohon')
            ]);

            $kuasa = new ModelKuasa();
            $kuasa->insert([
                'nama_kuasa' => $this->request->getPost('nama_kuasa'),
                'noktp_kuasa' => $this->request->getPost('noktp_kuasa'),
                'fax_kuasa' => $this->request->getPost('fax_kuasa'),
                'notelp_kuasa' => $this->request->getPost('notelp_kuasa'),
                'email_kuasa' => $this->request->getPost('email_kuasa'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'id_kota' => $this->request->getPost('kota_kuasa'),
                'detailalamat_kuasa' => $this->request->getPost('detailalamat_kuasa'),
                'kodepos_kuasa' => $this->request->getPost('kodepos_kuasa')
            ]);
            
            $termohon = new ModelTermohon();
            $termohon->insert([
                'namabadanpublik_termohon' => $this->request->getPost('namabadanpublik_termohon'),
                'unitkerja_termohon' => $this->request->getPost('unitkerja_termohon'),
                'id_kategoritermohon' => $this->request->getPost('kategori_termohon'),
                'id_kota' => $this->request->getPost('kota_termohon'),
                'detailalamat_termohon' => $this->request->getPost('detailalamat_termohon'),
                'nama_termohon' => $this->request->getPost('nama_termohon'),
                'jabatan_termohon' => $this->request->getPost('jabatan_termohon'),
                'notelp_termohon' => $this->request->getPost('notelp_termohon'),
                'fax_termohon' => $this->request->getPost('fax_termohon'),
                'email_termohon' => $this->request->getPost('email_termohon')
            ]);

            $info = new ModelInfo();
            $info->insert([
                'id_kategorisengketa'=> $this->request->getPost('kategori_sengketa'),
                'deskripsi_informasiyangdimohon' => $this->request->getPost('deskripsi_informasiyangdimohon'),
                'petugaspenerima_informasiyangdimohon' => $this->request->getPost('petugaspenerima_informasiyangdimohon'),
                'dok_informasiyangdimohon' => $this->request->getPost('dok_informasiyangdimohon'),
                'alasan_informasiyangdimohon' => $this->request->getPost('alasan_informasiyangdimohon'),
                'tanggal_informasiyangdimohon' => $this->request->getPost('tanggal_informasiyangdimohon'),
            ]);

            $jawab = new ModelJawabInfo();
            $jawab->insert([
                'deskripsi_jawaban' => $this->request->getPost('deskripsi_jawaban'),
                'dok_jawaban' => $this->request->getPost('dok_jawaban'),
                'tanggal_jawaban' => $this->request->getPost('tanggal_jawaban'),
                'pejabat_jawaban' => $this->request->getPost('pejabat_jawaban'),
                'dokttd_jawaban' => $this->request->getPost('dokttd_jawaban'),
            ]);

            $berat = new ModelBerat();
            $berat->insert([
                'deskripsi_keberatan' => $this->request->getPost('deskripsi_keberatan'),
                'dok_keberatan' => $this->request->getPost('dok_keberatan'),
                'tanggal_keberatan' => $this->request->getPost('tanggal_keberatan'),
                'pejabat_keberatan' => $this->request->getPost('pejabat_keberatan'),
                'dokttd_keberatan' => $this->request->getPost('dokttd_keberatan'),
            ]);

            $tanggapberat = new ModelTanggapBerat();
            $tanggapberat->insert([
                'deskripsi_tanggapberat' => $this->request->getPost('deskripsi_tanggapberat'),
                'dok_tanggapberat' => $this->request->getPost('dok_tanggapberat'),
                'tanggal_tanggapberat' => $this->request->getPost('tanggal_tanggapberat'),
                'pejabat_tanggapberat' => $this->request->getPost('pejabat_tanggapberat'),
                'dokttd_tanggapberat' => $this->request->getPost('dokttd_tanggapberat'),
            ]);

            $dok = new ModelDok();
            $dok->insert([
                'doklengkap' => $this->request->getPost('doklengkap'),
                'doklengkapp' => $this->request->getPost('doklengkapp'),
                'doklengkappp' => $this->request->getPost('doklengkappp'),

            ]);
            return redirect()->to(base_url('/dashboard'));
        }
    }
}