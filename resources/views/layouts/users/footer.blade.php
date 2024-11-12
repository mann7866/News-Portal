<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK AL-Azhar Footer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        footer {
            background-color: #000000;
            color: #ffffff;
            padding: 40px 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }
        h3 {
            font-size: 18px;
            margin-bottom: 15px;
        }
        .logo-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .logo-img {
            width: 70px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .logo-img:hover {
            transform: scale(1.1);
        }
        summary {
            cursor: pointer;
            font-weight: bold;
        }
        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .tag-item {
            background-color: #36c381;
            padding: 5px 10px;
            border-radius: 5px;
            color: #ffffff;
            text-decoration: none;
        }
        .support-links a {
            display: block;
            margin-bottom: 10px;
            color: #ffffff;
            text-decoration: none;
        }
        .support-links a:hover {
            text-decoration: underline;
        }
        .contact-map {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 40px;
        }
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        .social-icon {
            width: 40px;
            height: 40px;
            background-color: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #ffffff;
            font-size: 20px;
        }
        .map-container {
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
        }
        iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 8px;
        }
        @media (max-width: 768px) {
            .footer-grid, .contact-map {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3>Tentang SMK AL-Azhar</h3>
                    <p>SMK kami memiliki unit usaha di setiap program studi, berikut adalah daftar dari unit usaha SMK kami.</p>
                    <div class="logo-grid">
                        <img src="{{asset('Logo/acsMT.jpg')}}" alt="Logo 1" class="logo-img">
                        <img src="{{ asset('Logo/ALjahit.png') }}" alt="Logo 2" class="logo-img">
                        <img src="{{ asset('Logo/ALmotor.png') }}" alt="Logo 3" class="logo-img">
                        <img src="{{ asset('Logo/network.jpeg') }}" alt="Logo 4" class="logo-img">
                        <img src="{{asset('Logo/ALtoko.png')}}" alt="Logo 5" class="logo-img">
                        <img src="{{asset('Logo/hummatech.png')}}" alt="Logo 6" class="logo-img">
                    </div>
                </div>
                <div>
                    <h3>Mengapa Bergabung dengan SMK Kami?</h3>
                    <details>
                        <summary>ℹ️ Pelajari lebih lanjut</summary>
                        <p>Di SMK kami, setiap program studi memiliki unit usaha, memberikan siswa kesempatan belajar dan praktik langsung di dunia industri! Bergabunglah dan rasakan pengalaman ini yang akan mempersiapkan Anda untuk dunia kerja.</p>
                    </details>
                    <a href="#" style="color: #fff; text-decoration: underline;">Bergabung Menjadi Pengajar</a>
                </div>
                <div>
                    <h3>Tag Populer</h3>
                    <div class="tag-list">
                        <a href="#" class="tag-item">AlungXdyroth</a>
                        <a href="#" class="tag-item">AlungXdyroth</a>
                        <a href="#" class="tag-item">AlungXdyroth</a>
                    </div>
                </div>
                <div>
                    <h3>Dukungan</h3>
                    <div class="support-links">
                        <a href="#">Ketentuan Penggunaan</a>
                        <a href="#">Hak Cipta</a>
                        <a href="#">Buat Tiket</a>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <div>
                    <h3>SMKS Al-Azhar Sempu</h3>
                    <p>Jl. Imam Syafi'i No.45, Tugung, Sempu, Banyuwangi, Jawa Timur</p>
                    <p>Kode Pos : 68468</p>
                    <p>Telepon : <a href="tel:+6285236553650" style="color: #fff;">+62 852 3655 3650</a></p>
                    <p>Email : <a href="mailto:smkalazhar.sempubwi@gmail.com" style="color: #fff;">smkalazhar.sempubwi@gmail.com</a></p>
                    <div class="social-icons">
                        <a href="https://facebook.com/smkalazharsempu" class="social-icon" target="_blank" rel="noopener noreferrer">f</a>
                        <a href="https://twitter.com/smkalazharsempu" class="social-icon" target="_blank" rel="noopener noreferrer">t</a>
                        <a href="https://google.com/smkalazharsempu" class="social-icon" target="_blank" rel="noopener noreferrer">g</a>
                        <a href="https://instagram.com/smkalazharsempu" class="social-icon" target="_blank" rel="noopener noreferrer">i</a>
                        <a href="https://tiktok.com/smkalazharsempu" class="social-icon" target="_blank" rel="noopener noreferrer">tt</a>
                    </div>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.0781328051505!2d114.1374522405405!3d-8.30428163607927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6acb17e63e19d%3A0xf0a7e21e4fcadf5f!2sSMK%20AL-AZHAR%20SEMPU!5e0!3m2!1sid!2sid!4v1713251117857!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>