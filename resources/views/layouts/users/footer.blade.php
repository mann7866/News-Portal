<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    /* Mengatur efek hover pada bagian Products dan Useful links */
footer .text-dark {
    position: relative;
    text-decoration: none;
    transition: color 0.3s;
}

footer .text-dark:hover {
    color: #21D192; /* Mengubah warna teks ketika hover */
}

footer .text-dark::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px; /* Posisi garis di bawah teks */
    width: 0;
    height: 2px;
    background-color: #21D192; /* Warna hijau untuk garis */
    transition: width 0.3s ease;
}

footer .text-dark:hover::after {
    width: 100%; /* Memunculkan garis di bawah teks ketika hover */
}

/* Margin tambahan di ikon untuk memastikan jarak yang rapi */
.bi {
    margin-right: 6px;
}

</style>
<div class="container-fluid my-0 p-0">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1; min-height: 100vh; display: flex; flex-direction: column; justify-content: flex-end;">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192;">
            <!-- Left -->
            <div style="text-align: center" class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://facebook.com/smkalazharsempu" class="text-white me-4" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/smkalazharsempu" class="text-white me-4" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://google.com/smkalazharsempu" class="text-white me-4" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-google"></i>
                </a>
                <a href="https://instagram.com/smkalazharsempu" class="text-white me-4" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://linkedin.com/smkalazharsempu" class="text-white me-4" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://youtube.com/smkalazharsempu" class="text-white me-4" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="flex-grow-1">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">School Name</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <h4 style="font: bold">SMKS Al-Azhar</h4>
                        <p>
               Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis illo fuga nesciunt ad voluptates quibusdam mollitia temporibus natus assumenda quia molestiae accusamus, ullam, consectetur ex unde! Eveniet magnam provident voluptates.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-dark">MDBootstrap</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">MDWordPress</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">BrandFlow</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Bootstrap Angular</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="http://smkalazhar.sch.id/" class="text-dark">Smks Al-Azhar</a>
                        </p>
                        <p>
                            <a href="https://www.acsmultitechnology.com/" class="text-dark">ACS Multitechnology</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Hummatech</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Info</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    
                        <!-- Alamat -->
                        <p class="d-flex align-items-start">
                            <i class="bi bi-buildings mr-2"></i>
                            <span>Jl. Imam Syafi'i No.45, Tugung, Sempu, Kec. Sempu Kabupaten Banyuwangi, Jawa Timur</span>
                        </p>
                    
                        <!-- Kode Pos -->
                        <p class="d-flex align-items-center">
                            <i class="bi bi-mailbox-flag mr-2"></i>
                            <span>Kode Pos: 68468</span>
                        </p>
                    
                        <!-- Email -->
                        <p class="d-flex align-items-center">
                            <i class="bi bi-envelope mr-2"></i>
                            <span>smkalazhar.sempubwi@gmail.com</span>
                        </p>
                    
                        <!-- Telepon -->
                        <p class="d-flex align-items-center">
                            <i class="bi bi-telephone mr-2"></i>
                            <span>+62 852 3655 3650</span>
                        </p>
                    </div>
                    
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">Magang</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>
<!-- End of .container -->
