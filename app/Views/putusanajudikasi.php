<?php include('header.php'); ?>

<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/fc-4.1.0/rr-1.2.8/sc-2.0.7/datatables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/fc-4.1.0/rr-1.2.8/sc-2.0.7/datatables.min.js">
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js">
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js">
    </script>
</head>
<main id="main">

    <!-- ======= FeatPricingures Section ======= -->
    <div class="hero-section inner-page">
        <div class="wave">

            <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">Putusan Ajudikasi</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Sistem Informasi Manajemen Sengketa
                                Informasi Kalimantan Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="section">
        <div class="container">
            <table class="table table-bordered display " id="tabelRegulasi">
                <thead>
                    <tr>
                        <th scope="col">No. Putusan</th>
                        <th scope="col">Pemohon</th>
                        <th scope="col">Termohon</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Lihat Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    for ($j=0; $j<5; $j++) : ?>
                    <tr data-child-value="<?php echo $i ?>">
                        <th scope="row"><?= $i ?></th>
                        <td><strong>slebew</strong></td>
                        <td>kosong</td>
                        <td>
                            kosong
                        </td>
                        <td class="details-control">
                            <button class="btn btn-info btn-sm"><i class="bi bi-eye-fill"></i></button>
                        </td>
                    </tr>
                    <?php $i++;
                    endfor ?>
                </tbody>
            </table>
            <script>
            function format(value) {
                return '<div>' + value + '</div>';
            }
            $(document).ready(function() {
                var table = $('#tabelRegulasi').DataTable({
                    dom: '<f<rt>>p'
                });

                // Add event listener for opening and closing details
                $('#tabelRegulasi').on('click', 'td.details-control', function() {
                    var tr = $(this).closest('tr');
                    var row = table.row(tr);

                    if (row.child.isShown()) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    } else {
                        // Open this row
                        row.child(format(tr.data('child-value'))).show();
                        tr.addClass('shown');
                    }
                });
            });
            </script>
        </div>
    </section>

</main><!-- End #main -->
<?php include('footer.php'); ?>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>