<!-- Footer Starts Here -->
<style>
#zoom {
    color: #fff;
}

#zoom:hover {
    color: yellow;
}
</style>
<footer>
    <div class="container pt-5">
        <div class="row">
            <div class="row d-flex">
                <div class="col-md-8">
                    <h4 class="mb-2" style="color: #fff;">Lokasi</h4>
                    <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=400&amp;height=300&amp;hl=en&amp;q=Komisi%20Informasi%20Kalimantan%20Selatan+(Komisi%20Informasi)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            width="600" height="300" frameborder="0"><a
                                href="https://www.maps.ie/distance-area-calculator.html">measure distance on
                                map</a></iframe></div>
                </div>
                <!-- copyright text -->
                <div class="col-md-4">
                    <h4 class="mb-2" style="color: #fff;">Alamat</h4>
                    <p style="color: #fff;">Kantor Komisi Informasi <br>Dinas Komunikasi dan Informatika Provinsi
                        Kalimantan Selatan
                        <br>Jalan. jalan ke kotabaru <br class="mb-4">
                    <h4 class="mb-2" style="color: #fff;">Kontak</h4>
                    <p style="color: #fff;">Telp : belum Fax belum <br> Email : <a class="footer-info"
                            href="mailto:sekretariat@komisiinformasi.go.id" id="zoom">belum</a>
                        <br> Instagram : <a class="footer-info"
                            href="https://www.instagram.com/komisi_informasi_publik_kalsel/" target="_blank"
                            rel="noopener noreferrer" id="zoom">@komisi_informasi_publik_kalsel</a>
                        <br> Facebook : <a class="footer-info"
                            href="https://www.facebook.com/Komisi-Informasi-Publik-Kalimantan-Selatan-110483647054915"
                            target="_blank" rel="noopener noreferrer" id="zoom">Komisi
                            Informasi Publik Kalimantan Selatan</a>
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>

<script language="text/Javascript">
cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
function clearField(t) {
    //declaring the array outside of the
    if (!cleared[t.id]) {
        // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ""; // with more chance of typos
        t.style.color = "#fff";
    }
}
</script>