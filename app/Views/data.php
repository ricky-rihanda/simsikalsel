<?php include('header.php'); ?>
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
                            <h1 data-aos="fade-up" data-aos-delay="">Data</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Sistem Informasi Manajemen Sengketa
                                Informasi Kalimantan Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="">
        <!-- Chart Open -->
        <script src="Chart.bundle.js"></script>
        <div class="container w-100">
            <div class="row">
                <div class="col">
                </div>
                <div class="col">
                    <div>
                        <canvas id="myChart" class="w-100 h-100"></canvas>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
            <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Mediasi", "Ajudikasi", "Pembatalan", "Lainnya"],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
            <!-- Chart Close -->
            <div class="container mt-5">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-6">
                            <a href="/putusanmediasi">
                                <div class="pricing text-center mb-5" style="height: 20px;">
                                    <h3 style="color: #fff;">Putusan Mediasi</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="/putusanajudikasi">
                                <div class="pricing text-center mb-5" style="height: 20px;">
                                    <h3 style="color: #fff;">Putusan Ajudikasi</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Force next columns to break to new line -->
                        <div class="w-100"></div>

                        <div class="col-6">
                            <a href="/putusanpembatalan">
                                <div class="pricing text-center mb-5" style="height: 20px;">
                                    <h3 style="color: #fff;">Putusan Pembatalan</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="/putusanlainnya">
                                <div class="pricing text-center mb-5" style="height: 20px;">
                                    <h3 style="color: #fff;">Putusan Lainnya</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- tes -->
    <!-- tes -->
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