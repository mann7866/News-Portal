<footer class="section footer noover" style="background-color: #000000; padding: 20px 0; color: #fff;">
    <div class="container">
        <div class="row">
            <!-- Tentang SMK AL-Azhar -->
            <div class="col-lg-3 col-md-3">
                <div class="widget clearfix">
                    <h3 class="widget-title" style="color:white;">Tentang SMK AL-Azhar</h3>
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

            <!-- Mengapa Bergabung -->
            <div class="col-lg-3 col-md-3">
                <div class="widget clearfix">
                    <h3 class="widget-title" style="color:white;">Mengapa Bergabung dengan SMK Kami?</h3>
                    <details>
                        <summary><i class="fa fa-info-circle"></i> Pelajari lebih lanjut</summary>
                        <p>Di SMK kami, setiap program studi memiliki unit usaha, memberikan siswa kesempatan belajar
                            dan praktik langsung di dunia industri! Bergabunglah dan rasakan pengalaman ini yang akan
                            mempersiapkan Anda untuk dunia kerja.</p>
                    </details>
                    <a href="#" class="readmore" style="color: #fff; text-decoration: underline;">Bergabung Menjadi Pengajar</a>
                </div>
            </div>

            <!-- Tag Populer -->
            <div class="col-lg-3 col-md-3">
                <div class="widget clearfix">
                    <h3 class="widget-title" style="color:white;">Tag Populer</h3>
                    <div class="tag-list">
                        <div class="tag-item"><a href="#">AlungXdyroth</a></div>
                        <div class="tag-item"><a href="#">AlungXdyroth</a></div>
                        <div class="tag-item"><a href="#">AlungXdyroth</a></div>
                    </div>
                </div>
            </div>

            <!-- Dukungan -->
            <div class="col-lg-2 col-md-2">
                <div class="widget clearfix">
                    <h3 class="widget-title" style="color:white;">Dukungan</h3>
                    <div class="support-links">
                        <div class="link-item"><a href="#">Ketentuan Penggunaan</a></div>
                        <div class="link-item"><a href="#">Hak Cipta</a></div>
                        <div class="link-item"><a href="#">Buat Tiket</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="row mt-3">
            <div class="col-md-6 text-left">
                <h3 style="color: white; margin-bottom: 10px;">SMKS Al-Azhar Sempu</h3>
                <p>Jl. Imam Syafi'i No.45, Tugung, Sempu, Banyuwangi, Jawa Timur</p>
                <p>Kode Pos : 68468</p>
                <p>Telepon : <a href="tel:+6285236553650" style="color: #fff;">+62 852 3655 3650</a></p>
                <p>Email : <a href="mailto:smkalazhar.sempubwi@gmail.com" style="color: #fff;">smkalazhar.sempubwi@gmail.com</a></p>
            </div>
            <div class="col-md-6 text-right">
                <div class="social">
                    <a class="facebook" href="https://www.facebook.com/smkalazharsempu"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="https://x.com/smkalazharsempu"><i class="fab fa-twitter"></i></a>
                    <a class="google" href="https://www.smkalazhar.sch.id"><i class="fa fa-google-plus"></i></a>
                    <a class="instagram" href="https://instagram.com/smkalazharsempu"><i class="fa fa-instagram"></i></a>
                    <a class="tiktok" href="https://tiktok.com/@smkalazharsempu"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Maps -->
<div class="container mt-3">
    <div class="row">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.0781328051505!2d114.1374522405405!3d-8.30428163607927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6acb17e63e19d%3A0xf0a7e21e4fcadf5f!2sSMK%20AL-AZHAR%20SEMPU!5e0!3m2!1sid!2sid!4v1713251117857!5m2!1sid!2sid"
            width="100%" height="300" style="border:0; border-radius: 8px;" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<!-- CSS -->
<style>
    footer {
        background-color: #000;
        color: #fff;
        padding: 20px 0;
        font-size: 14px;
        margin-top: -10px;
    }

    .logo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
        gap: 8px;
        justify-items: center;
    }

    .logo-img {
        width: 70px;
        height: 50px;
        object-fit: cover;
        border-radius: 8%;
        transition: transform 0.3s ease;
    }

    .logo-img:hover {
        transform: scale(1.1);
    }

    details summary {
        font-size: 14px;
        cursor: pointer;
        font-weight: bold;
    }

    .tag-list {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .tag-item a {
        padding: 5px 8px;
        background-color: #36c381;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
    }

    .support-links {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .social a {
        color: #fff;
        font-size: 14px;
        margin: 0 8px;
        transition: color 0.3s;
    }

    .social a:hover {
        color: #ccc;
    }
</style>
