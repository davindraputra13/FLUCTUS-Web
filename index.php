<?php include 'header.php'; ?>

    <main class="dashboard">
<section class="hero-slider">
    <div class="slider-container">
        <div class="slide active"><img src="assets/images/hero1.jpg" alt="Band 1"></div>
        <div class="slide"><img src="assets/images/hero2.jpg" alt="Band 2"></div>
        <div class="slide"><img src="assets/images/hero3.jpg" alt="Band 3"></div>
    </div>

    <!-- Logo Overlay -->
    <div class="logo-overlay">
        <img src="assets/images/fluctus-logo.png" alt="Fluctus Logo" class="waving-logo">
    </div>

    <!-- Tombol Navigasi -->
    <button class="arrow left" onclick="moveSlide(-1)">&#10094;</button>
    <button class="arrow right" onclick="moveSlide(1)">&#10095;</button>

    <!-- Indikator Dot -->
    <div class="indicators">
        <span class="dot active" onclick="setSlide(0)"></span>
        <span class="dot" onclick="setSlide(1)"></span>
        <span class="dot" onclick="setSlide(2)"></span>
    </div>
</section>

<section id="discography" class="discography-section">
    <img src="assets/images/tiki.png" class="tiki-bg tiki-left" alt="Tiki">
    <img src="assets/images/tiki.png" class="tiki-bg tiki-right" alt="Tiki">
    
    <div class="discography-container">
        <h2 class="section-title">LATEST RELEASE</h2>
        
        <div class="album-wrapper">
            <!-- Cover Album -->
            <div class="album-art">
                <img src="assets/images/cover-album-tropical-journey.jpg" alt="Tropical Journey Album Cover">
            </div>
            
            <!-- Details & Tag -->
            <div class="album-details">
                <span class="release-tag">2025</span>
                <h3>Tropical Journey Album</h3>
                <p>On August 22, 2025, FLUCTUS released their album titled "Tropical Journey."</p>
                <p>This album features 8 tracks, including two previously released focus tracks, "Don’t Worry" and "Waited." These eight songs flow like a sea breeze, taking listeners on a journey through a warm tropical atmosphere full of waves, joy, and freedom. At the end of the journey, it is not a savior that we find, but the realization that we are able to stand not because everything is perfect, but because we have grown together with the story itself.</p>
                
                <div class="listen-links">
                    <a href="https://open.spotify.com/album/0NADB7obaVaCJWArxbgzoD?si=cHQWLcbmRCq_cZnMVHNGVw" target="blank" class="btn-listen"><i class="fa-brands fa-spotify"></i> Spotify</a>
                    <a href="https://music.apple.com/id/album/tropical-journey/1834182696" target="blank" class="btn-listen"><i class="fa-brands fa-apple"></i> Apple Music</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-container">
    <div class="about-image">
        <img src="assets/images/profile.jpg" alt="Fluctus Band Profile">
    </div>
    <div class="about-text">
        <h3>ABOUT US</h3>
        <h2>FLUCTUS</h2>
        <p>FLUCTUS is an Indie Pop Rock band with a touch of Surf, formed in Bali in 2022. The group consists of Davin, Deva, Oka, and Dedi. In 2023, FLUCTUS began moving forward by creating a new identity, new music, and a new concept. Inspired by vintage guitar sounds with a signature spring reverb effect, their Indie Surf Pop Rock songs have successfully captured the hearts and minds of both the young and old generations.</p>
        <p>With <em>Tropical Journey</em> as our latest release, we invite listeners into an archive of memories collected from long travels along the shoreline and the chaotic heartbeat of the city. We don’t just play music, we curate the feelings left behind by the road.</p></div>
</section>

<section class="archive-section">
    <div class="archive-container">
        
        
        <!-- Sisi Kiri: Narasi/Deskripsi -->
        <div class="archive-description">
    <h2 class="section-title">FLUCTUS RELEASED MUSIC</h2>
<p>
        From late-night jam sessions in Bali to crafting our signature vintage surf-pop sound, making music has always been about capturing honest emotions. Every riff, reverb layer, and rhythm we build is a step forward in exploring the quiet coastlines and chaotic beats of life.
    </p>
    <p>
        We don’t just write songs—we document our growth, turning shared experiences, travels, and silent reflections into a soundscape you can ride along with.
    </p>
</div>

        <!-- Sisi Kanan: Grid 4 Single -->
        <div class="archive-grid">
            <!-- Kartu 1 -->
            <div class="single-card">
                <img src="assets/images/dont-worry.jpg" alt="Single Cover">
                <h3>Don't Worry</h3>
                <a href="https://open.spotify.com/track/1zYxvl6IYttslpaeF7UgUp?si=0585b9bae58843e0" target="blank" class="btn-sm">Spotify</a>
            </div>
            <!-- Kartu 2 -->
            <div class="single-card">
                <img src="assets/images/comeandgo.jpg" alt="Single Cover">
                <h3>Come and Go</h3>
                <a href="https://open.spotify.com/track/30r0UGgyHZG6Rzay2mxcZ0?si=ada4874b8d414416" target="blank" class="btn-sm">Spotify</a>
            </div>
            <!-- Kartu 3 -->
            <div class="single-card">
                <img src="assets/images/fluctus-beda-dunia.jpg" alt="Single Cover">
                <h3>Beda Dunia</h3>
                <a href="https://open.spotify.com/track/1QjyHY01IUBYHUuEXnDvAJ?si=4a2b62bb7cc64d44" target="blank" class="btn-sm">Spotify</a>
            </div>
            <!-- Kartu 4 -->
            <div class="single-card">
                <img src="assets/images/fluctus-flower.jpg" alt="Single Cover">
                <h3>Flower</h3>
                <a href="https://open.spotify.com/track/6ccnt39T7666R5OTh66StQ?si=ccac5238cf4b406a" target="blank" class="btn-sm">Spotify</a>
            </div>
        </div>

    </div>
</section>


<section id="video" class="video-section">
    <div class="video-container">
        <h2 class="section-title">LATEST VIDEOS</h2>
        
        <div class="video-grid">
            <!-- Video 1 -->
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/K_qODbF1GDk" frameborder="0" allowfullscreen></iframe>
            </div>
            <!-- Video 2 -->
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/XKu4XB-Vsqk" frameborder="0" allowfullscreen></iframe>
            </div>
            <!-- Video 3 -->
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/apzw4UQRXPU" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section id="shows" class="show-section"> <!-- Disesuaikan ke show-section -->
    <div class="show-container">
        
        <!-- Judul dipisah/diberi struktur yang rapi -->
        <div class="show-header">
            <h2 class="section-title">UPCOMING HOLIDAY!</h2>
        </div>
        
        <div class="events-list">
            <?php
            // Membaca file JSON
            $json_data = file_get_contents('events.json');
            // Mengubah menjadi array PHP
            $events = json_decode($json_data, true);

            if ($events) {
                foreach ($events as $event) {
                    echo '
                    <div class="event-row">
                        <div class="event-date">
                            <span class="day">'.$event['day'].'</span>
                            <span class="month">'.$event['month'].'</span>
                        </div>
                        <div class="event-info">
                            <h3>'.$event['event'].'</h3>
                            <p>'.$event['location'].'</p>
                        </div>
                        <div class="event-action">
                            <a href="'.$event['link'].'" class="btn-sm" target="_blank" rel="noopener noreferrer">MORE INFO</a>
                        </div>
                    </div>';
                }
            } else {
                echo '<p style="text-align:center;">No upcoming voyages at the moment.</p>';
            }
            ?>
        </div>
    </div>
</section>


<!-- Masukkan link CSS Swiper ini di dalam tag <head> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- SECTION MERCHANDISE -->
<section id="merch" class="merch-section">
    <div class="merch-container">
        <h2 class="section-title">~SOUVENIR FLUCTUS~</h2>
        
        <div class="swiper merch-swiper">
            <div class="swiper-wrapper">
                <?php
                require_once 'db_connect.php';
                $res = $conn->query("SELECT * FROM merch");
                while($row = $res->fetch_assoc()):
                    $name = htmlspecialchars($row['name']);
                    $sizes = htmlspecialchars($row['sizes']);
                    $ig_link = "https://ig.me/m/souvenir.fluctus"; 
                    $toko = htmlspecialchars($row['tokopedia_link'] ?? '');
                    $shop = htmlspecialchars($row['shopee_link'] ?? '');
                ?>
                    <div class="swiper-slide">
                        <div class="merch-card">
                            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo $name; ?>">
                            <h3><?php echo $name; ?></h3>
                            
                            <?php if(!empty($row['sizes'])): ?>
                                <div class="size-tag">Size: <?php echo $sizes; ?></div>
                            <?php endif; ?>
                            
                            <p><strong>IDR <?php echo number_format($row['price'], 0, ',', '.'); ?></strong></p>
                            
                            <button class="btn-main" onclick="openOrderModal('<?php echo addslashes($name); ?>', '<?php echo $ig_link; ?>', '<?php echo addslashes($toko); ?>', '<?php echo addslashes($shop); ?>')">Order</button>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            
            <!-- Tombol Navigasi Swiper -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<div id="orderModal" class="modal-overlay">
    <div class="modal-box">
        <h3 id="modalTitle">Order Produk</h3>
        <div id="viewMain">
            <a id="dmBtn" href="#" target="_blank" class="modal-btn" style="background:#E1306C; color:white; border:none;">Beli via DM (Instagram)</a>
            <button id="shopTrigger" class="modal-btn" onclick="showMarketplaces()">Beli via Online Shop</button>
        </div>
        <div id="viewMarketplace" style="display:none;">
            <a id="tokoBtn" href="#" target="_blank" class="modal-btn" style="background:#42b549; color:white; border:none;">Tokopedia</a>
            <a id="shopBtn" href="#" target="_blank" class="modal-btn" style="background:#ee4d2d; color:white; border:none;">Shopee</a>
            <button class="modal-btn" style="background:#eee;" onclick="resetModal()">Kembali</button>
        </div>
        <button class="modal-btn" style="border:none; margin-top:10px; background:none; text-decoration:underline;" onclick="closeModal()">Tutup</button>
    </div>
</div>

<script>
    // A. Fungsi Modal
    function openOrderModal(name, ig, toko, shop) {
        document.getElementById('orderModal').style.display = 'flex';
        document.getElementById('modalTitle').innerText = "Order " + name;
        document.getElementById('dmBtn').href = ig;
        document.getElementById('tokoBtn').href = toko;
        document.getElementById('shopBtn').href = shop;
        document.getElementById('shopTrigger').style.display = (toko || shop) ? 'block' : 'none';
        document.getElementById('tokoBtn').style.display = (toko) ? 'block' : 'none';
        document.getElementById('shopBtn').style.display = (shop) ? 'block' : 'none';
        resetModal();
    }
    function showMarketplaces() {
        document.getElementById('viewMain').style.display = 'none';
        document.getElementById('viewMarketplace').style.display = 'block';
    }
    function resetModal() {
        document.getElementById('viewMain').style.display = 'block';
        document.getElementById('viewMarketplace').style.display = 'none';
    }
    function closeModal() {
        document.getElementById('orderModal').style.display = 'none';
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.merch-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: false,
        observer: true,
        observeParents: true,
        navigation: { 
            nextEl: '.swiper-button-next', 
            prevEl: '.swiper-button-prev' 
        },
        breakpoints: { 
            // Tampilan Mobile Kategori Besar (>= 480px)
            480: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // Tampilan Tablet (>= 640px): Tampilkan 2 Katalog
            640: { 
                slidesPerView: 2, 
                spaceBetween: 20 
            },
            // Tampilan Desktop (>= 992px): Maksimal 3 Katalog
            992: { 
                slidesPerView: 3, 
                spaceBetween: 30 
            } 
        }
    });
});
</script>


    </main>

<?php include 'footer.php'; ?>