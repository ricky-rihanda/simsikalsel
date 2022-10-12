<?php include('headerAKUN.php'); ?>
<!-- ======= Sidebar ======= -->
<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");

.input-group-append {
    cursor: pointer;
}
</style>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="/index">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/datamohon">
                <i class="bi bi-menu-button-wide"></i>
                <span>Data Permohonan</span>
            </a>
        </li><!-- End Dashboard Data Permohonan -->

        <li class="nav-item">
            <a class="nav-link active" href="/aju">
                <i class="bi bi-file-earmark-plus"></i>
                <span>Pengajuan Sengketa</span>
            </a>
        </li><!-- End Dashboard Data Permohonan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/">
                <i class="bi bi-airplane"></i>
                <span>Kembali ke Website</span>
            </a>
        </li><!-- End Dashboard Webs -->
    </ul>

</aside><!-- End Sidebar-->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengajuan Sengketa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index">Home</a></li>
                <li class="breadcrumb-item text-primary">Pengajuan Sengketa</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger" role="alert">
            Data tidak berhasil ditambahkan
            <?php echo session()->getFlashdata('error'); ?>
        </div>
        <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->getFlashdata('success') ?> Berhasil ditambahkan
        </div>
        <?php elseif (!empty(session()->getFlashdata('hapus'))) : ?>
        <div class="alert alert-primary" role="alert">
            <?php echo "Berita '" . session()->getFlashdata('hapus')['judul'] . "' berhasil dihapus"; ?>
        </div>
        <?php elseif (!empty(session()->getFlashdata('delete'))) : ?>
        <div class="alert alert-primary" role="alert">
            <?php echo session()->getFlashdata('delete') . " berhasil dihapus"; ?>
        </div>
        <?php elseif (!empty(session()->getFlashdata('update'))) : ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->getFlashdata('update') ?> Berhasil diubah
        </div>
        <?php endif; ?>
        <form action="<?php base_url('/ajusimpan') ?>" method="post" enctype="multipart/form-data">
            <?php csrf_field() ?>
            <div class="card">
                <div class="card-body">
                    <div class="accordion my-4" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-light" type="button light"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"
                                    style="background-image: url('assets/img/foter.png'); background-size:cover;">
                                    <h4><strong>A. Identitas Pemohon</strong></h4>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="col">
                                        <!-- Jenis Sengketa -->
                                        <label for="jenis_sengketa" class="form-label mt-3">Jenis Sengketa</label>
                                        <select id="jenis_sengketa" class="form-select" name="jenis_sengketa">
                                            <option value="" disabled selected>-- Pilih Opsi Jenis Sengketa --</option>
                                            <option value="umum">Umum</option>
                                            <option value="pemilu">Pemilu</option>
                                        </select>
                                    </div>

                                    <div class="col mt-4">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Nama Pemohon -->
                                                <label for="namaPemohon" class="form-label mt-3">Nama Pemohon</label>
                                                <input type="text" class="form-control" id="namaPohon"
                                                    placeholder="Isi Nama Pemohon" name="nama_pemohon"
                                                    value="<?= old('nama_pemohon') ?>">
                                                <!-- No. KTP -->
                                                <label for="ktpMohon" class="form-label mt-3">No. KTP Pemohon</label>
                                                <input type="text" class="form-control" id="ktpMohon"
                                                    placeholder="Isi No. KTP Pemohon" name="noktp_pemohon"
                                                    value="<?= old('noktp_pemohon') ?>">
                                                <!-- Pekerjaan -->
                                                <label for="pekerjaan" class="form-label mt-3">Pekerjaan</label>
                                                <input type="text" class="form-control" id="pekerjaan"
                                                    placeholder="Isi Pekerjaan" name="pekerjaan_pemohon"
                                                    value="<?= old('pekerjaan_pemohon') ?>">
                                                <!-- Fax -->
                                                <label for="fax" class="form-label mt-3">Fax</label>
                                                <input type="text" class="form-control" id="fax" placeholder="Isi Fax"
                                                    name="fax_pemohon" value="<?= old('fax_pemohon') ?>">
                                                <!-- No Telp -->
                                                <label for="notelp" class="form-label mt-3">No. Telepon</label>
                                                <input type="text" class="form-control" id="notelp"
                                                    placeholder="Isi No Telepon" name="notelp_pemohon"
                                                    value="<?= old('notelp_pemohon') ?>">
                                                <!-- Tempat Lahir -->
                                                <label for="tempatLahir" class="form-label mt-3">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempatLahir"
                                                    placeholder="Isi Tempat Lahir" name="tempatlahir_pemohon"
                                                    value="<?= old('tempatlahir_pemohon') ?>">
                                                <!-- tanggal lahir -->
                                                <label for="tglLahir" class="form-label mt-3">Tanggal Lahir</label>
                                                <div class="input-group date">
                                                    <input type="date" class="form-control"
                                                        placeholder="Isi Tanggal Lahir" name="tanggallahir_pemohon"
                                                        value="<?= old('tanggallahir_pemohon') ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <!-- email -->
                                                <label for="email" class="form-label mt-3">Email</label>
                                                <input type="email" class="form-control" id="tempatLahir"
                                                    placeholder="Isi email" name="email_pemohon"
                                                    value="<?= old('email_pemohon') ?>">
                                                <!-- Jenis kelamin -->
                                                <label for="jnsKelamin" class="form-label mt-3">Jenis Kelamin</label>
                                                <select id="jnsKelamin" class="form-select" name="jenis_kelamin">
                                                    <option value="" disabled selected>-- Pilih Opsi Jenis Kelamin --
                                                    </option>
                                                    <option value="lk">Laki-Laki</option>
                                                    <option value="pr">Perempuan</option>
                                                </select>
                                                <!-- alamat -->
                                                <label for="kota" class="form-label mt-3">Alamat</label>
                                                <select id="kota" class="form-select" name="kota_pemohon">
                                                    <option selected>Pilih Kota/Kabupaten</option>
                                                    <?php foreach ($kota as $row) : ?>
                                                    <option value="<?= $row['id_kota'] ?>">
                                                        <?= $row['nama_kota'] ?>
                                                    </option>
                                                    <?php endforeach ?>

                                                </select>
                                                <textarea class="form-control mt-3" placeholder="Isi detail alamat"
                                                    id="floatingTextarea2" style="height: 100px"
                                                    name="detailalamat_pemohon"
                                                    value="<?= old('detailalamat_pemohon') ?>"></textarea>
                                                <input type="text" class="form-control mt-3" id="tempatLahir"
                                                    placeholder="Isi Kode Pos" name="kodepos_pemohon"
                                                    value="<?= old('kodepos_pemohon') ?>">
                                                <!-- unggah dokumen -->
                                                <label for="formFile" class="form-label mt-3">Dokumentasi Identitas
                                                    Pemohon <i>format (jpg, png,atau pdf)</i></label>
                                                <input class="form-control" type="file" id="formFile" name="dok_pemohon"
                                                    value="<?= old('dok_pemohon') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button text-light" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                    style="background-image: url('assets/img/foter.png'); background-size:cover;">
                                    <h4><strong>B. Identitas Kuasa</strong></h4>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <label for="kuasa" class="form-label">Apakah anda memiliki kuasa?</label>
                                    <select id="kuasa" class="form-select" name="pilih_kuasa" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="tdk">Tidak</option>
                                        <option value="ye">Ya</option>
                                    </select>
                                    <div class="output">
                                        <div id="tdk" class="pilih tdk"></div>
                                        <div id="ye" class="pilih ye">
                                            <div class="row">
                                                <div class="col">
                                                    <!-- Nama Kuasa -->
                                                    <label for="namaKuasa" class="form-label mt-3">Nama/Penerima
                                                        Kuasa</label>
                                                    <input type="text" class="form-control" id="namaKuasa"
                                                        placeholder="Isi Nama Nama/Penerima Kuasa" name="nama_kuasa"
                                                        value="<?= old('nama_kuasa') ?>">
                                                    <!-- No. KTP -->
                                                    <label for="ktp" class="form-label mt-3">No. KTP</label>
                                                    <input type="text" class="form-control" id="ktp"
                                                        placeholder="Isi No. KTP" name="noktp_kuasa"
                                                        value="<?= old('noktp_kuasa') ?>">
                                                    <!-- email -->
                                                    <label for="email" class="form-label mt-3">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        placeholder="Isi Email" name="email_kuasa"
                                                        value="<?= old('email_kuasa') ?>">
                                                    <!-- Jenis kelamin -->
                                                    <label for="jnsKelamin" class="form-label mt-3">Jenis
                                                        Kelamin</label>
                                                    <select id="jnsKelamin" class="form-select" name="jenis_kelamin">
                                                        <option value="" disabled selected>-- Pilih Opsi Jenis Kelamin
                                                            --
                                                        </option>
                                                        <option value="lk">Laki-Laki</option>
                                                        <option value="pr">Perempuan</option>
                                                    </select>
                                                    <!-- Fax -->
                                                    <label for="fax" class="form-label mt-3">Fax</label>
                                                    <input type="text" class="form-control" id="ktp"
                                                        placeholder="Isi Fax" name="fax_kuasa"
                                                        value="<?= old('fax_kuasa') ?>">
                                                </div>
                                                <div class="col">
                                                    <!-- No. Telp -->
                                                    <label for="telpKuasa" class="form-label mt-3">No.
                                                        Telepon/HP</label>
                                                    <input type="text" class="form-control" id="telpKuasa"
                                                        placeholder="Isi No. Telepon/HP Kuasa" name="notelp_kuasa"
                                                        value="<?= old('notelp_kuasa') ?>">
                                                    <!-- alamat -->
                                                    <label for="kota" class="form-label mt-3">Alamat</label>
                                                    <select id="kota" class="form-select" name="kota_kuasa">
                                                        <option selected>Pilih Kabupaten/Kota</option>
                                                        <option selected>Pilih Kota/Kabupaten</option>
                                                        <?php foreach ($kota as $row) : ?>
                                                        <option value="<?= $row['id_kota'] ?>">
                                                            <?= $row['nama_kota'] ?>
                                                        </option>
                                                        <?php endforeach ?>
                                                    </select>
                                                    <textarea class="form-control mt-3" placeholder="Isi detail alamat"
                                                        id="floatingTextarea2" style="height: 100px"
                                                        name="detailalamat_kuasa"
                                                        value="<?= old('detailalamat_kuasa') ?>"></textarea>
                                                    <!-- unggah dokumen -->
                                                    <label for="formFile" class="form-label mt-3">Dokumentasi Identitas
                                                        Kuasa Hukum <i>format (jpg, png,atau pdf)</i></label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="dok_kuasa" value="<?= old('dok_kuasa') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button text-light" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                    style="background-image: url('assets/img/foter.png'); background-size:cover;">
                                    <h4><strong>C. Mengenai Permohonan Informasi</strong></h4>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="mb-3">C.1 Data Termohon</h5>
                                    <div class="row">
                                        <div class="col">
                                            <!-- badan publik -->
                                            <label for="namaBadanPublik" class="form-label">Nama Badan Publik/Lembaga
                                                Publik</label>
                                            <input type="text" class="form-control" id="namaBadanPublik"
                                                placeholder="Isi Nama Badan Publik/Lembaga Publik"
                                                name="namabadanpublik_termohon"
                                                value="<?= old('namabadanpublik_termohon') ?>">
                                            <!-- unit kerja -->
                                            <label for="unitKerja" class="form-label mt-3">Unit Kerja</label>
                                            <input type="text" class="form-control" id="unitKerja"
                                                placeholder="Isi Unit Kerja" name="unitkerja_termohon"
                                                value="<?= old('unitkerja_termohon') ?>">
                                            <!-- Kategori termohon -->
                                            <label for="kategori" class="form-label mt-3">Kategori Termohon</label>
                                            <select id="kategori" class="form-select" name="kategori_termohon">
                                                <option selected>Pilih Kategori Termohon</option>
                                                <?php foreach ($kategori as $row) : ?>
                                                <option value="<?= $row['id_kategoritermohon'] ?>">
                                                    <?= $row['nama_kategoritermohon'] ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                            <!-- alamat -->
                                            <label for="kota" class="form-label mt-3">Alamat</label>
                                            <select id="kota" class="form-select" name="kota_termohon">
                                                <option selected>Pilih Kota/Kabupaten</option>
                                                <?php foreach ($kota as $row) : ?>
                                                <option value="<?= $row['id_kota'] ?>">
                                                    <?= $row['nama_kota'] ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                            <textarea class="form-control mt-3" placeholder="Isi detail alamat"
                                                id="floatingTextarea2" style="height: 100px"
                                                name="detailalamat_termohon"
                                                value="<?= old('detailalamat_termohon') ?>"></textarea>
                                        </div>
                                        <div class="col">
                                            <!-- Nama Termohon -->
                                            <label for="namaTermohon" class="form-label">Nama Termohon</label>
                                            <input type="text" class="form-control" id="namaTermohon"
                                                placeholder="Isi Nama Termohon" name="nama_termohon"
                                                value="<?= old('nama_termohon') ?>">
                                            <!-- Nama Jabatan Termohon -->
                                            <label for="namaJabatanTermohon" class="form-label mt-3">Nama Jabatan
                                                Termohon</label>
                                            <input type="text" class="form-control" id="namaJabatanTermohon"
                                                placeholder="Isi Nama Jabatan Termohon" name="jabatan_termohon"
                                                value="<?= old('jabatan_termohon') ?>">
                                            <!-- No. Telp -->
                                            <label for="telpTermohon" class="form-label mt-3">No. Telepon/HP</label>
                                            <input type="text" class="form-control" id="telpTermohon"
                                                placeholder="Isi No. Telepon/HP Termohon" name="notelp_termohon"
                                                value="<?= old('notelp_termohon') ?>">
                                            <!-- Fax -->
                                            <label for="fax" class="form-label mt-3">Fax</label>
                                            <input type="text" class="form-control" id="fax" placeholder="Isi Fax"
                                                name="fax_termohon" value="<?= old('fax_termohon') ?>">
                                            <!-- email -->
                                            <label for="Email" class="form-label mt-3">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Isi Email"
                                                name="email_termohon" value="<?= old('email_termohon') ?>">
                                        </div>
                                    </div>
                                    <h5 class="mb-3 mt-5">C.2 Informasi yang dimohon</h5>
                                    <div class="row">
                                        <div class="col">
                                            <label for="kategoriSengketa" class="form-label mt-3">Kategori
                                                Sengketa</label>
                                            <select id="kategoriSengketa" class="form-select" name="kategori_sengketa">
                                                <option selected>Pilih Kategori Sengketa</option>
                                                <?php foreach ($sengketa as $row) : ?>
                                                <option value="<?= $row['id_kategorisengketa'] ?>">
                                                    <?= $row['nama_kategorisengketa'] ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                            <!-- Deskripsi -->
                                            <label for="deskripsi" class="form-label mt-3">Deskripsi</label>
                                            <textarea class="form-control" placeholder="Isi deskripsi"
                                                id="floatingTextarea2" style="height: 100px"
                                                name="deskripsi_informasiyangdimohon"
                                                value="<?= old('deskripsi_informasiyangdimohon') ?>"></textarea>
                                            <!-- Petugas Penerima -->
                                            <label for="petugasPenerima" class="form-label mt-3">Petugas
                                                Penerima</label>
                                            <input type="text" class="form-control" id="petugasPenerima"
                                                placeholder="Isi petugas penerima"
                                                name="petugaspenerima_informasiyangdimohon"
                                                value="<?= old('petugaspenerima_informasiyangdimohon') ?>">
                                        </div>
                                        <div class="col">
                                            <!-- unggah dokumen -->
                                            <label for="formFile" class="form-label mt-3">Unggah Dokumen <i>format (jpg,
                                                    png,atau pdf)</i></label>
                                            <input class="form-control" type="file" id="formFile"
                                                name="dok_informasiyangdimohon"
                                                value="<?= old('dok_informasiyangdimohon') ?>">
                                            <!-- Alasan Permohonan Informasi -->
                                            <label for="alasan" class="form-label mt-3">Alasan Permohonan
                                                Informasi</label>
                                            <textarea class="form-control" placeholder="Isi Alasan Permohonan Informasi"
                                                id="floatingTextarea2" style="height: 100px"
                                                name="alasan_informasiyangdimohon"
                                                value="<?= old('alasan_informasiyangdimohon') ?>"></textarea>
                                            <!-- tanggal permohoan -->
                                            <label for="tglMohon" class="form-label mt-3">Tanggal Permohonan</label>
                                            <<div class="input-group date">
                                                <input type="date" class="form-control" placeholder="Isi Tanggal Lahir"
                                                    name="tanggallahir_pemohon">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mb-3 mt-5">C.3 Jawaban atas Permohonan Informasi</h5>
                                <label for="jwbMohon" class="form-label mt-3">Apakah sudah ada Jawaban atas
                                    Permohonan
                                    Informasi?</label>
                                <select id="jwbMohon" class="form-select">
                                    <option value="no">Tidak</option>
                                    <option value="yes">Ya</option>
                                </select>
                                <div class="output">
                                    <div id="no" class="answer no"></div>
                                    <div id="yes" class="answer yes">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Deskripsi Jawaban -->
                                                <label for="deskc3" class="form-label mt-3">Deskripsi</label>
                                                <textarea class="form-control" placeholder="Isi deskripsi"
                                                    id="floatingTextarea2" style="height: 100px" name="deskipsi_jawaban"
                                                    value="<?= old('deskipsi_jawaban') ?>"></textarea>
                                                <!-- unggah dokumen -->
                                                <label for="formFile" class="form-label mt-3">Unggah Dokumen
                                                    <i>format (jpg, png,atau pdf)</i></label>
                                                <input class="form-control" type="file" id="formFilec3"
                                                    name="dok_jawaban" value="<?= old('dok_jawaban') ?>">
                                            </div>
                                            <div class="col">
                                                <!-- tanggal permohoan -->
                                                <label for="tglMohon" class="form-label mt-3">Tanggal
                                                    Jawaban</label>
                                                <div class="input-group date">
                                                    <input type="date" class="form-control"
                                                        placeholder="Isi Tanggal Permohonan Jawaban"
                                                        name="tanggal_jawaban" value="<?= old('tanggal_jawaban') ?>">
                                                </div>
                                                <!-- Pejabat yang menandatangani -->
                                                <label for="ttdPejabat" class="form-label mt-3">Pejabat yang
                                                    Menandatangani</label>
                                                <input type="text" class="form-control" id="petugasPenerima"
                                                    placeholder="Isi Pejabat yang Menandatangani" name="ttd_jawaban"
                                                    value="<?= old('ttd_jawaban') ?>">
                                                <!-- unggah dokumen -->
                                                <label for="formFile" class="form-label mt-3">Unggah Salinan Tanda
                                                    Terima Jawaban atas Permohonan <i>format (jpg, png,atau
                                                        pdf)</i></label>
                                                <input class="form-control" type="file" id="formFilec3"
                                                    name="dokttd_jawaban" value="<?= old('dokttd_jawaban') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mb-3 mt-5">C.4 Keberatan</h5>
                                <label for="jwbBerat" class="form-label mt-3">Apakah ada Keberatan atas
                                    Jawaban?</label>
                                <select id="jwbBerat" class="form-select">
                                    <option value="nos">Tidak</option>
                                    <option value="yess">Ya</option>
                                </select>
                                <div class="output">
                                    <div id="nos" class="answerr nos"></div>
                                    <div id="yess" class="answerr yess">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Deskripsi Keberatan -->
                                                <label for="deskc4" class="form-label mt-3">Deskripsi</label>
                                                <textarea class="form-control" placeholder="Isi deskripsi"
                                                    id="floatingTextarea2" style="height: 100px"
                                                    name="deskripsi_keberatan"
                                                    value="<?= old('deskripsi_keberatan') ?>"></textarea>
                                                <!-- unggah dokumen -->
                                                <label for="formFile" class="form-label mt-3">Unggah Dokumen
                                                    <i>format (jpg, png,atau pdf)</i></label>
                                                <input class="form-control" type="file" id="formFilec4"
                                                    name="dok_keberatan" value="<?= old('dok_keberatan') ?>">
                                            </div>
                                            <div class="col">
                                                <!-- tanggal permohoan -->
                                                <label for="tglBerat" class="form-label mt-3">Tanggal
                                                    Keberatan</label>
                                                <div class="input-group date">
                                                    <input type="date" class="form-control"
                                                        placeholder="Isi Tanggal Lahir" name="tanggallahir_pemohon"
                                                        value="<?= old('tanggallahir_pemohon') ?>">
                                                </div>
                                                <!-- Pejabat yang menandatangani -->
                                                <label for="ttdBerat" class="form-label mt-3">Pejabat yang
                                                    Menerima</label>
                                                <input type="text" class="form-control" id="pejabatTerima"
                                                    placeholder="Isi Pejabat yang menerima" name="pejabat_keberatan"
                                                    value="<?= old('pejabat_keberatan') ?>">
                                                <!-- unggah dokumen -->
                                                <label for="formFile" class="form-label mt-3">Unggah Salinan Tanda
                                                    Terima Jawaban atas Permohonan <i>format (jpg, png,atau
                                                        pdf)</i></label>
                                                <input class="form-control" type="file" id="formFilec4"
                                                    name="dokttd_keberatan" value="<?= old('dokttd_keberatan') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mb-3 mt-5">C.5 Tanggapan atas Keberatan</h5>
                                <label for="jwbTang" class="form-label mt-3">Apakah ada Tanggapan atas
                                    Keberatan?</label>
                                <select id="jwbTang" class="form-select">
                                    <option value="noss">Tidak</option>
                                    <option value="yesss">Ya</option>
                                </select>
                                <div class="output">
                                    <div id="noss" class="answerr noss"></div>
                                    <div id="yesss" class="answerr yesss">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Deskripsi Jawaban -->
                                                <label for="deskc4" class="form-label mt-3">Deskripsi</label>
                                                <textarea class="form-control" placeholder="Isi deskripsi"
                                                    id="floatingTextarea2" style="height: 100px"
                                                    name="deskripsi_tanggapberat"
                                                    value="<?= old('deskripsi_tanggapberat') ?>"></textarea>
                                                <!-- unggah dokumen -->
                                                <label for="formFile" class="form-label mt-3">Unggah Salinan Surat
                                                    Tanggapan atas Keberatan Permohonan <i>format
                                                        (jpg,
                                                        png,atau pdf)</i></label>
                                                <input class="form-control" type="file" id="formFilec4"
                                                    name="dok_tanggapberat" value="<?= old('dok_tanggapberat') ?>">
                                            </div>
                                            <div class="col">
                                                <!-- tanggal permohoan -->
                                                <label for="tglBerat" class="form-label mt-3">Tanggal
                                                    Keberatan</label>
                                                <div class="input-group date">
                                                    <input type="date" class="form-control"
                                                        placeholder="Isi Tanggal Tanggapan atas keberatan"
                                                        name="tanggal_tanggapberat"
                                                        value="<?= old('tanggal_tanggapberat') ?>">
                                                </div>
                                                <!-- Pejabat yang menandatangani -->
                                                <label for="ttdBerat" class="form-label mt-3">Pejabat yang
                                                    menandatangani</label>
                                                <input type="text" class="form-control" id="pejabatTerima"
                                                    placeholder="Isi Pejabat yang menandatangani"
                                                    name="ttd_tanggapberat" value="<?= old('ttd_tanggapberat') ?>">
                                                <!-- unggah dokumen -->
                                                <label for="formFile" class="form-label mt-3">Unggah Salinan Tanda
                                                    Terima Terima atas Bukti Pemberian Keberatan Pemohon <i>format
                                                        (jpg,
                                                        png,atau pdf)</i></label>
                                                <input class="form-control" type="file" id="formFilec4"
                                                    name="dok_tanggapberat" value="<?= old('dok_tanggapberat') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button text-light" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                style="background-image: url('assets/img/foter.png'); background-size:cover;">
                                <h4><strong>D. Dokumen Kelengkapan Permohonan</strong></h4>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Unggah Salinan Dokumen Tambahan #1
                                        <i>format (jpg, png,
                                            atau pdf)</i></label>
                                    <input class="form-control" type="file" id="formFile" name="doklengkap"
                                        value="<?= old('doklengkap') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Unggah Salinan Dokumen Tambahan #2
                                        <i>format (jpg, png,
                                            atau pdf)</i></label>
                                    <input class="form-control" type="file" id="formFile" name="doklengkapp"
                                        value="<?= old('doklengkapp') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Unggah Salinan Dokumen Tambahan #3
                                        <i>format (jpg, png,
                                            atau pdf)</i></label>
                                    <input class="form-control" type="file" id="formFile" name="doklengkappp"
                                        value="<?= old('doklengkappp') ?>">
                                </div>

                            </div>
                        </div>
                    </div>
                </div><button type="submit" class="btn btn-primary">Ajukan Permohonan</button>
            </div>
            </div>
        </form>
    </section>
</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    </body>
    <script>
    $(function() {
        $('#jwbMohon').change(function() {
            $('.answer').hide();
            $('#' + $(this).val()).show();
        });
    });
    $(function() {
        $('.answer').hide();
    });
    </script>
    <script>
    $(function() {
        $('#jwbBerat').change(function() {
            $('.answerr').hide();
            $('#' + $(this).val()).show();
        });
    });
    $(function() {
        $('.answerr').hide();
    });
    </script>
    <script>
    $(function() {
        $('#jwbTang').change(function() {
            $('.answerrr').hide();
            $('#' + $(this).val()).show();
        });
    });
    $(function() {
        $('.answerrr').hide();
    });
    </script>
    <script>
    $(function() {
        $('#kuasa').change(function() {
            $('.pilih').hide();
            $('#' + $(this).val()).show();
        });
    });
    $(function() {
        $('.pilih').hide();
    });
    </script>
    <script>
    $(function() {
        $('#div1').hide();
        $('#div2').hide();
        $('#div3').hide();
    });

    function show1() {
        document.getElementById('div1').style.display = 'block';
        document.getElementById('div2').style.display = 'none';
        document.getElementById('div3').style.display = 'none';
    }

    function show2() {
        document.getElementById('div1').style.display = 'none';
        document.getElementById('div2').style.display = 'block';
        document.getElementById('div3').style.display = 'none';
    }

    function show3() {
        document.getElementById('div1').style.display = 'none';
        document.getElementById('div2').style.display = 'none';
        document.getElementById('div3').style.display = 'block';
    }
    </script>

    </html>