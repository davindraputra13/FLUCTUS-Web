<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluctus | Surf Rock Band from Bali</title>
    
    <!-- Google Fonts untuk Tipografi Surf Rock Modern -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Swiper & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<script>
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');

    menuToggle.addEventListener('click', function() {
        menuToggle.classList.toggle('active');
        mainNav.classList.toggle('active');
    });

    // Menutup menu saat tautan di-klik (Sangat berguna di HP)
    document.querySelectorAll('.main-nav a').forEach(link => {
        link.addEventListener('click', () => {
            menuToggle.classList.remove('active');
            mainNav.classList.remove('active');
        });
    });

    // 1. Pindah garis aktif saat menu DIKLIK
const navLinks = document.querySelectorAll('.main-nav a');

navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Hapus class active dari semua menu
        navLinks.forEach(item => item.classList.remove('active'));
        // Tambahkan class active ke menu yang baru diklik
        this.classList.add('active');
    });
});

// 2. Pindah garis aktif otomatis saat LAYAR DI-SCROLL (Scrollspy)
const sections = document.querySelectorAll('section');

window.addEventListener('scroll', () => {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        // Deteksi posisi scroll layar
        if (pageYOffset >= (sectionTop - 150)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});
</script>
<body>

<header>
    <div class="logo-container">
        <a href="index.php">
            <img src="assets/images/fluctus-logo.png" alt="Fluctus Logo">
        </a>
    </div>

    <!-- Tombol Hamburger yang Lebih Interaktif -->
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav class="main-nav" id="mainNav">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#discography">DISCOGRAPHY</a></li>
            <li><a href="#shows">SHOW & DATE</a></li>
            <li><a href="#video">VIDEOS</a></li>
            <li><a href="#merch">STORE</a></li>
 
        </ul>
    </nav>
</header>

