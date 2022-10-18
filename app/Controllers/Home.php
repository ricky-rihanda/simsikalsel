<?php

namespace App\Controllers;

use App\Models\ModelInfo;
use App\Models\ModelKuasa;
use App\Models\ModelTermohon;
use App\Models\ModelPemohon;
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

        // dd($this->request->getFile('dok_sengketa'));
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
            'email_pemohon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email Pemohon harus diisi'
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
            'notelp_pemohon' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric'=>'Nomor Telepon Pemohon harus diisi dengan angka'
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
            'deskripsi_sengketa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi sengketa yang dimohon harus di isi'
                ]
            ],
            'dok_sengketa' => [
                'rules' => 'ext_in[dok_sengketa,pdf,docx,png]|max_size[dok_sengketa,5120]|uploaded[dok_sengketa]',
                'errors' => [
                    'ext_in' => 'Masukkan Dokumen Informasi dengan format .pdf, .docx, atau .png',
                    'max_size' => "Dokumen Informasi maksimal 5 mb",
                    'uploaded' => 'Dokumen tidak berhasil'                    
                ]
            ],
            'alasan_sengketa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alasan pengajuan sengketa harus di isi'
                ]
            ],
            
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
                'notelp_pemohon' => $this->request->getPost('notelp_pemohon'),
                'email_pemohon' => $this->request->getPost('email_pemohon'),
                'id_kota' => $this->request->getPost('kota_pemohon'),
                'detailalamat_pemohon' => $this->request->getPost('detailalamat_pemohon')
            ]);

            $kuasa = new ModelKuasa();
            $kuasa->insert([
                'nama_kuasa' => $this->request->getPost('nama_kuasa'),
                'noktp_kuasa' => $this->request->getPost('noktp_kuasa'),
                'notelp_kuasa' => $this->request->getPost('notelp_kuasa'),
                'email_kuasa' => $this->request->getPost('email_kuasa'),
                'id_kota' => $this->request->getPost('kota_kuasa'),
                'detailalamat_kuasa' => $this->request->getPost('detailalamat_kuasa')
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
                'email_termohon' => $this->request->getPost('email_termohon')
            ]);

            $info = new ModelInfo();
            $info->insert([
                'id_kategorisengketa'=> $this->request->getPost('kategori_sengketa'),
                'deskripsi_sengketa' => $this->request->getPost('deskripsi_sengketa'),
                'dok_sengketa' => $this->request->getPost('dok_sengketa'),
                'alasan_sengketa' => $this->request->getPost('alasan_sengketa'),
            ]);

            return redirect()->to(base_url('/aju'));
        }
    }
}