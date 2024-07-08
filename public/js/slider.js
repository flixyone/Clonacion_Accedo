document.addEventListener('DOMContentLoaded', function () {
    let slides = document.querySelectorAll('.slide');
    let indicators = document.querySelectorAll('.indicator');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            indicators[i].classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
                indicators[i].classList.add('active');
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
            currentIndex = index;
        });
    });

    setInterval(nextSlide, 4000); // Cambio el slider cada 4 segundos
});
