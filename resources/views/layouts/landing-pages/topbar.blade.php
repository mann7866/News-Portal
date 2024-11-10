<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 70px;
            margin-bottom: 25px;
            z-index: 1000;
            background-color: rgb(251, 253, 251);
        }

        .nav-link {
            padding: 10px;
            color: #333;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #007bff;
        }

        .nav-link:hover {
            color: #007bff;
            border-bottom: 2px solid blue;
            padding-bottom: 2px;
        }

        .date {
            font-size: 16px;
            color: #333;
        }

        /* CSS tambahan untuk gambar logo */
        .navbar img {
            width: 70px; /* Atur sesuai kebutuhan */
            height: 70%;
            background-color: transparent;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .navbar img:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <header class="fixed-header">
        <nav class="navbar d-flex justify-content-around align-items-center">
            <img src="{{asset('Logo/Proposal.jpg')}}" alt="Logores" class="logo">
            <ul class="navbar-nav d-flex flex-row list-unstyled">
                <li class="nav-item"><a href="#" class="nav-link active">Olahraga</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Perlombaan</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Study</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Meeting</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Siswa</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Guru</a></li>
                <li class="nav-item"><a href="#" class="nav-link">RPL</a></li>
            </ul>
            <div class="date" id="date"></div>
        </nav>
    </header>

    <script>
        function updateDate() {
            var date = new Date();
            document.getElementById('date').innerHTML = date.toLocaleDateString('id-ID', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }
        updateDate();
    </script>
</body>

</html>
