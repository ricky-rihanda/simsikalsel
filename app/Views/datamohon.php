<?php include('headerAKUN.php'); ?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="/index">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link active" href="/datamohon">
                <i class="bi bi-menu-button-wide"></i>
                <span>Data Permohonan</span>
            </a>
        </li><!-- End Dashboard Data Permohonan -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/aju">
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
        <h1>Data Permohonan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="1.index.php">Home</a></li>
                <li class="breadcrumb-item text-primary">Data Permohonan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <input type="text" class="form-control mt-4 mb-3" id="inputCity" placeholder="Cari Data Permohonan">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Pemohon</th>
                                <th>Kuasa</th>
                                <th>Termohon</th>
                                <th>Dokumen</th>
                                <th>Status</th>
                                <th>Modify by</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td colspan="7">Belum Ada Data</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </p>
            </div>
        </div>
    </section>
</main>
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

    </html>