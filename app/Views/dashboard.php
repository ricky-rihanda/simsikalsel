<?php include('headerAKUN.php'); ?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link active" href="/index">
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
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item text-primary">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jadwal Sidang Anda</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Agenda</th>
                                <th>Tempat Sidang</th>
                                <th>Waktu Sidang</th>
                                <th>Data Komisioner</th>
                                <th>Data Mediator</th>
                                <th>Panitera Pengganti</th>
                                <th>Hasil Putusan</th>
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

    </html>