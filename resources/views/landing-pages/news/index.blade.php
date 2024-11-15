@extends('layouts.landing-page.app')
@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url('storage/Background-Berita.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Berita</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-area right-sidebar full-blog mt-5">
            <div class="mx-3">
                <div class="blog-items">
                    <div class="row">



                        <div class="col-9 ">
                            <div class="item rounded rounded-3 mb-4">

                                {{--  content  --}}
                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/sipjaki-buatan-pt-hummatech-raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img1.jpg') }}"
                                                alt="SIPJAKI Buatan PT Hummatech Raih Apresiasi dari Pemerintah Provinsi Jawa Timur"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>
                                                    <div class="categories">
                                                        <a href="news/category/prestasi.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Prestasi</a>
                                                        <span>|</span>
                                                        <a href="news/category/software-development.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Software
                                                            Development</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/sipjaki-buatan-pt-hummatech-raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html"
                                                class="text-primary">SIPJAKI Buatan PT Hummatech Raih Apresiasi dari
                                                Pemerintah Provinsi Jawa Timur</a>
                                        </h4>
                                        <p class="text-muted m-0">2 Mei 2024</p>
                                        <p class="mt-2">SIPJAKI (Sistem Informasi Pembina Jasa Konstruksi Kabupaten
                                            Pasuruan) yang dikembangkan oleh perusahaan teknologi Hummat...</p>

                                        <a href="news/sipjaki-buatan-pt-hummatech-raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/perkuat-skill-pemrograman-mobile-apps-bagi-guru-bbppmpv-boe-gelar-magang-dan-uji-kompetensi-di-hummatech.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img1.jpg') }}"
                                                alt="Perkuat Skill Pemrograman Mobile Apps Bagi Guru, BBPPMPV BOE Gelar Magang dan Uji Kompetensi di Hummatech"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>

                                                    <div class="categories">
                                                        <a href="news/category/uji-kompetensi-keahlian.html"
                                                            class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Uji
                                                            Kompetensi Keahlian</a>
                                                        <span>|</span>
                                                        <a href="news/category/magang-pkl.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Magang/
                                                            PKL</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/perkuat-skill-pemrograman-mobile-apps-bagi-guru-bbppmpv-boe-gelar-magang-dan-uji-kompetensi-di-hummatech.html"
                                                class="text-primary">Perkuat Skill Pemrograman Mobile Apps Bagi Guru,
                                                BBPPMPV BOE Gelar Magang dan Uji Kompetensi di Hummatech</a>
                                        </h4>
                                        <p class="text-muted m-0">30 April 2024</p>
                                        <p class="mt-2">Lima orang guru dari berbagai SMK melaksanakan magang industri di
                                            Hummatech sejak tanggal 22 April 2024 hingga 30 April...</p>

                                        <a href="news/perkuat-skill-pemrograman-mobile-apps-bagi-guru-bbppmpv-boe-gelar-magang-dan-uji-kompetensi-di-hummatech.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/peserta-didik-kelas-industri-hummatech-menyabet-juara-lks-tingkat-provinsi-jawa-timur.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img3.jpg') }}"
                                                alt="Peserta Didik Kelas Industri Hummatech Menyabet Juara LKS Tingkat Provinsi Jawa Timur"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>

                                                    <div class="categories">
                                                        <a href="news/category/prestasi.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Prestasi</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/peserta-didik-kelas-industri-hummatech-menyabet-juara-lks-tingkat-provinsi-jawa-timur.html"
                                                class="text-primary">Peserta Didik Kelas Industri Hummatech Menyabet Juara
                                                LKS Tingkat Provinsi Jawa Timur</a>
                                        </h4>
                                        <p class="text-muted m-0">26 April 2024</p>
                                        <p class="mt-2">Untuk kesekian kalinya, peserta didik kelas industri Hummatech
                                            berhasil memenangkan juara LKS (Lomba Kompetensi Siswa) T...</p>

                                        <a href="news/peserta-didik-kelas-industri-hummatech-menyabet-juara-lks-tingkat-provinsi-jawa-timur.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/sukses-gelar-ukk-bidang-rpl-dan-dkv-di-smkn-3-pamekasan-uji-hardskill-dan-softskill-siswa.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img2.jpg') }}"
                                                alt="Sukses Gelar UKK Bidang RPL dan DKV di SMKN 3 Pamekasan: Uji Hardskill dan Softskill Siswa"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>

                                                    <div class="categories">
                                                        <a href="news/category/uji-kompetensi-keahlian.html"
                                                            class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Uji
                                                            Kompetensi Keahlian</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/sukses-gelar-ukk-bidang-rpl-dan-dkv-di-smkn-3-pamekasan-uji-hardskill-dan-softskill-siswa.html"
                                                class="text-primary">Sukses Gelar UKK Bidang RPL dan DKV di SMKN 3
                                                Pamekasan: Uji Hardskill dan Softskill Siswa</a>
                                        </h4>
                                        <p class="text-muted m-0">24 April 2024</p>
                                        <p class="mt-2">Sekolah Menengah Kejuruan Negeri (SMKN) 3 Pamekasan sukses
                                            menyelenggarakan Ujian Kompetensi Kejuruan (UKK) bidang Rekay...</p>

                                        <a href="news/sukses-gelar-ukk-bidang-rpl-dan-dkv-di-smkn-3-pamekasan-uji-hardskill-dan-softskill-siswa.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/ketua-tim-kerja-transformasi-smk-pk-mengapresiasi-hummatech-atas-dukungan-berkelanjutan.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img4.jpg') }}"
                                                alt="Ketua Tim Kerja Transformasi SMK PK Mengapresiasi Hummatech atas Dukungan Berkelanjutan"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>

                                                    <div class="categories">
                                                        <a href="news/category/kelas-industri.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Kelas
                                                            Industri</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/ketua-tim-kerja-transformasi-smk-pk-mengapresiasi-hummatech-atas-dukungan-berkelanjutan.html"
                                                class="text-primary">Ketua Tim Kerja Transformasi SMK PK Mengapresiasi
                                                Hummatech atas Dukungan Berkelanjutan</a>
                                        </h4>
                                        <p class="text-muted m-0">22 April 2024</p>
                                        <p class="mt-2">Pipin Dwi Nugraheni, Ketua Tim Kerja Transformasi SMK Pusat
                                            Keunggulan dari Direktorat SMK, memberikan apresiasi yang ti...</p>

                                        <a href="news/ketua-tim-kerja-transformasi-smk-pk-mengapresiasi-hummatech-atas-dukungan-berkelanjutan.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/penandatanganan-mou-kelas-industri-antara-hummatech-dan-smkn-2-kraksaan.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img5.jpg') }}"
                                                alt="Penandatanganan MoU Kelas Industri Antara Hummatech dan SMKN 2 Kraksaan"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>

                                                    <div class="categories">
                                                        <a href="news/category/kelas-industri.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Kelas
                                                            Industri</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/penandatanganan-mou-kelas-industri-antara-hummatech-dan-smkn-2-kraksaan.html"
                                                class="text-primary">Penandatanganan MoU Kelas Industri Antara Hummatech
                                                dan SMKN 2 Kraksaan</a>
                                        </h4>
                                        <p class="text-muted m-0">5 April 2024</p>
                                        <p class="mt-2">Enam orang perwakilan dari SMKN 2 Kraksaan melakukan kunjungan ke
                                            Kantor Hummatech untuk membahas kerjasama pada hari Ju...</p>

                                        <a href="news/penandatanganan-mou-kelas-industri-antara-hummatech-dan-smkn-2-kraksaan.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img1.jpg') }}"
                                                alt="Launching ACS School: Produk Teaching Factory Kerja Sama Hummatech dan SMK Al Azhar Sempu Banyuwangi"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>

                                                    <div class="categories">
                                                        <a href="news/category/kelas-industri.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Kelas
                                                            Industri</a>
                                                        <span>|</span>
                                                        <a href="news/category/software-development.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Software
                                                            Development</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html"
                                                class="text-primary">Launching ACS School: Produk Teaching Factory Kerja
                                                Sama Hummatech dan SMK Al Azhar Sempu Banyuwangi</a>
                                        </h4>
                                        <p class="text-muted m-0">7 Februari 2024</p>
                                        <p class="mt-2">Kabar gembira bagi sekolah-sekolah di Indonesia! Setelah melalui
                                            proses pembangunan selama dua tahun, Hummatech dan SMK...</p>

                                        <a href="news/launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-4 row d-flex align-items-stretch">
                                    <div class="col-lg-4 d-flex align-items-stretch">
                                        <a href="news/smk-negeri-6-jember-program-keahlian-pplg-gelar-kunjungan-industri-ke-hummatech.html"
                                            class="d-flex align-items-stretch w-100">
                                            <img src="{{ asset('landing-page/blog/blog-img1.jpg') }}"
                                                alt="SMK Negeri 6 Jember Program Keahlian PPLG Gelar Kunjungan Industri ke Hummatech"
                                                class="img-fluid rounded rounded-3 w-100" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mb-3 mt-2">

                                        <div class="meta p-0">
                                            <ul>
                                                <li>

                                                    <div class="categories">
                                                        <a href="news/category/kunjungan-industri.html" class="m-0"
                                                            style="font-size: 13px; color: #000; text-decoration: underline;">Kunjungan
                                                            Industri</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="m-1">
                                            <a href="news/smk-negeri-6-jember-program-keahlian-pplg-gelar-kunjungan-industri-ke-hummatech.html"
                                                class="text-primary">SMK Negeri 6 Jember Program Keahlian PPLG Gelar
                                                Kunjungan Industri ke Hummatech</a>
                                        </h4>
                                        <p class="text-muted m-0">25 Januari 2024</p>
                                        <p class="mt-2">Sebanyak 68 siswa Program Pengembangan Perangkat Lunak dan Gim
                                            (PPLG) dari SMK Negeri 6 Jember beserta 9 guru pendamping...</p>

                                        <a href="news/smk-negeri-6-jember-program-keahlian-pplg-gelar-kunjungan-industri-ke-hummatech.html"
                                            class="py-1 px-3 bg-primary text-white align-self-start"
                                            style="font-size: 13px; border-radius: 20px">Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="9px"
                                                fill="#fff" class="mt-0">
                                                <path
                                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-xl-3 mb-4">

                            <div class="sidebar wow fadeInLeft card item border-0 py-4"
                                style="visibility: visible; animation-name: fadeInLeft;">
                                <aside>

                                    <div class="sidebar-item recent-post">
                                        <div class="title">
                                            <h4>Kategori berita</h4>
                                        </div>
                                        <div class="sidebar-info me-5">
                                            <ul>
                                                <li>
                                                    <a href="news.html" class="text-primary">
                                                        Semua
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class=""
                                                        href="news/category/kunjungan-industri.html">Kunjungan
                                                        Industri</a>
                                                </li>
                                                <li>
                                                    <a class="" href="news/category/kelas-industri.html">Kelas
                                                        Industri</a>
                                                </li>
                                                <li>
                                                    <a class="" href="news/category/prestasi.html">Prestasi</a>
                                                </li>
                                                <li>
                                                    <a class=""
                                                        href="news/category/uji-kompetensi-keahlian.html">Uji
                                                        Kompetensi Keahlian</a>
                                                </li>
                                                <li>
                                                    <a class="" href="news/category/magang-pkl.html">Magang/ PKL</a>
                                                </li>
                                                <li>
                                                    <a class=""
                                                        href="news/category/software-development.html">Software
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="" href="news/category/ss.html">ss</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-item-box">
                                                <!-- Single Item -->
                                                <div class="single-item">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <a href="#"><img
                                                                    src="{{ asset('landing-page/blog/blog-img10.jpg') }}"
                                                                    alt="SIPJAKI Buatan PT Hummatech Raih Apresiasi dari Pemerintah Provinsi Jawa Timur"></a>
                                                            <time class="date">
                                                                2 Mei 2024
                                                            </time>
                                                        </div>
                                                        <div class="info">
                                                            <div class="meta">
                                                                <ul>
                                                                    <li>
                                                                        <img src="{{ asset('landing-page/profile/user-1.jpg') }}" alt="Hummatech Logo">
                                                                        <div class="categories">
                                                                            <a href="javascript:void(0)" class="category-link">Prestasi</a>
                                                                            <a>,</a>
                                                                            <a href="javascript:void(0)" class="category-link">Software
                                                                                Development</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h3>
                                                                <a href="sipjaki-buatan-pt-hummatech-raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html">
                                                                    SIPJAKIBuatan PT Hummatech Raih Apresiasi dari Pemerintah Provinsi Jawa Timur</a>
                                                            </h3>

                                                            <div style="white-space: pre-wrap;">

                                                                <p class="ql-align-justify">SIPJAKI merupakan kjasefjkasfdkfjasfkjsbfbasjkdgbsfjkvabsfjdgvbfdjvbgasjdkkkkkkkkkkkkkkkkbvkdafjvbjfkdvbjksistem informasi yang membantudalam meningkatkan kemudahan akses informasi usaha jasa konstruksi,meningkatkan transparansi, serta membantu memperkuat jaringan bisnis pelakuusaha dalam rantai pasok konstruksi. Sistem ini diluncurkan pada tahun 2024dan telah memberikan banyak manfaat bagi dinas terkait.</p>

                                                                <p class="ql-align-justify">SIPJAKI merupakan kjasefjkasfdkfjasfkjsbfbasjkdgbsfjkvabsfjdgvbfdjvbgasjdkkkkkkkkkkkkkkkkbvkdafjvbjfkdvbjksistem informasi yang membantudalam meningkatkan kemudahan akses informasi usaha jasa konstruksi,meningkatkan transparansi, serta membantu memperkuat jaringan bisnis pelakuusaha dalam rantai pasok konstruksi. Sistem ini diluncurkan pada tahun 2024dan telah memberikan banyak manfaat bagi dinas terkait.</p>

                                                            </div>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>

                            <!-- End Start Sidebar -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
