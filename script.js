// Deklarasi variabel
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

// Fungsi pembantu
function showSlide(index) {
    slides.forEach(s => s.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));
    slides[index].classList.add('active');
    dots[index].classList.add('active');
}

// Menempelkan fungsi ke window agar HTML bisa melihatnya
window.moveSlide = function(step) {
    currentSlide = (currentSlide + step + slides.length) % slides.length;
    showSlide(currentSlide);
};

window.setSlide = function(index) {
    currentSlide = index;
    showSlide(currentSlide);
};

// Auto-play
document.addEventListener('DOMContentLoaded', function() {
    setInterval(() => {
        moveSlide(1);
    }, 5000);
});