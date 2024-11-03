<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Menggunakan font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Menyetel font untuk seluruh halaman */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
     <!-- Link Swiper.js -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="bg-gray-100">
    <!-- Header dengan navigasi tetap di bagian atas layar -->
    <header class="bg-blue-600 text-white fixed w-full z-10 transition-all duration-300" id="navbar">
        <nav class="mx-auto px-6 py-3 flex justify-between items-center">
            <!-- Logo atau nama situs -->
            <div class="text-2xl font-bold">SchoolNews<span class="text-yellow-300">Hub</span></div>
            <!-- Menu navigasi yang tersembunyi di layar kecil -->
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="hover:text-yellow-300 transition duration-300">Home</a>
                <a href="#featured" class="hover:text-yellow-300 transition duration-300">Featured</a>
                <a href="#categories" class="hover:text-yellow-300 transition duration-300">Categories</a>
                <a href="#subscribe" class="hover:text-yellow-300 transition duration-300">Subscribe</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Bagian sambutan di halaman utama -->
        <section id="home" class="pt-24 pb-12 md:pt-32 md:pb-24 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
            <div class=" mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fade-in-down">Selamat Datang di SchoolNewsHub</h1>
                <p class="text-xl mb-8 animate-fade-in-up">Sumber berita terbaru dari sekolah Anda</p>
                <a href="#featured" class="bg-yellow-400 text-blue-800 px-8 py-3 rounded-full text-lg font-semibold hover:bg-yellow-300 transition duration-300 animate-bounce">Baca Berita Terbaru</a>
            </div>
        </section>

        <!-- Bagian berita unggulan -->
        <section id="featured" class="py-16 bg-white">
            <div class=" mx-auto px-6">
                <h2 class="text-3xl font-bold mb-8 text-center">Berita Unggulan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Berita pertama -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                        <img src="/placeholder.svg?height=200&width=400&text=Pemenang+Lomba+Sains" alt="Pemenang Lomba Sains" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Pengumuman Pemenang Lomba Sains</h3>
                            <p class="text-gray-700">Siswa berprestasi kami menunjukkan proyek inovatif mereka dan memenangkan hadiah utama di lomba sains tahunan.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                    <!-- Berita kedua -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                        <img src="/placeholder.svg?height=200&width=400&text=Peresmian+Perpustakaan" alt="Peresmian Perpustakaan Baru" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Peresmian Perpustakaan Baru</h3>
                            <p class="text-gray-700">Rasakan fasilitas perpustakaan canggih kami yang dirancang untuk meningkatkan minat baca dan pembelajaran.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                    <!-- Berita ketiga -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                        <img src="/placeholder.svg?height=200&width=400&text=Juara+Basket" alt="Tim Basket Juara" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Tim Basket Juara Kejuaraan</h3>
                            <p class="text-gray-700">Tim basket sekolah kami membawa pulang piala setelah perjalanan musim yang seru.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian berita terbaru -->
        <section id="recent-news" class="py-16 bg-gray-100">
            <div class=" mx-auto px-6">
                <h2 class="text-3xl font-bold mb-8 text-center">Berita Terbaru</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Berita pertama -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="/placeholder.svg?height=300&width=600&text=Pameran+Seni+Sekolah" alt="Pameran Seni Sekolah" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Pembukaan Pameran Seni Tahunan</h3>
                            <p class="text-gray-700">Siswa menunjukkan bakat artistik mereka di berbagai medium di pameran seni yang dinanti-nanti.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                    <!-- Berita kedua -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="/placeholder.svg?height=300&width=600&text=Kemenangan+Tim+Robotika" alt="Kemenangan Tim Robotika" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Tim Robotika Juara Kompetisi Regional</h3>
                            <p class="text-gray-700">Tim robotika sekolah kami menunjukkan inovasi dan kerja sama yang luar biasa, meraih juara pertama.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <main>
            <!-- Informasi Guru dengan Slider -->
            <section id="teachers" class="py-16 bg-white">
                <div class="mx-auto px-6 text-center">
                    <h2 class="text-3xl font-bold mb-8">Informasi Guru</h2>
                    <!-- Swiper  -->
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Guru pertama -->
                            <div class="swiper-slide bg-gray-400 rounded-lg shadow-lg p-4 m-4">
                                <img src="{{asset('assets-Guru/team-1.jpg')}}" alt="Guru 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                                <h3 class="text-xl font-semibold">Budi Santoso</h3>
                                <p class="text-gray-600">Guru Matematika</p>
                                <p class="text-gray-700 mt-2">Mengajar matematika selama lebih dari 10 tahun dan sangat berdedikasi untuk meningkatkan kemampuan numerik siswa.</p>
                            </div>
                            <!-- Guru kedua -->
                            <div class="swiper-slide bg-gray-400 rounded-lg shadow-lg p-4 m-4">
                                <img src="{{asset('assets-Guru/team-2.jpg')}}" alt="Guru 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                                <h3 class="text-xl font-semibold">Dewi Saraswati</h3>
                                <p class="text-gray-600">Guru Bahasa Indonesia</p>
                                <p class="text-gray-700 mt-2">Spesialis Bahasa Indonesia yang telah berpengalaman dan memiliki banyak teknik pengajaran kreatif.</p>
                            </div>
                            <!-- Guru ketiga -->
                            <div class="swiper-slide bg-gray-400 rounded-lg shadow-lg p-4 m-4">
                                <img src="{{asset('assets-Guru/team-3.jpg')}}" alt="Guru 3" class="w-32 h-32 rounded-full mx-auto mb-4">
                                <h3 class="text-xl font-semibold">Agus Riyanto</h3>
                                <p class="text-gray-600">Guru IPA</p>
                                <p class="text-gray-700 mt-2">Mengajar ilmu pengetahuan alam dengan pendekatan eksperimen langsung di kelas.</p>
                            </div>
                            <div class="swiper-slide bg-gray-400 rounded-lg shadow-lg p-4 m-4">
                                <img src="{{asset('assets-Guru/team-4.jpg')}}" alt="Guru 3" class="w-32 h-32 rounded-full mx-auto mb-4">
                                <h3 class="text-xl font-semibold">Agus Riyanto</h3>
                                <p class="text-gray-600">Guru IPA</p>
                                <p class="text-gray-700 mt-2">Mengajar ilmu pengetahuan alam dengan pendekatan eksperimen langsung di kelas.</p>
                            </div>
                        </div>
                        <!-- Tombol navigasi -->
                        {{-- <div class="swiper-button-next text-blue-600"></div>
                        <div class="swiper-button-prev text-blue-600"></div>
                        <!-- Pagination -->
                        <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </section>
        </main>
        <!-- Bagian kategori berita -->
        <section id="categories" class="py-16 bg-gray-200">
            <div class=" mx-auto px-6">
                <h2 class="text-3xl font-bold mb-8 text-center">Kategori Berita</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- Kategori pertama -->
                    <a href="#" class="bg-blue-600 text-white rounded-lg p-6 text-center hover:bg-blue-700 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                        <span class="font-semibold">Akademik</span>
                    </a>
                    <!-- Kategori kedua -->
                    <a href="#" class="bg-green-600 text-white rounded-lg p-6 text-center hover:bg-green-700 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a5 5 0 0110 0v6a5 5 0 01-10 0z" />
                        </svg>
                        <span class="font-semibold">Olahraga</span>
                    </a>
                    <!-- Kategori ketiga -->
                    <a href="#" class="bg-yellow-600 text-white rounded-lg p-6 text-center hover:bg-yellow-700 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4h4m0 4h.01M12 12h4" />
                        </svg>
                        <span class="font-semibold">Seni & Budaya</span>
                    </a>
                    <!-- Kategori keempat -->
                    <a href="#" class="bg-red-600 text-white rounded-lg p-6 text-center hover:bg-red-700 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7h.01M5 12l5 5L20 7" />
                        </svg>
                        <span class="font-semibold">Acara</span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <section id="subscribe" class="py-16 bg-blue-600 text-white">
        <div class=" mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Stay Updated</h2>
            <p class="mb-8 text-xl">Subscribe to our newsletter for the latest school news and events!</p>
            <form class="max-w-md mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Your email address" class="flex-grow px-4 py-2 rounded-full text-gray-900" required>
                    <button type="submit" class="bg-yellow-400 text-blue-800 px-6 py-2 rounded-full font-semibold hover:bg-yellow-300 transition duration-300">Subscribe</button>
                </div>
            </form>
        </div>
    </section>
</main>

<footer class="bg-gray-800 text-white py-8">
    <div class=" mx-auto px-6 text-center">
        <p>&copy; 2024 SchoolNewsHub. All rights reserved.</p>
    </div>
</footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Inisialisasi Swiper
        var swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('bg-blue-800', 'shadow-md');
                navbar.classList.remove('bg-blue-600');
            } else {
                navbar.classList.add('bg-blue-600');
                navbar.classList.remove('bg-blue-800', 'shadow-md');
            }
        });

        // Add animation classes
        const animateOnScroll = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    observer.unobserve(entry.target);
                }
            });
        };

        const observer = new IntersectionObserver(animateOnScroll, {
            root: null,
            threshold: 0.1
        });

        document.querySelectorAll('section > div > *').forEach(el => {
            observer.observe(el);
        });
    </script>

    <style>
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -20px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 20px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }
    </style>
</body>
</html>
