
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
            margin-left: 700px;
        }
    </style>
    <header class="app-header fixed-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="navbar-nav mx-auto">
                    <a href="#" class="nav-item nav-link text-dark active">Olahraga</a>
                    <a href="#" class="nav-item nav-link text-dark">Perlombaan</a>
                    <a href="#" class="nav-item nav-link text-dark">Study</a>
                    <a href="#" class="nav-item nav-link text-dark">Meeting</a>
                    <a href="#" class="nav-item nav-link text-dark">Siswa</a>
                    <a href="#" class="nav-item nav-link text-dark">Guru</a>
                    <a href="#" class="nav-item nav-link text-dark">RPL</a>
                </div>
            </div>
        </nav>
    </header>

