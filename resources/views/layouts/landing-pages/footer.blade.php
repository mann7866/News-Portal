<footer class="section footer noover bg-success" style=" padding: 40px 0; color: #fff;">
    <div class="container">
        <div class="row">
            <!-- Tentang SMK AL-Azhar -->
            <div class="col-lg-4 col-md-4">
                <div class="widget clearfix">
                    <h3 class="widget-title">Tentang SMK AL-Azhar</h3>
                    <div class="newsletter-widget">
                        <p>SMK kami memiliki unit usaha di setiap program studi, berikut adalah daftar dari unit usaha SMK kami.</p>
                        <div class="logo-grid">
                            <img src="{{ asset('logo/ALputer.jpg') }}" alt="ACS Multi Technology" class="logo-img">
                            <img src="{{ asset('logo/Almotor.png') }}" alt="Oma Mode" class="logo-img">
                            <img src="{{ asset('logo/Aljahit.png') }}" alt="Al Jahit" class="logo-img">
                            <img src="{{ asset('logo/network.jpeg') }}" alt="Network Logo" class="logo-img">
                            <img src="{{ asset('logo/Altoko.png') }}" alt="Al Toko" class="logo-img">
                            <img src="{{ asset('logo/hummatech.png') }}" alt="Hummatech Logo" class="logo-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mengapa Bergabung -->
            <div class="col-lg-3 col-md-3">
                <div class="widget clearfix">
                    <h3 class="widget-title">Mengapa Bergabung dengan SMK Kami?</h3>
                    <details>
                        <summary><i class="fa fa-info-circle"></i> Pelajari lebih lanjut</summary>
                        <p>Di SMK kami, setiap program studi memiliki unit usaha, memberikan siswa kesempatan belajar dan praktik langsung di dunia industri! Bergabunglah dan rasakan pengalaman ini yang akan mempersiapkan Anda untuk dunia kerja.</p>
                    </details>
                    <a href="#" class="readmore" style="color: #fff; text-decoration: underline;">Bergabung Menjadi Pengajar</a>
                </div>
            </div>

            <!-- Tag Populer -->
            <div class="col-lg-3 col-md-3">
                <div class="widget clearfix">
                    <h3 class="widget-title">Tag Populer</h3>
                    <div class="tags-widget">
                        <div class="tag-list">
                            <div class="tag-item"><a href="#">Merdeka Indo</a></div>
                            <div class="tag-item"><a href="#">FufuFafa</a></div>
                            <div class="tag-item"><a href="#">Benjamin</a></div>
                            <div class="tag-item"><a href="#">SchoolHd</a></div>
                            <div class="tag-item"><a href="#">Podcasth</a></div>
                            <div class="tag-item"><a href="#">CIhuuy</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dukungan -->
            <div class="col-lg-2 col-md-2">
                <div class="widget clearfix">
                    <h3 class="widget-title">Dukungan</h3>
                    <div class="support-links">
                        <div class="link-item"><a href="#">Ketentuan Penggunaan</a></div>
                        <div class="link-item"><a href="#">Hak Cipta</a></div>
                        <div class="link-item"><a href="#">Buat Tiket</a></div>
                        <div class="link-item"><a href="#">Harga & Paket</a></div>
                        <div class="link-item"><a href="#">Karir</a></div>
                        <div class="link-item"><a href="#">Merek Dagang</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="row mt-2">
            <div class="col-md-4 mt-2 col-sm-4 mb-0 text-left">
                <div class="footer-links mb-1 d-flex flex-column align-items-start">
                    <h3 >SMKS Al-Azhar Sempu</h3>
                    <p>Jl. Imam Syafi i No.45, Tugung, Sempu, Banyuwangi, Jawa Timur</p>
                    <p>Kode Pos: 68468</p>
                    <p>Email: <a href="mailto:smkalazhar.sempubwi@gmail.com" style="color: #fff;">smkalazhar.sempubwi@gmail.com</a></p>
                    <p>Telepon: <a href="tel:+6285236553650" style="color: #fff;">+62 852 3655 3650</a></p>
                </div>
            </div>
            <div class="col-md-8 col-sm-4 text-right">
                <div class="social d-flex justify-content-center align-items-center">
                    <a class="facebook" href="https://www.facebook.com/smkalazharsempu"><i class="fab fa-facebook"></i></a>
                    <a class="twitter" href="https://x.com/smkalazharsempu"><i class="fab fa-twitter"></i></a>
                    <a class="google" href="www.smkalazhar.sch.id"><i class="fab fa-google-plus"></i></a>
                    <a class="instagram" href="https://instagram.com/smkalazharsempu"><i class="fab fa-instagram"></i></a>
                    <a class="tiktok" href="https://tiktok.com/@smkalazharsempu"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- CSS -->
<style>
    /* Main Footer Styles */
    footer {
        color: #fff;
        padding: 40px 0;
        font-size: 14px;
    }

    /* Grid for logos */
    .logo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(70px, 1fr));
        gap: 10px;
        justify-items: center;
    }

    .logo-img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 8%;
        transition: transform 0.3s ease;
    }

    .logo-img:hover {
        transform: scale(1.1);
    }

    /* Details section */
    details summary {
        font-size: 15px;
        cursor: pointer;
        font-weight: bold;
    }

    details summary i {
        margin-right: 5px;
    }

    /* Tag styles */
    .tag-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tag-item a {
        padding: 5px 8px;
        background-color: #eaf774;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
    }

    .tag-item a:hover {
        background-color: #cce016;
    }

    /* Support links */
    .support-links {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .link-item a {
        color: #ffffff;
        text-decoration: none;
    }

    .link-item a:hover {
        color: #fff;
    }

    /* Social icons */
    .social a {
        color: #fff;
        font-size: 16px;
        margin: 0 10px;
        transition: color 0.3s;
    }

    .social a:hover {
        color: #ccc;
    }
</style>

</div>
<footer class="footer-part pt-8 pb-5" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="text-center">
                <a href="index-new.html">
                    <img src="{{ asset('admin-assets/images/logos/favicon.ico') }}" alt=""
                        class="img-fluid pb-3">
                </a>
                <p class="mb-0 text-dark">Cari sekolah untuk anak anda di sini aja terjamin kualitasnya daftar disini saja  <a
                        class="text-dark text-hover-primary border-bottom border-primary"
                        href="https://adminmart.com/">SMK AL-AZHAR!!.</a></p>
            </div>
        </div>
    </div>
</div>
</footer>
</div>
<script src="{{ asset('admin-assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/libs/aos/dist/aos.js') }}"></script>
<script src="{{ asset('admin-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/custom.js') }}"></script>
<script>
// change URL Js
$(function() {
let currentURL =
    window.location != window.parent.location ?
    document.referrer :
    document.location.href;
if (currentURL == "https://themeforest.net/") {
    $("a.download-link").attr(
        "href",
        "#"
    );
} else {
    $("a.download-link").attr(
        "href",
        "https://adminmart.com/product/modernize-react-mui-dashboard-template/"
    );
}
});
</script>


</body>
