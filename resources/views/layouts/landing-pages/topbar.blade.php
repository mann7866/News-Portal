
    <style>
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            z-index: 1000;
            background-color: rgb(251, 253, 251);
        }
        .navbar-nav .nav-link {
            font-family: Arial, sans-serif; /* Change this to any standard font family */
            font-size: 16px; /* Adjust font size as needed */
            {{--  font-weight: bold; /* Adjust font weight as needed */  --}}
        }
        .navbar-nav .nav-link.active {
            color: #007bff; /* Active link color */
        }
        .navbar{
            margin-left: 660px;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <header class="app-header fixed-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="navbar-nav mx-auto">
                    <a href="#" class="nav-item nav-link text-dark active">Home</a>
                    <a href="#" class="nav-item nav-link text-dark">Berita</a>
                    <div class="dropdown">
                        <a href="#" class="nav-item fs-4 nav-link text-dark"  id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-menu-2"></i>Profile</a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">Visi & Misi</a>
                            <a class="dropdown-item" href="#">Grur & staf Karyawan</a>
                            <a class="dropdown-item" href="#">Struktur Organisasi</a>
                            <a class="dropdown-item" href="#">Sarana Prasarana</a>
                            <a class="dropdown-item" href="#">Galery Foto</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="nav-item fs-4 nav-link text-dark"  id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-menu-2"></i>Jurusan</a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">PPLG/Pengembangan Perangkat Lunak dan Gim</a>
                            <a class="dropdown-item" href="#">TJKT/Teknik Jaringan Komputer dan Telekomunikasi</a>
                            <a class="dropdown-item" href="#">TO/Teknik Otomotif</a>
                            <a class="dropdown-item" href="#">Busana</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="nav-item fs-4 nav-link text-dark"  id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-menu-2"></i>Organisasi</a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">OSIS/Organisasi Siswa Intra Sekolah</a>
                            <a class="dropdown-item" href="#">DA/Dewan Ambalan</a>
                            <a class="dropdown-item" href="#">PMR/Palang Merah Remaja</a>
                            <a class="dropdown-item" href="#">IPNU/Ikatan Pelajar Nahdlatul Ulama</a>
                            <a class="dropdown-item" href="#">IPPNU/Ikatan Pelajar Putri Nahdlatul Ulama</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="nav-item fs-4 nav-link text-dark"  id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-menu-2"></i>Ekstrakurikuler</a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">Badminton</a>
                            <a class="dropdown-item" href="#">MultiMedia</a>
                            <a class="dropdown-item" href="#">Voly</a>
                            <a class="dropdown-item" href="#">Futsal</a>
                            <a class="dropdown-item" href="#">Drumband</a>
                            <a class="dropdown-item" href="#">Hadrah</a>
                            <a class="dropdown-item" href="#">Tata Rias</a>
                            <a class="dropdown-item" href="#">Eskul Musik</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link text-dark">Modul</a>
                    <div class="dropdown">
                        <a href="#" class="nav-item fs-4 nav-link text-dark"  id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-menu-2"></i>Ekstrakurikuler</a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">P5/Proyek Penguatan Profil Pelajar Pancasila</a>
                        </div>
                    </div>
                </div>  
            </div>
        </nav>
    </header>

