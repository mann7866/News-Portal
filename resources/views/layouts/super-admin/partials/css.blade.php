<style>
    .toast-header-success {
        background-color: #8df6ac;
        color: white;
    }

    .toast-s {
        background-color: #8df6ac;
        color: white;
    }

    .toast-header .btn-close {
        color: white;
    }

    .toast-header-danger {
        background-color: #fbac9b;
        color: white;
    }

    .toast-d {
        background-color: #fbac9b;
        color: white;
    }

    .toast-header .btn-close {
        color: white;
    }

    /* Animasi untuk toast muncul */
    @keyframes toastSlideIn {
        0% {
            transform: translateY(-100%);
            /* Mulai dari atas */
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            /* Posisikan ke bawah */
            opacity: 1;
        }
    }

    /* Animasi untuk toast menghilang */
    @keyframes toastSlideOut {
        0% {
            transform: translateY(0);
            opacity: 1;
        }

        100% {
            transform: translateY(-100%);
            /* Hilang ke atas */
            opacity: 0;
        }
    }

    /* Menambahkan animasi ke elemen toast */
    .toast.show {
        animation: toastSlideIn 0.5s ease-out forwards;
        /* Muncul dengan animasi */
    }

    /* Setelah toast disembunyikan, animasi keluar */
    .toast.hide {
        animation: toastSlideOut 0.5s ease-in forwards;
    }

    /* Pengaturan waktu animasi untuk toast */
    .toast {
        transition: opacity 0.5s ease-out;
    }

</style>


<script>
    // Fungsi untuk format waktu (jam:menit:detik)
    // Fungsi untuk format jam dan menit (jam:menit)
    function formatTime(date) {
        const hours = String(date.getHours()).padStart(2, '0'); // Mengambil jam dan memastikan dua digit
        const minutes = String(date.getMinutes()).padStart(2, '0'); // Mengambil menit dan memastikan dua digit
        return `${hours}:${minutes}`; // Menampilkan format jam:menit
    }

    // Menambahkan waktu terkini saat toast muncul
    document.addEventListener('DOMContentLoaded', function() {
        const toastTimeElement = document.getElementById('toast-time');
        const currentTime = new Date();
        toastTimeElement.textContent = formatTime(currentTime); // Menampilkan jam dan menit terkini
    });
</script>
