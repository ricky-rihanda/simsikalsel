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

class Home extends BaseController
{
    // menampilkan Beranda Utama SIMSI
    public function index()
    {
        return view('index');
    }
    // Button Mengajukan pada Beranda Utama SIMSI menuju Dashboard
    public function dashboard()
    {
        return view ('dashboard');
    }
    // Nav-link ke Page Data
    public function data()
    {
        return view ('data');
    }
    // Button pada Data ke Putusan Mediasi
    public function putusanmediasi()
    {
        return view('putusanmediasi');
    }
    // Button pada Data ke Putusan Mediasi
    public function putusanajudikasi()
    {
        return view('putusanajudikasi');
    }
    // Button pada Data ke Putusan pembatalan
    public function putusanpembatalan()
    {
        return view('putusanpembatalan');
    }
    // Button pada Data ke Putusan lainnya
    public function putusanlainnya()
    {
        return view('putusanlainnya');
    }
    // Nav-link ke Page Jadwal
    public function jadwal()
    {
        return view ('jadwal');
    }
    // Nav-link ke Page Login
    public function login()
    {
        return view ('login');
    }
    // Side-link pada Dashboard ke Page Permohonan Data
    public function datamohon()
    {
        return view ('datamohon');
    }
    // Side-link pada Dashboard ke Page Pengajuan Informasi
    public function aju()
    {
        $kota = new ModelKota();
        $data['kota'] = $kota->findAll();

        $kategori = new ModelKategoriTermohon();
        $data['kategori'] = $kategori->findAll();

        $sengketa = new ModelSengketa();
        $data['sengketa'] = $sengketa->findAll();
        return view ('aju', $data);
    }
    // button simpan untuk user mengajukan pada aju
    public function ajusimpan()
    {
        if (!$this->validate([
            // Form Pemohon
            'jenis_sengketa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus memilih salah satu jenis sengketa'
                ]
            ],
            'nama_pemohon' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Nama pemohon harus diisi',
                    'alpha_space' => 'Nama pemohon hanya diisi dengan huruf'
                ]
            ],
            'noktp_pemohon' => [
                'rules' => 'required|numeric|max_length[16]|min_length[16]',
                'errors' => [
                    'required'=>'No. KTP Pemohon harus diisi',
                    'numeric'=>'No. KTP Pemohon harus diisi dengan angka',
                    'max_length'=>'Masukkan 16 angka untuk No. KTP Pemohon',
                    'min_length'=>'Masukkan 16 angka untuk No. KTP Pemohon'
                ]
            ],
            'pekerjaan_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan Pemohon harus diisi'
                ]
            ],
            'notelp_pemohon' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required'=>'Nomor Telepon Pemohon harus diisi',
                    'numeric'=>'Nomor Telepon Pemohon harus diisi dengan angka'
                ]
            ],
            'tempatlahir_pemohon' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Tempat Lahir Pemohon harus diisi',
                    'alpha_space' => 'Tempat lahir hanya diisi dengan huruf'
                ]
            ],
            'tanggallahir_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Pemohon harus diisi'
                ]
            ],
            'email_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email Pemohon harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin  Pemohon harus diisi'
                ]
            ],
            'kota_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kota Alamat Pemohon harus dipilih'
                ]
            ],
            'detailalamat_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Detail Alamat Pemohon harus di isi'
                ]
            ],
            'kodepos_pemohon' => [
                'rules' => 'required|numeric|max_length[5]|min_length[5]',
                'errors' => [
                    'required'=>'Kode Pos Pemohon harus diisi',
                    'numeric'=>'Kode Pos Pemohon harus diisi dengan angka',
                    'max_length'=>'Masukkan 5 angka untuk Kode Pos Pemohon',
                    'min_length'=>'Masukkan 5 angka untuk Kode Pos Pemohon'
                ]
            ],
            'dok_pemohon' => [
                'rules' => 'ext_in[dok_pemohon,pdf,docx,png]|max_size[dok_pemohon,5120]',
                'errors' => [
                    'ext_in' => 'Masukkan Dokumen Pemohon dengan format .pdf, .docx, atau .png',
                    'max_size' => "Dokumen Pemohon maksimal 5 mb"
                    
                ]
            ],
            // Form Kuasa
            'nama_kuasa' => [
                'rules' => 'alpha_space',
                'errors' => [
                    'alpha_space' => 'Nama kuasa hanya diisi dengan huruf'
                ]
            ],
            'noktp_kuasa' => [
                'rules' => 'numeric|max_length[16]|min_length[16]',
                'errors' => [
                    'numeric'=>'No. KTP kuasa harus diisi dengan angka',
                    'max_length'=>'Masukkan 16 angka untuk No. KTP Pemohon',
                    'min_length'=>'Masukkan 16 angka untuk No. KTP Pemohon'
                ]
            ],
            'fax_kuasa' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric'=>'Nomor Telepon Pemohon harus diisi dengan angka'
                ]
            ],
            'notelp_pemohon' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric'=>'Nomor Telepon Pemohon harus diisi dengan angka'
                ]
            ],
            'dok_kuasa' => [
                'rules' => 'ext_in[dok_pemohon,pdf,docx,png]|max_size[dok_pemohon,5120]',
                'errors' => [
                    'ext_in' => 'Masukkan Dokumen Kuasa dengan format .pdf, .docx, atau .png',
                    'max_size' => "Dokumen kuasa maksimal 5 mb"
                    
                ]
            ],
            // Form Termohon
            'namabadanpublik_termohon' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Nama Badan Publik termohon harus di isi',
                    'alpha_space' => 'Tempat lahir hanya diisi dengan huruf'
                ]
            ],
            'unitkerja_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Unit Kerja termohon harus di isi'
                ]
            ],
            'kategori_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori termohon harus dipilih'
                ]
            ],
            'kota_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kota Alamat termohon harus dipilih'
                ]
            ],
            'detailalamat_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Detail Alamat termohon harus di isi'
                ]
            ],
            'nama_termohon' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Nama termohon harus di isi',
                    'alpha_space' => 'Tempat lahir hanya diisi dengan huruf'
                    
                ]
            ],
            'jabatan_termohon' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Jabatan termohon harus di isi'
                ]
            ],
            'notelp_termohon' => [
                'rules' => 'required|numeric|max_length[13]',
                'errors' => [
                    'required' => 'Nomor Telepon termohon harus di isi',
                    'numeric' => 'Nomor Telepon termohon hanya memasukkan angka',
                    'max_length'=>'Masukkan Maksimal 13 angka untuk Nomor Telepon termohon'
                ]
            ],
            'email_termohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'email termohon harus di isi'
                ]
            ],
            // Form Informasi yang dimohon
            'kategori_sengketa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori sengketa harus di isi'
                ]
            ],
            'deskripsi_informasiyangdimohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Informasi yang dimohon harus di isi'
                ]
            ],
            'petugaspenerima_informasiyangdimohon' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Petugas penerima informasi harus di isi',
                    'alpha_space' => 'Tempat lahir hanya diisi dengan huruf'
                ]
            ],
            'dok_informasiyangdimohon' => [
                'rules' => 'required|ext_in[dok_informasiyangdimohon,pdf,docx,png]|max_size[dok_informasiyangdimohon,5120]|uploaded[dok_informasiyangdimohon]',
                'errors' => [
                    'required' => 'Dokumen Informasi Harus diisi',
                    'ext_in' => 'Masukkan Dokumen Informasi dengan format .pdf, .docx, atau .png',
                    'max_size' => "Dokumen Informasi maksimal 5 mb"
                    
                ]
            ],
            'alasan_informasiyangdimohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alasan pengajuan informasi harus di isi'
                ]
            ],
            'tanggal_informasiyangdimohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal pengajuan Informasi harus di isi'
                ]
            ]
            //Form Jawaban atas permohonan Informasi
            // 'dok_jawaban' => [
            //     'rules' => 'ext_in[dok_jawaban,pdf,docx,png]|max_size[dok_jawaban,5120]|uploaded[dok_jawaban]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen Informasi dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen Informasi maksimal 5 mb"      
            //     ]
            // ],
            // 'ttdPejabat' => [
            //     'rules' => 'alpha_space',
            //     'errors' => [
            //         'alpha_space' => 'Pejabat yang menandatangani hanya diisi dengan huruf'
            //     ]
            // ],
            // 'dokttd_jawaban' => [
            //     'rules' => 'ext_in[dok_jawaban,pdf,docx,png]|max_size[dok_jawaban,5120]|uploaded[dok_jawaban]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen Informasi dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen Informasi maksimal 5 mb"      
            //     ]
            // ],
            // Form Keberatan
            // 'dok_keberatan' => [
            //     'rules' => 'ext_in[dok_keberatan,pdf,docx,png]|max_size[dok_keberatan,5120]|uploaded[dok_keberatan]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen keberatan dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen keberatan maksimal 5 mb"      
            //     ]
            // ],
            // 'pejabat_keberatan' => [
            //     'rules' => 'alpha_space',
            //     'errors' => [
            //         'alpha_space' => 'Pejabat keberatan yang menerima hanya diisi dengan huruf'
            //     ]
            // ],
            // 'dokttd_keberatan' => [
            //     'rules' => 'ext_in[dokttd_keberatan,pdf,docx,png]|max_size[dokttd_keberatan,5120]|uploaded[dokttd_keberatan]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen Keberatan dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen Keberatan maksimal 5 mb"      
            //     ]
            // ],
            // Form Tanggapan atas Keberatan
            // 'dok_tanggapberat' => [
            //     'rules' => 'ext_in[dok_tanggapberat,pdf,docx,png]|max_size[dok_tanggapberat,5120]|uploaded[dok_keberatan]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen Tanggapan atas Keberatan dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen Tanggapan atas Keberatan maksimal 5 mb"      
            //     ]
            // ],
            // 'ttd_tanggapberat' => [
            //     'rules' => 'alpha_space',
            //     'errors' => [
            //         'alpha_space' => 'Pejabat Tanggapan atas Keberatan yang menerima hanya diisi dengan huruf'
            //     ]
            // ],
            // 'dokttd_tanggapberat' => [
            //     'rules' => 'ext_in[dokttd_tanggapberat,pdf,docx,png]|max_size[dokttd_tanggapberat,5120]|uploaded[dokttd_tanggapberat]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen Tanggapan atas Keberatan dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen Tanggapan atas Keberatan maksimal 5 mb"      
            //     ]
            // ],
            //Form Dokumen Kelengkapan
            // 'doklengkap' => [
            //     'rules' => 'ext_in[doklengkap,pdf,docx,png]|max_size[doklengkap,5120]|uploaded[doklengkap]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen tambahan dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen tambahan maksimal 5 mb"      
            //     ]
            // ],
            // 'doklengkapp' => [
            //     'rules' => 'ext_in[doklengkapp,pdf,docx,png]|max_size[doklengkapp,5120]|uploaded[doklengkapp]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen tambahan dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen tambahan maksimal 5 mb"      
            //     ]
            // ],
            // 'doklengkappp' => [
            //     'rules' => 'ext_in[doklengkappp,pdf,docx,png]|max_size[doklengkappp,5120]|uploaded[doklengkappp]',
            //     'errors' => [
            //         'ext_in' => 'Masukkan Dokumen tambahan dengan format .pdf, .docx, atau .png',
            //         'max_size' => "Dokumen tambahan maksimal 5 mb"      
            //     ]
            // ]
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
            return redirect()->to(base_url('/aju'));
        }
    }
}