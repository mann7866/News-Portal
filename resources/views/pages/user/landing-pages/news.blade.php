<style>
    /* Menambahkan smooth scroll untuk seluruh halaman */
    html {
        scroll-behavior: smooth; /* Enable smooth scrolling */
    }

    /* Styling untuk ikon gambar berita */
    .img-icons {
        width: 80px; /* Set a small width for the image */
        height: auto;
        margin-bottom: 1rem;
    }

    /* Styling grid untuk berita */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 columns per row */
        gap: 1.5rem; /* Spacing between items */
        margin: 0 auto;
        max-width: 1200px;
    }

    /* Styling untuk setiap berita dalam grid */
    .grid-margin {
        background-color: #ffffff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .grid-margin:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .readmore-link {
        color: #007bff;
        font-weight: bold;
        text-decoration: none;
    }

    .readmore-link:hover {
        text-decoration: underline;
    }

    /* Menyesuaikan styling untuk header bagian berita */
    .content-header {
        text-align: center;
        margin-bottom: 4vh;
    }

    .content-header h2 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .content-header h6 {
        font-size: 1.1rem;
        color: #555;
    }

    /* Responsif: pada ukuran layar kecil, tampilkan grid dalam 1 kolom */
    @media (max-width: 768px) {
        .news-grid {
            grid-template-columns: 1fr; /* 1 column per row for smaller screens */
        }

        .img-icons {
            width: 60px; /* Reduce the image size on smaller screens */
        }
    }
</style>

<section style="margin-bottom: 5vh" class="features-overview" id="features-section">
    <div class="content-header">
        <h2>Berita Terkini</h2>
        <h6 class="section-subtitle text-muted">Ini adalah beberapa berita terkini yang ada di SMK Al-Azhar</h6>
    </div>
    <div class="news-grid">
        <div class="grid-margin">
            <img src="landing-page/images/news-image.jpg" alt="News Image 1" class="img-icons">
            <h5 class="py-3">Berita 1</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce eget consectetuer turpis, suspendisse.</p>
            <a href="#">
                <p class="readmore-link">Readmore</p>
            </a>
        </div>
        <div class="grid-margin">
            <img src="landing-page/images/news-image.jpg" alt="News Image 2" class="img-icons">
            <h5 class="py-3">Berita 2</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce eget consectetuer turpis, suspendisse.</p>
            <a href="#">
                <p class="readmore-link">Readmore</p>
            </a>
        </div>
        <div class="grid-margin">
            <img src="landing-page/images/news-image.jpg" alt="News Image 3" class="img-icons">
            <h5 class="py-3">Berita 3</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce eget consectetuer turpis, suspendisse.</p>
            <a href="#">
                <p class="readmore-link">Readmore</p>
            </a>
        </div>
        <div class="grid-margin">
            <img src="landing-page/images/news-image.jpg" alt="News Image 4" class="img-icons">
            <h5 class="py-3">Berita 4</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce eget consectetuer turpis, suspendisse.</p>
            <a href="#">
                <p class="readmore-link">Readmore</p>
            </a>
        </div>
        <div class="grid-margin">
            <img src="landing-page/images/news-image.jpg" alt="News Image 5" class="img-icons">
            <h5 class="py-3">Berita 5</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce eget consectetuer turpis, suspendisse.</p>
            <a href="#">
                <p class="readmore-link">Readmore</p>
            </a>
        </div>
        <div class="grid-margin">
            <img src="landing-page/images/news-image.jpg" alt="News Image 6" class="img-icons">
            <h5 class="py-3">Berita 6</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce eget consectetuer turpis, suspendisse.</p>
            <a href="#">
                <p class="readmore-link">Readmore</p>
            </a>
        </div>
    </div>
</section>
