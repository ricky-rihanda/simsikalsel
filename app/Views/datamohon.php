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

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Start Lihat Jadwal Anda -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Jadwal Sidang KI</h5>

                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">Pemohon</th>
                        <th scope="col">Komisioner</th>
                        <th scope="col">Tanggal Sidang</th>
                        <th scope="col">Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Sobirin</td>
                        <td>Brandon Jacob</td>
                        <td>10/10/2022</td>
                        <td>
                          <button type="button" class="btn btn-warning btn-sm">
                            <i class="bi bi-eye"></i>
                          </button>
                        </td>
                      </tr>

                      <tr>
                        <!-- <th scope="row"><a href="#">#2147</a></th>
                          <td>Bridie Kessler</td>
                          <td>
                            <a href="#" class="text-primary"
                              >Blanditiis dolor omnis similique</a
                            >
                          </td>
                          <td>$47</td>
                          <td><span class="badge bg-warning">Pending</span></td>
                        </tr> -->
                      </tr>

                      <tr>
                        <!-- <th scope="row"><a href="#">#2049</a></th>
                          <td>Ashleigh Langosh</td>
                          <td>
                            <a href="#" class="text-primary"
                              >At recusandae consectetur</a
                            >
                          </td>
                          <td>$147</td>
                          <td>
                            <span class="badge bg-success">Approved</span>
                          </td> -->
                      </tr>

                      <tr>
                        <!-- <th scope="row"><a href="#">#2644</a></th>
                          <td>Angus Grady</td>
                          <td>
                            <a href="#" class="text-primar"
                              >Ut voluptatem id earum et</a
                            >
                          </td>
                          <td>$67</td>
                          <td><span class="badge bg-danger">Rejected</span></td> -->
                      </tr>

                      <tr>
                        <!-- <th scope="row"><a href="#">#2644</a></th>
                          <td>Raheem Lehner</td>
                          <td>
                            <a href="#" class="text-primary"
                              >Sunt similique distinctio</a
                            >
                          </td>
                          <td>$165</td>
                          <td>
                            <span class="badge bg-success">Approved</span>
                          </td> -->
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Lihat Jadwal Anda -->
          </div>
        </div>
        <!-- End Left side columns -->
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